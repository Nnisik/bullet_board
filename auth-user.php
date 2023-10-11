<?php
    if (isset($_GET["id"])) {
        require_once "./html/auth-user-elements.html";
    }
    else {
        require_once "./html/non-auth-user-elements.html";
    }
?>