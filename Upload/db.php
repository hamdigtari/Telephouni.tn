<?php 

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

//creating an object of mysqli
$objDB = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//checking connection error
if($objDB->connect_errno){
    die("Connection not established");
}

?>