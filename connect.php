<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "12345678";
    $db_name = "test";

    try{
        $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $err){
        echo "Connect Failed". $err->getMassage();
    }
?>