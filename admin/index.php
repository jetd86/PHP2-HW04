<?php
require_once __DIR__ . '/../autoload.php';

$ctrl = new App\Controllers\Admin\Article\index();
$ctrl->action();