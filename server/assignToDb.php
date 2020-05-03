<?php
include_once '../config/init.php';
$manager = new Manager();

if(isset($_POST['user_teacher_asign'])):
    $user = filter_var(trim($_POST['selectUser']),FILTER_SANITIZE_STRING);
    $teacher = filter_var(trim($_POST['selectTeacher']),FILTER_SANITIZE_STRING);
    $manager->assignUserTeacher($user,$teacher);
elseif(isset($_POST['group_module_asign'])):
    $group = filter_var(trim($_POST['selectGroup']),FILTER_SANITIZE_STRING);
    $module = filter_var(trim($_POST['selectModule']),FILTER_SANITIZE_STRING);
    $manager->assignGroupModule($group,$module);
elseif(isset($_POST['teacher_group_assign'])):
    $group = filter_var(trim($_POST['selectGroup']),FILTER_SANITIZE_STRING);
    $teacher = filter_var(trim($_POST['selectTeacher']),FILTER_SANITIZE_STRING);
    $nbh = filter_var(trim($_POST['nbh']),FILTER_SANITIZE_STRING);
    echo $group.'<br>'.$teacher.'<br>'.$nbh;
    $manager->assignGroupTeacher($group,$teacher,$nbh);
    endif;

//TODO add assign affectations.
//echo "<script>window.close();</script>";