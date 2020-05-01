<?php

include_once '../config/init.php';
$template = new Template('templates/statistic.php');
$dashboard = new Dashboard();
$selectedTeacher = isset($_POST['selectTeacher']) ? $_POST['selectTeacher'] : null;
$selectedYear = isset($_POST['selectYear']) ? $_POST['selectYear'] : date('Y');
if (isset($_POST['selectTeacher']) && isset($_POST['selectYear'])){
    $template->modulesOfTeacher=$dashboard->getAllModulesOfTeacher($_POST['selectTeacher'],$_POST['selectYear']);
    $template->categoriesOfTeacher = $dashboard->getAllCategoriesOfTeacherByModule($_POST['selectTeacher'],$_POST['selectYear']);
}
else {
    $template->modulesOfTeacher = BAD;
    $template->categoriesOfTeacher = BAD;
}
$template->selectedTeacher=$selectedTeacher;
$template->selectedYear=$selectedYear;
$template->years = $dashboard->getAllYears();
$template->teachers = $dashboard->getAllTeachers();
$template->modules = $dashboard->getAllModules();
$template->groups = $dashboard->getAllGroupsDistinct();
$template->iter = 0;
echo $template;
