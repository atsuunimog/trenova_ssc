<?php 
function login($post){
global $form_error;
global $form_success;
global $connection;

$usr_email = $post["email"];
$usr_pswd = $post["password"];

 //validate email
if(empty($usr_email)){
    $form_error =  "Email cannot be empty"; 
    return false;
}else{
    if(!filter_var($usr_email, FILTER_VALIDATE_EMAIL)){
    $form_error =  "Mail format is not valid"; 
    return false;
    }else{
        //Check the db to see if the username already exists
        $sql = "SELECT email FROM users WHERE email = '".$usr_email."'";
        $result = $connection->query($sql); 
        //log error to server.
        if(!$result){echo "Error"; exit();}
        if($result->num_rows > 0){
            $email = filter_user_input($usr_email);
        }else{
            $form_error = "Invalid email or password";
            return false;
        }
    }
}

//validate password
if(empty($usr_pswd)){
    $form_error = "Password cannot be empty";
    return false;
}else{
    if(!preg_match( '/[^A-Za-z0-9]/', $usr_pswd)){
        $form_error = "Invalid email or password";
        return false;
    }else if(strlen($usr_pswd) < 10){
        $form_error = "Invalid email or password";
        return false;
    }else{
        $password = filter_user_input($usr_pswd);
    }
}


//Compare database passwords
$sql = "SELECT password FROM users
WHERE email='".$connection->real_escape_string($email)."'";
$result = $connection->query($sql);  
if($result){
//if query is successful check to see if value exists
    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            $db_password = $rows["password"];
        }//
    }
}
//verify password if it matches with the encrypted password in the db.
$is_match = password_verify($password, $db_password)? true: false;

if($is_match){
    //log  user into application 
    $sql_getAll = "SELECT * FROM users WHERE email = '$email' AND password = '$db_password'";
    $result = $connection->query($sql_getAll); 
    if($result){
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $_SESSION["email"] =   $rows["email"];
                $_SESSION["u_id"] =  $rows["u_id"];
                $_SESSION["username"]  =  $rows["username"];
            }
        }
    }
}else{
    echo "Incorrect email or password";
    exit();
}

//generate unique_id 
$unique_id = $_SESSION["unique_id"];
$mix = md5($unique_id);
//gen ip_address 
//handle geo location fail
$ip_address = $_SERVER['REMOTE_ADDR'];
$browser_type = $_SERVER['HTTP_USER_AGENT'];
$time = time();

    //regenerate session_id;
 session_regenerate_id();

//gen  cookies 
$logger = false;
$cookie_name = "hemba_recruiter_ck";
$cookie_value = sha1($mix);
$expire = time() + 60*60*24*7; //expire one week from now.
$path = "/";
// $domain = "www.wigwork.com";
// $secure = isset($_SERVER["HTTPS"]);
// $httponly  = true;
//setcookie($cookie_name, $cookie_value, $path, $domain, $secure, $httponly);

setcookie($cookie_name, $cookie_value, $expire,  $path);

$sql = "UPDATE users SET ip_address ='".$ip_address."', browser = '".$browser_type."', 
cookie_timestamp = '".$cookie_value."', last_login_timestamp = '".$time."'
 WHERE email = '".$email."'";
 $result = $connection->query($sql); 
 if($result){
    header("location:profile/");
 }else{
     $form_error = "Oops! Something went wrong";
     return false;
 }

 // /*mail jet logger**/
 // if($logger){
 //     $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC,MJ_APIKEY_PRIVATE,true,['version' => 'v3.1']);
 //     $body = [
 //     'Messages' => [
 //         [
 //             'From' => [
 //                 'Email' => "info@hembarecruiter.com",
 //                 'Name' => "Hemba Recruiter"
 //             ],
 //             'To' => [
 //                 [
 //                     'Email' => "{$email}",
 //                     'Name' => "Agent"
 //                 ], 
 //                 [
 //                     'Email' => "ueengine@gmail.com",
 //                     'Name' => "Agent"
 //                 ]
 //             ],
 //             'TemplateID' => 1703552,
 //             'Subject' => "Registeration Successful",
 //             'TemplateLanguage' => true,
 //             'Variables' => [
 //                 'day' => "TERMINATOR MONDAY"
 //             ]
 //         ]
 //     ]
 //     ];
 //     $response = $mj->post(Resources::$Email, ['body' => $body]);
 //     // $response->success() && var_dump($response->getData());
 // }
}//cls login


?>