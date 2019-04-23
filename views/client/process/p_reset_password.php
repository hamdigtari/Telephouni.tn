<?php
require_once /*******/'C:\xampp\htdocs\App\configClient.php'; 



if(isset($_POST['reset_password'])){
    
    
    //Main errors array
    $errors = array();
    
    
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
    
    
    //password 
     if(strlen($password)>20 || strlen($password)<5){
         $errors['password_err'] = 'Password min limit is 5 & max is 20 characters';
     }
    
     //confirm password
     if($password!=$confirm_password || empty($confirm_password)){
         $errors['confirm_password_err'] = 'Password does not match or empty';
     }
    
         
    
    if(!count($errors)){
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        $code = $_SESSION['reset_code'];
       
        
        //Store them into database
        $stmt = $objDB->prepare(
            "UPDATE users SET reset_code= '', is_active=1, password=? WHERE reset_code=?"
        );
        
        $stmt->bind_param('ss', $password, $code);
      

        if($stmt->execute()){
            ClientsC::setMsg('msg_notify', 'Your account password has been reset, you can login now.');
            ClientsC::redirect('login.php');
        }
        
    } else{
        
        $data = [
            'password' => $password,
            'confirm_password' => $confirm_password,
        ];
        
        ClientsC::setMsg('form_data', $data);
        ClientsC::setMsg('errors', $errors); 
        ClientsC::redirect('reset_password.php');
    } 
   
   
    
}

