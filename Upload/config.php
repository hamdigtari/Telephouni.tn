<?php
session_start();

//Database Credentials 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'authcourse');


//URL
define('URLROOT', 'http://localhost/client2/Upload');


//APP URL
define('APPROOT', dirname(__FILE__));



require_once 'C:\xampp\htdocs\client2\core\ClientsC.php';

require_once 'C:\xampp\htdocs\client2\entities\Compte.php';


//make database connection

$objDB=ClientsC::objDB();



$restricted_pages = [
    
    '/client2/Upload/profile.php',
    '/client2/Upload/change_password.php',
    '/client2/Upload/edit_profile.php',
    '/client2/Upload/logout.php',
     
];



$public_pages = [
    '/client2/Upload/login.php',
    '/client2/Upload/register.php', 
    '/client2/Upload/forget_password.php',
];


 

if(!ClientsC::isUserLoggedIn() && in_array($_SERVER['REQUEST_URI'], $restricted_pages, true)){
    ClientsC::setMsg('msg_notify', 'You need to login before accessing this page', 'warning');
    ClientsC::redirect('login.php');
    exit();
}


if(ClientsC::isUserLoggedIn() && in_array($_SERVER['REQUEST_URI'], $public_pages, true)){
    ClientsC::setMsg('msg_notify', 'You need to logout before accessing this page', 'warning');
    ClientsC::redirect('profile.php');
    exit();
}



if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
    $user = isset($_COOKIE['user']) ? unserialize($_COOKIE['user']) : $_SESSION['user'];
}else{
    $user = '';
}

