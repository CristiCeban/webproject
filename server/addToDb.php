<?php
include_once '../config/init.php';
$manager = new Manager();
if(isset($_POST['btn_add_user'])){
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $mdp = filter_var(trim($_POST['mdp']),FILTER_SANITIZE_STRING);
    $role = filter_var(trim($_POST['role']),FILTER_SANITIZE_STRING);
    $manager->addUser($login,$mdp,$role);
}
elseif(isset($_POST['btn_add_teacher'])){
    $nom = filter_var(trim($_POST['nom']),FILTER_SANITIZE_STRING);
    $prenom = filter_var(trim($_POST['prenom']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $tel = filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
    $annee = filter_var(trim($_POST['annee']),FILTER_SANITIZE_STRING);
    $manager->addTeacher($nom,$prenom,$email,$tel,$annee);
}
elseif(isset($_POST['btn_add_module'])){
    $intitule = filter_var(trim($_POST['intitule']),FILTER_SANITIZE_STRING);
    $code = filter_var(trim($_POST['code']),FILTER_SANITIZE_STRING);
    $annee = filter_var(trim($_POST['annee']),FILTER_SANITIZE_STRING);
    $manager->addModule($intitule,$code,$annee);
}
elseif(isset($_POST['btn_add_group'])){
    $nom = filter_var(trim($_POST['nom']),FILTER_SANITIZE_STRING);
    $annee = filter_var(trim($_POST['annee']),FILTER_SANITIZE_STRING);
    $manager->addGroup($nom,$annee);
}
elseif(isset($_POST['btn_add_gtype'])){
    $nom = filter_var(trim($_POST['nom']),FILTER_SANITIZE_STRING);
    $nbh = filter_var(trim($_POST['nbh']),FILTER_SANITIZE_STRING);
    $coeff = filter_var(trim($_POST['coeff']),FILTER_SANITIZE_STRING);
    $manager->addGtype($nom,$nbh,$coeff);
}


//echo "<script>window.close();</script>";