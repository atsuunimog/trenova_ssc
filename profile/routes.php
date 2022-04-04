<?php 
//create connection to db
include "../db_config/db.config.php";
include "../server/template.functions.php";

//global variable container
$form_error = "";
$form_success = "";

include "../server/user.functions.php";

if($_SERVER["REQUEST_METHOD"] == "POST"):

//update profile
if(isset($_POST["submit-profile"])):
updateProfile($_POST);
endif;

//update packages 
if(isset($_POST["submit-package"])):
updatePackages($_POST);
endif;

elseif($_SERVER["REQUEST_METHOD"] == "GET"):

    if(isset($_GET["log-out"])):
        session_start();
        session_unset();
        session_destroy();
        session_write_close();
        session_regenerate_id(true);
        header("location:../");
    endif;

else:
//do noting....
endif;

?>