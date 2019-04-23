<?php
require_once /*******/'C:\xampp\htdocs\App\configClient.php'; 


//grab the code 
//we need to check the code 
//we need to update the code with empty and set the user status to active

if(isset($_GET['code'])){
    
    $code = filter_input(INPUT_GET, 'code', FILTER_SANITIZE_STRING);
    
    if(ClientsC::checkUserByCode($code)){
      
        ClientsC::verifyUserAccount($code);
        ClientsC::setMsg('msg_notify', 'Your account has been activated, you can login your account.');
        ClientsC::redirect('login.php');
        exit();
        
    }else{
        
        ClientsC::setMsg('msg', 'Invalid activation code', 'warning');
       
    }

}else{
    ClientsC::setMsg('msg', 'Activation code not exists', 'warning');
    
}

 //common redirection
 ClientsC::redirect('register.php');
 exit();
