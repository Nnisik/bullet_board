<?php
    // getting URL parametrs
    $userID = $_GET['id'];
    $header = $_GET['header'];
    $descrip = $_GET['descrip'];
    $date = $_GET['date'];

    require_once "./db.inc.php";

    $href = "location: ../index.php?id=".$userID;

    if (createNewAdvert($header, $descrip, $date, $userID)) {
        header($href);    
    }
    else {
        header($href."&error=error");
    }