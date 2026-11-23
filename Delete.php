
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
   
    <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $Id = $_POST["Id"];
       

        $sql = $Conn -> prepare("delete from emp where id = ?");
        $sql->bind_param("i",  $Id);
        if($sql ->execute()){
            echo "data Deleted";
        }else{
            echo "data not Delted";
        }
    }

?>