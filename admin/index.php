<?php
session_start();

$action = $_GET['action'] ?? 'dashboard';

define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH.'/template/views/'.$action.'.php';
require_once BASE_PATH.'/../core/db.php';
$_SESSION['user'] = [
    'name'=> 'Игорь',
    'lastName'=> 'Алексейчук',
    'role' => 'admin'

];

if(!isset($_SESSION['user']) && empty($_SESSION['user'])){

    require_once BASE_PATH.'/template/login.php';
}else{
    require_once BASE_PATH.'/template/admin_layout.php';
}


