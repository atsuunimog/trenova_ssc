<?php 
//development...

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PSWD", "");
define("DB_NAME", "trenova_ssc");

//production...
// define("DB_SERVER", "nolfe.eleusis.dreamhost.com");
// define("DB_USER", "trenova_ssc");
// define("DB_PSWD", "Pot06Nova15Support");
// define("DB_NAME", "trenova_ssc");

$connection = new mysqli(DB_SERVER, DB_USER, DB_PSWD, DB_NAME);
if($connection->connect_errno > 0){
    exit("Oops! Error, something went wrong");
}

?>