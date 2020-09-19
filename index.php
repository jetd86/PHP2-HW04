<?php
require_once  __DIR__ . '/autoload.php';

$ctrlName =  isset($_GET['ctrl'] ) ? ucfirst($_GET['ctrl']) : 'Index';

$ctrlClass = '\App\Controllers\\';

if(isset($_GET['ctrl'], $_GET['article'])){
    $ctrlClass .= 'Admin\Article\\';
}

$ctrlClass .= $ctrlName;

$ctrl = new $ctrlClass;
$ctrl->action();
var_dump($ctrlClass);