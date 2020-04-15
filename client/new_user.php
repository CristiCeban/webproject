<?php

include_once '../config/init.php';

$template = new Template('templates/new_user.php');

$alert_msg = isset($_GET['new_user_message']) ? $_GET['new_user_message'] : null;
$user = isset($_GET['username']) ? $_GET['username'] : null;
if($alert_msg) {
    $template->alert_msg = $alert_msg;
}
if($user)
    $template->user = $user;
echo $template;