<?php 
//create connection to db
include "db_config/db.config.php";
include "template.functions.php";


//global variable container
$form_error = "";
$form_success = "";

include "register.functions.php";
include "login.functions.php";
include "user.functions.php";


if($_SERVER["REQUEST_METHOD"] == "POST"):
    //register users
    if(isset($_POST["sign-up"])):
        registerUser($_POST);
    endif;

     //register users
     if(isset($_POST["log-user"])):
        login($_POST);
    endif;

    //subscribe
    if(isset($_POST["subscribe"])):
        subscribe($_POST);
    endif;

elseif($_SERVER["REQUEST_METHOD"] == "GET"):

    if(isset($_GET["log-out"])):
        session_start();
        session_unset();
        session_destroy();
        session_write_close();
        session_regenerate_id(true);
        header("location:./");
    endif;

else:
//do noting....
endif;

?>