<?php 


if(isset($_GET["trev_pass"])):
    $pass = $_GET["trev_pass"];
   if($pass == "davido@123"){
    // do nothing...
   }else{
    header("Location: ../");
   }
else:
    header("Location: ../");
endif;

?>
<?php include "../db_config/db.config.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ambassador</title>
  </head>
  <body>
  

<?php 
$sql = "SELECT * FROM ambassador";
$result = $connection->query($sql);
if($result){
    if($result->num_rows > 0){
        $count = 0; 
        echo 
        "
        <div class='table-responsive'>
        <table class='table w-100'>
        <thead>
            <tr>
                <th>No</th>
                <th>FirstName</th>
                <th>Surname</th>
                <th>email</th>
                <th>Phone</th>
                <th>Whatsapp</th>
                <th>address</th>
                <th>CV</th>
            </tr>
        </thead>
        <tbody>";
        while($rows = $result->fetch_assoc()){
            $count ++; 
            $first_name = $rows["first_name"];
            $surname = $rows["surname"];
            $email = $rows["email"];
            $address = $rows["address"];
            $cv = $rows["cv_file"];
            $phone = $rows["phone_no"];
            $whatsapp = $rows["whatsapp"];

            echo 
            "<tr>
                <td>{$count}</td>
                <td>{$first_name}</td>
                <td>{$surname}</td>
                <td>{$email}</td>
                <td>{$phone}</td>
                <td>{$whatsapp}</td>
                <td>{$address}</td>
                <td><a href='../server/$cv'>{$cv}</a></td>
            </tr>";
        }
        echo "</tbody></table></div>";
    }else{
        echo "Error";
    }
}

?>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
