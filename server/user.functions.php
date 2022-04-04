<?php 

function  updateProfile($post){
        global $form_error;
        global $form_success;
        global $connection;

        $firstname = $post["first_name"];
        $lastname = $post["last_name"];
        $school_email = $post["email"];
        $job_title = $post["job_title"];
        $phone_no = $post["phone_no"];
        $whatsapp_no = $post["whatsapp_phone_no"];
        $school_name = $post["school_name"];
        $school_address = $post["school_address"];

        //valid firstname
        if(empty($firstname)){
            $form_error = "Enter firstname";
            return false;
        }else{
            $firstname = filter_user_input($firstname);
        }

        //validate lastname 
        if(empty($lastname)){
            $form_error = "Enter lastname";
            return false;
        }else{
            $lastname = filter_user_input($lastname);
        }

        //validate email
        if(empty($school_email)){
            $school_email = filter_user_input($school_email);
        }else{
            $school_email = filter_user_input($school_email);
            if(!filter_var($school_email, FILTER_VALIDATE_EMAIL)){
                $form_error = "Email format is invalid"; 
                return false;
            }
        }

        //validate job title
        if(empty($job_title)){
            $form_error = "Enter your job title";
            return false;
        }else{
            $job_title = filter_user_input($job_title);
        }

        //validate phone no
        if(empty($phone_no)){
            $form_error = "Enter phone no";
            return false;
        }else{
            $phone_no = filter_user_input($phone_no);
            if (!preg_match("/^[0-9()-]+$/", $phone_no)){
            $form_error = "Invalid Phone format";
            return false;
            }
        }

        //validate phone no: optional
        if(empty($whatsapp_no)){
            $whatsapp_no = filter_user_input($whatsapp_no);
        }else{
            $whatsapp_no= filter_user_input($whatsapp_no);
            if (!preg_match("/^[0-9()-]+$/", $whatsapp_no)){
            $form_error = "Invalid Phone format";
            return false;
            }
        }

        //validate school name
        if(empty($school_name)){
            $form_error = "Enter your school name";
            return false;
        }else{
            $school_name = filter_user_input($school_name);
        }

        //validate school addresss
        if(empty($school_address)){
            $form_error = "Enter school address";
            return false;
        }else{
            $school_address = filter_user_input($school_address);
        }

        //state validation
        if(isset($post["state"])){
            $state = filter_user_input($post["state"]);
        }else{
            $form_error = "Select State";
            return false;
        }

        //unique_id 
        $u_id  = $_SESSION["u_id"];

        $user_exist = false;
        //check if user profile exist in the database
        $sql_check_profile = "SELECT u_id FROM profile WHERE u_id = '".$u_id."'";
        $result_check_profile = $connection->query($sql_check_profile);
        if($result_check_profile){
            if($result_check_profile->num_rows > 0){
                $user_exist = true;
            }
        }

        if($user_exist):
        //update database
        $sql = "UPDATE profile SET 
        first_name = '".$firstname."', 
        last_name = '".$lastname."', 
        email = '".$school_email."', 
        job_title = '".$job_title."', 
        phone_no = '".$phone_no."', 
        whatsapp_no = '".$whatsapp_no."', 
        school_name = '".$school_name."', 
        school_address = '".$school_address."', 
        state = '".$state."'
        WHERE u_id = '".$u_id."'";

        $result = $connection->query($sql);
        if($result){
            $form_success = "Profile Updated";
        }else{
            //do noting....
        }

        else:
        //insert data into db

        $sql =  "INSERT INTO profile (u_id, first_name, last_name, email, job_title, phone_no, whatsapp_no,
        school_name, school_address, state) 
        VALUES (
            '".$u_id."',
            '".$firstname."',
            '".$lastname."',
            '".$school_email."',
            '".$job_title."',
            '".$phone_no."',
            '".$whatsapp_no."',
            '".$school_name."', 
            '".$school_address."', 
            '".$state."'
        )";
        $result = $connection->query($sql);
        if($result){
            $form_success = "Profile Updated";
        }else{
            $form_error = "Oops! try again";
            return false;
        }

        endif;
}//cls function

function updatePackages($post){
    global $connection;
    global $form_error;
    global $form_success;

    if(isset($post["packages"])):
        $packages = $post["packages"];
    else:
        $form_error = "Select a package";
        return false;
    endif;

    $u_id = $_SESSION["u_id"];
    $request_date = time();
    $status = 1;

    //status = > pending(0), paid(1), expired(2)
    $sql = "INSERT INTO subscription (u_id, request_date, package_name)
     VALUES ('".$u_id."', '".$request_date."', '".$packages."')";
    $result = $connection->query($sql);
    if($result){
        //send invoice to user
        $form_success = "Updated Successfully";
        return false;
    }
}


?>