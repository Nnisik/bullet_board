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

    // getting data of user base on entered login
    $users = getAllUsers();
    $user = null;

    // check if user found
    foreach ($users as $row) {
        if ($row['usersLogin'] == $login) {
            $user = $row;
            break;
        }
    }
    if ($user == null) {
        header("location: ../login.php?error=userNotFound");
    }

    // check if entered password is correct
    if ($password != $user["userPassword"]) {
        header("location: ../login.php?error=wrongPassword");
    }

    // go to main page
    header("location: ../index.php?id");