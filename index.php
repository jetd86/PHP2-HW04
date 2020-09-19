<?php
require_once  __DIR__ . '/autoload.php';



$ctrName = isset($_GET['ctrl'] ) ? ucfirst($_GET['ctrl']) : 'Index';
$ctrlClass = '\App\Controllers\\' . $ctrName;

$ctrl = new $ctrlClass;
$ctrl->action();

