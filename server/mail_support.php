<?php
include_once '../lib/logger.php';

$last_name = filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$first_name = filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$mobile_phone = filter_var(trim($_POST['mobile_phone']),FILTER_SANITIZE_STRING);
$org_name = filter_var(trim($_POST['org_name']),FILTER_SANITIZE_STRING);
$website = filter_var(trim($_POST['website']),FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']),FILTER_SANITIZE_STRING);

$msg = "Last Name = " . $last_name .
    ", First Name = " . $first_name .
    ", Email = " . $email .
    ", Mobile Phone = " . $mobile_phone .
    ", Organisation Name = " . $org_name .
    ", Website = " . $website .
    ", Description = " .$description;

wh_log($msg);
header("Location: ../client/support.php?code=OK");
