<?php 
function registerUser($post){
    global $form_error;
    global $form_success;
    global $connection;

    /**REGISTER */
    $usr_name  = $post["username"];
    $usr_email = $post["email"];
    $usr_pswd  = $post["password"];
    
    //validate username.
    if(empty($usr_name)){
        $form_error = "Enter username";
        return false;
    }else if(strlen($usr_name) < 3){
        $form_error = "Username is too short";
        return false;
    }else{
        $usr_name = str_replace(' ', '', $usr_name);
        if (!preg_match("/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/", $usr_name)){
            $form_error = "Avoid empty spaces and special characters";
            return false;
        }else{
            $username = filter_user_input($usr_name);
            //Check the db to see if the username already exists
            $sql = "SELECT username FROM users WHERE username = '".$username."'";
            $result = $connection->query($sql); 
            //log error to server.
            if(!$result){exit();}
            if($result->num_rows > 0){
                $form_error = "Username already exists";
                return false;
            }else{
                // $form_error ="Username ok";
            }
        }
    }
    
    //validate email
    if(empty($usr_email)){
        $form_error = "Email cannot be empty"; 
         return false;
    }else{
    $email = filter_user_input($usr_email);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $form_error = "Email format is invalid"; 
        return false;
    }else{
        //Check the db to see if the username already exists
        $sql = "SELECT email FROM users WHERE email = '".$email."'";
        $result = $connection->query($sql); 
        //log error to server.
        if(!$result){return false;}
        if($result->num_rows > 0){
            $form_error = "Email already exist";
            return false;
        }else{
            //echo "<span class='ajax_clear_success'>Email Ok</span>";
        }
    }
    }
    
    //validate password
    if(empty($usr_pswd)){
        $form_error = "Password is empty";
        return false;
    }else{
        if(!preg_match( '/[^A-Za-z0-9]/', $usr_pswd)){
            $form_error = "Include alpanumeric or special characters in password";
            return false;
        }else if(strlen($usr_pswd) < 10){
            $form_error = "Password should be at least 10 characters";
            return false;
        }else{
            $password = filter_user_input($usr_pswd);
            //echo "<span class='ajax_clear_success'>Password Ok</span>";
        }
    }

    $test_condition = true;
    //make sure that username does not exist
    while($test_condition){
       $unique_id = generateUniqueID($username);
       $auth  = md5($unique_id);
       $mix = $auth;
       if(checkIfUniqueIdExist($unique_id)){
           $test_condition = true;
       }else{
           $test_condition = false;
       }
    }

    //get timestamp
    $time = time();
    //gen ip_address 
    //handle geo location fail
    $ip_address = $_SERVER["REMOTE_ADDR"];

    //gen  cookies 
	$cookie_name = "ssc_ck";
	$cookie_value = sha1($mix);
	$expire = time() + 60*60*24; //expire one day from now.
	$path = "/";
	// $domain = "www.wigwork.com";
	// $secure = isset($_SERVER["HTTPS"]);
	// $httponly  = true;
	//setcookie($cookie_name, $cookie_value, $path, $domain, $secure, $httponly);
    setcookie($cookie_name, $cookie_value, $expire,  $path);
    
    //browser type
    $browser_type = filter_user_input($_SERVER['HTTP_USER_AGENT']);
    
    //gen encrypted password.
    $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users 
    (u_id, 
    username, 
    email, 
    password, 
    reg_date, 
    auth, 
    cookie_timestamp,
    ip_address,
    browser) 
    VALUES (
        '".$unique_id."',
        '".$username."',
        '".$email."',
        '".$encrypted_password."',
        '".$time."',
        '".$auth."',
        '".$cookie_value."',
        '".$ip_address."',
        '".$browser_type."'
    )";

    $result = $connection->query($sql);
    if($result){
        $_SESSION["u_id"]  = $unique_id;
        $_SESSION["username"] = $username;
        $_SESSION["email"]   = $email;
        header("location:profile/");
    }else{
        $form_error = "Oops! try again";
        return false;
    }
//cls registerUser function
}
?>