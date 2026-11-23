<?php

$ServerName = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";

$Conn = new mysqli($ServerName,$user,$pass,$dbname);

    if(!$Conn){
      
        echo "not connected";
    }




?>