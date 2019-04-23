<?php
require_once /*******/'C:\xampp\htdocs\App\configClient.php'; 
require_once '../libraries/PHPMailer-master/PHPMailerAutoload.php';

if(isset($_POST['reset_request'])){
    
    //Main errors array
    $errors = array();
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    
    //email
    $reg_email = '/^[a-z0-9]+(\.|_)?[a-z0-9]+@[a-z0-9]+(.com|.net|.org|.me)$/i'; 
    if(!preg_match($reg_email, $email)){
        $errors['email_err'] = 'Entered email is invalid';
    }elseif(!ClientsC::checkUserByEmail($email)){
         $errors['email_err'] = 'Email not found.';
    }
    
    if(!count($errors)){
        
        $code = md5(crypt(rand(), 'aa'));
        
        //Store them into database
        $stmt = $objDB->prepare(
            'UPDATE users SET is_active = 0, reset_code=? WHERE email=?'
        );
        
        $stmt->bind_param('ss', $code, $email);
        
         if($stmt->execute()){
            ClientsC::setMsg('msg', 'You made a password request, please check email to reset your password.', 'warning');
            
           
            
            $message = "Hi! You requested password reset, . You need to click here to <a href='".URLROOT."/process/p_reset_code_verify.php?reset_code=$code'>Reset your password.</a>";
             echo $message;
           ClientsC:: send_mail([
                
                'to' => $email,
                'message' => $message,
                'subject' => 'Reset Password Requested',
                'from' => 'eProfile System'
                
            ]);
        }
        
        
    }else{
        
        $data = [
           
            'email' => $email,
           
        ];
        
        ClientsC::setMsg('form_data', $data);
       ClientsC:: setMsg('errors', $errors); 
        
    }
     ClientsC:: redirect('forget_password.php');
}
