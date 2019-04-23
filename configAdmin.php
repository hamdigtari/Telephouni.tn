<?php
session_start();

//Database Credentials 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'authcourse');


//URL
define('URLROOT', 'http://localhost/App/views/admin/HTML');
define('URLROOTCLIENT', 'http://localhost/App/views/client');


//APP URL
define('APPROOT', dirname(__FILE__));



require_once 'C:\xampp\htdocs\App\core\AdminC.php';

require_once 'C:\xampp\htdocs\App\entities\CompteA.php';

require_once 'C:\xampp\htdocs\App\core\ClientsC.php';

require_once 'C:\xampp\htdocs\App\entities\Compte.php';
 

//make database connection

$objDB=AdminC::objDB();


/*
$restricted_pages = [
    
    '/App/views/admin/HTML/profile.php',
    '/App/views/admin/HTML/change_password.php',
    '/App/views/admin/HTML/edit_profile.php',
    '/App/views/admin/HTML/logout.php',
     
];

*/

$public_pages = [
    '/App/views/admin/HTML/login.php',
    '/App/views/admin/HTML/process/p_login.php',
     
    '/App/views/admin/HTML/forget_password.php',
];


 

if(!AdminC::isUserLoggedIn() && !in_array($_SERVER['REQUEST_URI'],  $public_pages, true)){
    AdminC::setMsg('msg_notify', 'You need to login before accessing this page', 'warning');
    AdminC::redirect('login.php');
    exit();
}


if(AdminC::isUserLoggedIn() && in_array($_SERVER['REQUEST_URI'], $public_pages, true)){
    AdminC::setMsg('msg_notify', 'You need to logout before accessing this page', 'warning');
    AdminC::redirect('profile.php');
    exit();
}



if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
    $user = isset($_COOKIE['user']) ? unserialize($_COOKIE['user']) : $_SESSION['user'];
}else{
    $user = '';
}

