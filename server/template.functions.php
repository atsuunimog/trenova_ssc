<?php 

//filter user input
function filter_user_input($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

/**Genereate unique_id */
function generateUniqueID($user_n){
    $u_id = preg_replace('/\s+/', '-', $user_n);
     return uniqid($u_id);
}

/**check if user id exist */
function checkIfUniqueIdExist($u_id){
    global $connection;
    $sql = "SELECT * FROM users WHERE  unique_id = '".$u_id."'";
    $result = $connection->query($sql);
    if($result){
        if($result->num_rows > 0){
           return true;
        }else{
            return false;
        }
    }
}

//check for active subscriptions
function userHasActiveSubscription(){
    global $connection;
    if(isset($_SESSION["u_id"])):
    $u_id = $_SESSION["u_id"];
    else:
    header("location:../");
    endif;
    $sql = "SELECT status FROM subscription WHERE u_id ='".$u_id."'";
    $result =  $connection->query($sql);
    if($result){
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $status = $rows["status"];
            }
            if($status == 1){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}


//show subscription
function showSubscription(){
    global $connection;

    if(isset($_SESSION["u_id"])):
        $u_id = $_SESSION["u_id"];
    else:
        header("location:../");
    endif;

    $sql = "SELECT * FROM subscription WHERE u_id = '".$u_id."'";
    $result = $connection->query($sql);
    if($result){
        if($result->num_rows > 0){
            $count = 0;
            while($rows = $result->fetch_assoc()){
                $count++;
                $request_date = $rows["request_date"];
                $package_name = $rows["package_name"];
                $active_date  = $rows["active_date"];
                $expiry_date  = $rows["expiry_date"];
                $status = $rows["status"];
                if($status == 0){
                    $status = "<span class='badge bg-danger text-light'>Pending</span>";
                }elseif($status == 1){
                    $status = "<span class='badge bg-success text-light'>Active</span>";
                }else{
                    $status = "<span class='badge bg-secondary text-light'>Expired</span>";
                }

                $request_date = date("d/m/y", $request_date);
                if($active_date == ""){
                    $active_date = "---";
                }
               if($expiry_date == ""){
                    $expiry_date = "---";
                }

            echo "
            <tr>
                <td>{$count}</td>
                <td>{$request_date}</td>
                <td>{$package_name}</td>
                <td>{$active_date}</td>
                <td>{$expiry_date}</td>
                <td>{$status}</td>
            </tr>
            ";
            }
        }
    }
}



// id
// u_id
// first_name
// last_name
// email
// job_title
// phone_no
// whatsapp_no
// school_name
// school_address
// state
// last_updated


//show all profile details
function showprofileinfo(){
    global $connection;
    $data = [];
    global $data;
    if(isset($_SESSION["u_id"])):
        $u_id = $_SESSION["u_id"];
    else:
        header("location:../");
    endif;

    $sql = "SELECT * FROM profile WHERE u_id ='".$u_id."'";
    $result = $connection->query($sql);
    if($result){
        if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $data["first_name"] = $rows["first_name"];
                $data["last_name"]  = $rows["last_name"];
                $data["email"]      = $rows["email"];
                $data["job_title"]  = $rows["job_title"];
                $data["phone_no"]   = $rows["phone_no"];
                $data["whatsapp_no"] = $rows["whatsapp_no"];
                $data["school_name"] = $rows["school_name"];
                $data["school_address"] = $rows["school_address"];
                $data["state"] = $rows["state"];
            }
            return $data;
        }else{
            $data["first_name"] = '';
            $data["last_name"]  = '';
            $data["email"]      = '';
            $data["job_title"]  = '';
            $data["phone_no"]   = '';
            $data["whatsapp_no"] ='';
            $data["school_name"] ='';
            $data["school_address"] = '';
            $data["state"] = '';

            return $data;
        }
    }
}



//subscribe to news letter
function subscribe($post){
    global $form_error; 
    global $form_success;
    global $connection;

    if(empty($post["email"])){
        $form_error = "Enter your email";
        return false;
    }else{
        $email = $post["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $form_error =  "Mail format is not valid"; 
        return false;
        }
    }
    
    //Check if user has already subscribed
    $sql = "SELECT * FROM mailing_list WHERE email = '".$email."' ";
    $result = $connection->query($sql);
    if($result){
        if($result->num_rows > 0){
            $form_error =  "email already exist";
            return false;
        }else{
            //insert data into database
            $sql_insert = "INSERT INTO mailing_list (email) VALUES ('".$email."')";
            $result_insert = $connection->query($sql_insert);
            if($result_insert){
                $form_success = "Thank your for subscribing";
                return false;
            }else{
                $form_error = "Oops! Try again";
            }
        }
    }
}
?>