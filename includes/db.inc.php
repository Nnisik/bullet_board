<?php
    // db paraments
    $serverName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "phpproject_bulletingboard";

    // connecting to db
    $conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

    // check connection is succesfull
    if (!$conn) {
        // if faiiled
        die("Connction failed " . mysqli_connect_error());
    }