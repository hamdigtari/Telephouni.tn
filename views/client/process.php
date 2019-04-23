<?php
session_start();

//check the form submission 
if(isset($_POST['submit'])){ 
   //storing username coming from form into $username variable        
   
   //an array to store all errors    
   $errors = array();
    
   
   
   //with validation
   $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
   $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

   
    
   //if username is empty and have pattern ex: abc123
   $reg_username = '/^[a-z0-9]+$/i';
    
   if(!preg_match($reg_username, $username)){
       $errors['username_err'] = 'Invalid or empty username.';
   }    

   //if password is empty
   if(empty($password)){
       $errors['password_err'] = 'Please, enter password.';
   }

 
   //password hashing 
   $password = password_hash($password, PASSWORD_DEFAULT);
    
   

   //count the errors if they are zero than success otherwise errors to users
    if(count($errors)==0){
        
        //Database Credentials 
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'authcourse');

        //object of mysqli
        $objDB = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        //prepare sql query template for database Step 1
        $stmt = $objDB->prepare(
           'INSERT INTO users(username, password) 
            VALUES(?,?)'
        );
        
        //bind the parameters to prevent sql injection Step 2
        $stmt->bind_param('ss', $username, $password);
       
        //execute the statmemt 
        $stmt->execute();
        
        $_SESSION['msg_success'] = 'You data has been stored';
        header('Location:index1.php');
    }else{
        $_SESSION['msg_err'] = 'Please, check the errors';
        
        //storing errors array with errors in session 
        $_SESSION['errors'] = $errors;
        
    }

   
  //redirecting
header('Location:index1.php');
//echo "<div class='alert'><span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> " .$_SESSION['msg_err']."</div>";

}