<?php
include_once '../config/init.php';

$userName = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password_repeat = filter_var(trim($_POST['password_repeat']),FILTER_SANITIZE_STRING);

$user = new User();
$msg = '';
if($password!==$password_repeat){
    $msg='?new_user_message=3';
}
else {
    $msg=$user->createUser($userName,$password);
    $msg = $msg .'&username='.$userName;
}

header("Location: ../client/new_user.php".$msg);

