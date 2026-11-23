<?php
include 'db.php';

$result = $Conn->query("select* from employee");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Job</td>
            <td>Title</td>
            <td>Salary</td>
        </tr>
        <?php while($num = $result->fetch_assoc()){

        ?>
        <tr>
            <td><?php echo $num['id'] ?></td>
            <td><?php echo $num['Job'] ?></td>
            <td><?php echo $num['name'] ?></td>
            <td><?php echo $num['Title'] ?></td>
            <td><?php echo $num['Salary'] ?></td>
        </tr>
        <?php
        }?>
    </table>
</body>
</html>