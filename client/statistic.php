<?php

include_once '../config/init.php';
$template = new Template('templates/statistic.php');
$dashboard = new Dashboard();
$selectedTeacher = isset($_POST['selectTeacher']) ? $_POST['selectTeacher'] : null;
$selectedYear = isset($_POST['selectYear']) ? $_POST['selectYear'] : date('Y');
if (isset($_POST['selectTeacher']) && $_POST['selectTeacher']!=='Select teacher' && isset($_POST['selectYear'])){
    $template->teachersOk = GOOD;
    $template->modulesOfTeacher=$dashboard->getAllModulesOfTeacher($_POST['selectTeacher'],$_POST['selectYear']);
    $template->categoriesOfTeacher = $dashboard->getAllCategoriesOfTeacherByModule($_POST['selectTeacher'],$_POST['selectYear']);
    $template->modulesOk = BAD;
    $template->groupsOk = BAD;
}
elseif(isset($_POST['selectModule']) && $_POST['selectModule']!=='Select module' && isset($_POST['selectYear'])) {
    $template->modulesOfTeacher = BAD;
    $template->categoriesOfTeacher = BAD;
    $template->modulesOk = GOOD;
    $template->groupsOk = BAD;
    $template->teachersOk = BAD;
}
elseif(isset($_POST['selectGroup']) && $_POST['selectGroup']!=='Select Group' && isset($_POST['selectYear'])) {
    $template->modulesOfTeacher = BAD;
    $template->categoriesOfTeacher = BAD;
    $template->modulesOk = BAD;
    $template->groupsOk = GOOD;
    $template->teachersOk = BAD;
}
else{
    $template->modulesOk = BAD;
    $template->teachersOk = BAD;
    $template->groupsOk = BAD;
}

$template->dashboard = $dashboard;
$template->selectedTeacher=$selectedTeacher;
$template->selectedYear=$selectedYear;
$template->years = $dashboard->getAllYears();
$template->teachers = $dashboard->getAllTeachers();
$template->modules = $dashboard->getAllModules();
$template->groups = $dashboard->getAllGroupsDistinct();
$template->iter = 0;
echo $template;
