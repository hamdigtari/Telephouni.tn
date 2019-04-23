<?php
session_start();

//Database Credentials 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'authcourse');


//URL
define('URLROOT', 'http://localhost/client1/Upload');


//APP URL
define('APPROOT', dirname(__FILE__));



require_once 'functions.php';


//make database connection
$objDB = objDB();



$restricted_pages = [
    
    '/client1/Upload/profile.php',
    '/client1/Upload/change_password.php',
    '/client1/Upload/edit_profile.php',
    '/client1/Upload/logout.php',
     
];



$public_pages = [
    '/client1/Upload/login.php',
    '/client1/Upload/register.php', 
    '/client1/Upload/forget_password.php',
];


 

if(!isUserLoggedIn() && in_array($_SERVER['REQUEST_URI'], $restricted_pages, true)){
    setMsg('msg_notify', 'You need to login before accessing this page', 'warning');
    redirect('login.php');
    exit();
}


if(isUserLoggedIn() && in_array($_SERVER['REQUEST_URI'], $public_pages, true)){
    setMsg('msg_notify', 'You need to logout before accessing this page', 'warning');
    redirect('profile.php');
    exit();
}



if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
    $user = isset($_COOKIE['user']) ? unserialize($_COOKIE['user']) : $_SESSION['user'];
}else{
    $user = '';
}

