<?php

include_once '../config/init.php';

if (!isLoggedIn())
    header("Location: login.php");
elseif (!isAdmin()) {
    alertPHPBack("You don't have the admin rights to access this page");
    //alertPHPBack($_SESSION['isAdmin']);
}
else {
    $template = new Template('templates/management.php');
    echo $template;
}

