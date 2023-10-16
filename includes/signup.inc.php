<?php
    if (!isset($_POST['submit'])) {
        header("location: ../login.php");
    }

    // getting URL params
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['pwd'];
    $password_rpt = $_POST['pwd-rpt'];

    // check no fields left empty
    if (empty($name) || empty($login) || empty($password) || empty($password_rpt)) {
        header("location: ../login.php?error=emptyFields");
    }

    // check passwords match
    if ($password != $password_rpt) {
        header("location: ../login.php?error=passwordsDontMatch");
    }

    // connect to db
    require_once "db.inc.php";

    $sql = "SELECT * FROM users WHERE usersLogin = ?;";
    $stmt = mysqli_stmt_init($conn);

    // getting user with entered login 
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $resultData - mysqli_stmt_get_result($stmt);
    
    // check no user found
    if ($row = mysqli_fetch_assoc($resultData)) {
        header("location: ../login.php?error=userExist");
    }

    mysqli_stmt_close($stmt);

    // creating new user
    $sql = "INSERT INTO users (usersName, usersLogin, usersPassword) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_bind_param($stmt, "sss", $login, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close();

    // go to new page
    header("location: ../index.php?id");