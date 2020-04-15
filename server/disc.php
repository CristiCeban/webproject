<?php

include '../lib/functions.php';

//if(isLoggedIn())
deleteCookie('username');
deleteCookie('isAdmin');
header('Location: ../client/index.php');
