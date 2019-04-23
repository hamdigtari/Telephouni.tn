<?php
require_once /*******/'C:\xampp\htdocs\App\configAdmin.php'; 

if (isset($_POST['login'])) {

   //Main errors array

   $errors = array();

   //get values & sanitize them

   $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
   $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

   $remember = isset($_POST['remember-me']) ? 'Yes' : '';

   //username
   if (strlen($username) > 15 || strlen($username) < 5) {
      $errors['username_err'] = 'Username min limit is 5 & max is 15 characters';
   }elseif(!AdminC::checkUserByUsername($username)){
        $errors['username_err'] = "Username not exists";
   } elseif (!AdminC::checkUserActivation($username)) {
      $errors['username_err'] = "Your account is not verified, click <a href='".URLROOT."/request-account-activate.php'>here</a> to verify.";
   }

   //password 
   if (strlen($password) > 20 || strlen($password) < 5) {
      $errors['password_err'] = 'Password min limit is 5 & max is 20 characters';
   }



   if (!count($errors)) {

    $user=AdminC::checkUserByUsernamePass($username,$password);

         if (!($user==false)) {


               if($remember=='Yes'){
                   setcookie('user', serialize($user), time() + (86400 * 30), '/');}

                   else{
                   $_SESSION['user'] = $user;}


            AdminC::redirect('profile.php');
            exit();
         } else {
            AdminC::setMsg('msg_notify', 'Password wrong, please enter correct credentials', 'warning');
           $data = [
          'username' => $username,
          'password' => $password,
                   ];

            AdminC::setMsg('form_data', $data);
       
            AdminC::redirect('login.php');

         }
      
   } else {

      $data = [
          'username' => $username,
          'password' => $password,
      ];

      AdminC::setMsg('form_data', $data);
      AdminC::setMsg('errors', $errors);
   }
   AdminC::redirect('login.php');
}