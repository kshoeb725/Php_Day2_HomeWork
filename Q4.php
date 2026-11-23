<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Name: <input type="text" name="name" id="">
    Email : <input type="text" name="email" id="">
    Password : <input type="text" name="pass" id="">
    Phone Number: <input type="text" name="phone" id="">
    

    <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $Email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass = $_POST["pass"];

    if(empty($name)){
        echo "<script>alert('please enter the name first')</script>";
    }
    elseif(empty($name) || empty($Email) || empty($phone) || empty($pass)){
        echo "<script>alert('please enter the all  field')</script> ";
    }
    elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('please enter a valid Email')</script>";
    }
    elseif(strlen($pass)<8){
        echo"<script>alert('please enter atleast 8 charchter')</script>";
    }elseif(strlen($phone)<9){
        echo"<script>alert('please enter the correct phone number')</script>";
    }else{
        echo"<script>alert('Sucess')</script>";
    }
}

?>