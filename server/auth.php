<?php
include_once '../config/init.php';

$userName = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$user = new User;

$result = $user->login($userName,$password);

echo $result;
if($result==USER_NOT_FOUND){
    header('Location: ../client/login.php?alert_msg='.USER_NOT_FOUND);
}
elseif($result==PASSWORD_WRONG){
    header('Location: ../client/login.php?alert_msg='.PASSWORD_WRONG);
}
elseif($result==LOGIN_OK) {
    setcookie('username',$userName,time()+3600,'/');
    setcookie('year',date('Y'),time()+3600,'/');
    if($user->isAdmin($userName)) {
        setcookie('isAdmin',1,time()+3600,'/');
    }
    header('Location: ../client/index.php');
}


