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
    
    // check no user found
    $users = getAllUsers();
    foreach ($users as $row) {
        if ($row['usersLogin'] == $login) {
            header("location: ../login.php?error=loginTaken");
        }
    }

    // creating new user
    createNewUser($name, $login, $password);

    // go to new page
    header("location: ../index.php?id");