<?php
include_once '../config/init.php';

$password_initial = filter_var(trim($_POST['password_initial']),FILTER_SANITIZE_STRING);
$password_repeat1 = filter_var(trim($_POST['password_repeat1']),FILTER_SANITIZE_STRING);
$password_repeat2 = filter_var(trim($_POST['password_repeat2']),FILTER_SANITIZE_STRING);

$user = new User();

$result = $user->changePass($_COOKIE['username'],$password_initial,$password_repeat1,$password_repeat2);

header("Location: ../client/my_account.php".$result);