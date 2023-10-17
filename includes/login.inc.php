<?php
    if (isset($_POST['submit'])) {
        header("location: ../login.php");
    }

    // getting URL parametrs
    $login = $_POST['login'];
    $password = $_POST['pwd'];

    // check login and password not empty
    if (empty($login) || empty($password)) {
        header("location: ../login.php?error=emptyFields");
    }

    // connect to db
    require_once "./db.inc.php";

    $sql = "SELECT * FROM users WHERE usersLogin = ?;";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);

    // getting data of user base on entered login
    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);

    echo $row;

    // check if user found
    if (empty($row)) {
        header("location: ../login.php?error=userDoesntExist");
    }

    // check if entered password is correct
    if ($password != $row["userPassword"]) {
        header("location: ../login.php?error=wrongPassword");
    }

    // go to main page
    // header("location: ../login.php?id=");