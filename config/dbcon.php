<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "biography";

    //Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    //Cheack database connection

    if(!$con){
        die("Could not connect to database failed: ". mysqli_connect_error());
    }else{
        echo("Connecting to database succeeded");
    }
?>