
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    Enter Id : <input type="text" name="Id" id="">
    Enter Salary : <input type="text" name="sal" id="">
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $Id = $_POST["Id"];
        $Sal = $_POST["sal"];

        $sql = $Conn -> prepare("update Emp set Salary = ? where id =?");
        $sql->bind_param("di", $Sal, $Id);
        if($sql ->execute()){
            echo "data Updated";
        }else{
            echo "data not Updated";
        }
    }

?>