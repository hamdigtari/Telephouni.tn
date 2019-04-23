<?php
require_once 'config.php';

 if(ClientsC::isUserLoggedIn()){
     
     if(isset($_COOKIE['user'])){
          setcookie('user', '', time() - (86400 * 30), '/');
     }
     
     if(isset($_SESSION['user'])){
         unset($_SESSION['user']);
     }
     ClientsC::setMsg('msg_notify', 'Your account has been successfully logged Out.');
     header('Location:login.php');
 }