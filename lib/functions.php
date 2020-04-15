<?php
function isLoggedIn()
{
    if (isset($_COOKIE['username'])) {
        return true;
    }else{
        return false;
    }
}

function deleteCookie(string $key) {
    if (isset($_COOKIE[$key])) {
        unset($_COOKIE[$key]);
        setcookie($key, '', time() - 3600, '/'); // empty value and old timestamp
    }
}

function alertPHP(string $msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function alertPHPBack(string $msg){
    echo '<script type="text/javascript">alert("' . $msg .'");window.location.href="index.php";
    </script>';
}
function isAdmin(){
    if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin']==1) {
        echo 'e admin';
        return true;
    }
    return false;
}