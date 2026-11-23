
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Enter Id : <input type="text" name="Id" id="">
    Enter Name : <input type="text" name="name" id="">
    Enter Salary : <input type="text" name="sal" id="">
    <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $name = $_POST["name"];
    $Id = $_POST["Id"];
    $Sal = $_POST["sal"];

    $sql = $Conn -> prepare("INSERT INTO EMP VALUES(?,?,?)");
    $sql -> bind_param("isd",$Id,$name,$Sal);

    if($sql->execute()){
        echo "Data Inserted";
    }else{
        echo "data not Inserted";
    }
}
    ?>