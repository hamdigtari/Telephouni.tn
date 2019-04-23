<?php
session_start();

//Database Credentials 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'authcourse');


//URL
define('URLROOT', 'http://localhost/App/views/client');


//APP URL
define('APPROOT', dirname(__FILE__));



require_once 'C:\xampp\htdocs\App\core\ClientsC.php';

require_once 'C:\xampp\htdocs\App\entities\Compte.php';


//make database connection

$objDB=ClientsC::objDB();



$restricted_pages = [
    
    '/App/views/client/profile.php',
    '/App/views/client/change_password.php',
    '/App/views/client/edit_profile.php',
    '/App/views/client/logout.php',
     
];



$public_pages = [
    '/App/views/client/login.php',
    '/App/views/client/register.php', 
    '/App/views/client/forget_password.php',
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

