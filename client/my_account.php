<?php

include_once '../config/init.php';

$template = new Template('templates/my_account.php');

$alert_msg = isset($_GET['change_pass']) ? $_GET['change_pass'] : null;
$template->alert_msg = $alert_msg;
echo $template;