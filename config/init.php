<?php

require_once 'db_config.php';
require_once 'config.php';
require_once '../lib/functions.php';
spl_autoload_register('__autoload');
function __autoload($class_name){
    require_once "../lib/".$class_name.".php";
}