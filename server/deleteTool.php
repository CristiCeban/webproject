<?php
include_once '../config/init.php';
$manager = new Manager();
$category = "";
if(isset($_GET['uid'])) {
    $manager->deleteUser($_GET['uid']);
    $category='?category=Users';
}
elseif(isset($_GET['eid'])) {
    $manager->deleteTeacher($_GET['eid']);
    $category='?category=Teachers';
}
elseif(isset($_GET['mid'])) {
    $manager->deleteModule($_GET['mid']);
    $category='?category=Modules';
}
elseif(isset($_GET['gid'])) {
    $manager->deleteGroup($_GET['gid']);
    $category = '?category=Groups';
}
elseif(isset($_GET['gtid'])) {
    $manager->deleteGtype($_GET['gtid']);
    $category = '?category=Gtypes';
}
header('Location: ../client/Management.php'.$category);