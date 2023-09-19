<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tusco";

    $con = new mysqli( $server, $user, $password, $database);
    if(!$con){
        die(mysqli_error($con));
    }