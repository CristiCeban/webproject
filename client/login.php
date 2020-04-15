<?php

include_once '../config/init.php';

$template = new Template('templates/login.php');

$alert_msg = isset($_GET['alert_msg']) ? $_GET['alert_msg'] : null;
if($alert_msg) {
    $template->alert_msg = $alert_msg;
}
echo $template;