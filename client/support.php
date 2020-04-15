<?php

include_once '../config/init.php';
session_start();
$template = new Template('templates/support.php');
$ok = isset($_GET['code']) ? $_GET['code'] : null;
if($ok) {
    $template->ok = $ok;
}
echo $template;
