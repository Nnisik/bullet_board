<?php
    // db paraments
    $SERVER_NAME = "localhost";
    $DB_USER_NAME = "root";
    $DB_PASSWORD = "";
    $DB_NAME = "phpproject_bulletingboard";

    function getAllAdverts() {
        global $mysqli_connection;

        $sql = "SELECT * FROM adverts";
        $result = $mysqli_connection->query($sql);
        
        return $result->fetch_assoc();
    }
    
    function getAllUsers() {
        global $mysqli_connection;

        $sql = "SELECT * FROM users";
        $result = $mysqli_connection->query($sql);

        return $result->fetch_assoc();
    }

    function createNewUser($user_name, $user_login, $user_pwd) {
        global $mysqli_connection;

        $sql = "INSERT INTO users (usersName, usersLogin, usersPassword) VALUES (?, ?, ?);";
        $stmt = $mysqli_connection->prepare($sql);
        $stmt->bind_param('sss', $user_name, $user_login, $user_pwd);
        
        if ($result = $stmt->execute()) {
            echo "success";
            $stmt->free_result;
            return;
        }
        echo "error";
        return;
    }

    function createNewAdvert($advert_header, $desrip, $create_date, $createrID) {
        global $mysqli_connection;

        $sql = "INSERT INTO users (advert_header, desrip, create_date, createrID) VALUES (?, ?, ?, ?);";
        $stmt = $mysqli_connection->prepare($sql);
        $stmt->bind_param('ssss', $advert_header, $desrip, $create_date, $createrID);
        
        if ($result = $stmt->execute()) {
            echo "success";
            $stmt->free_result;
            return;
        }
        echo "error";
        return;
    }

    // connecting to db
    $mysqli_connection = new mysqli($SERVER_NAME, $DB_USER_NAME, $DB_PASSWORD, $DB_NAME);

    if($mysqli_connection->connect_errno) {
        printf("Connect failed: %s <br>", $mysqli_connection->connect_error);
        exit();
    }
    // printf("Connected succesfully. <br>");

    