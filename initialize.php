<?php session_start(); ?>

<?php

    $db_hostname = "localhost";
    $db_username = "root";
    $db_passsword = "";
    $db_name = "sample_db";

        $connection = new mysqli($db_hostname, $db_username, $db_passsword, $db_name);

    if($connection->connect_error){
        die("Connection failed: ". $connection->connect_error);
    }

