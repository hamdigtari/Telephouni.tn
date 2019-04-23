<?php
require_once /*******/'C:\xampp\htdocs\App\configClient.php'; 

if(isset($_POST['deactivate'])){
    
    $deactivate = filter_input(INPUT_POST, 'deactivate', FILTER_SANITIZE_STRING);
    
    if($deactivate=='Yes'){
        
        
        $user = $_SESSION['user'];
        
         
        $stmt = $objDB->prepare(
            'UPDATE users SET is_active = 0 WHERE id = ?'  
           
        );
        
        $stmt->bind_param('i', $user->id);
      

        if($stmt->execute()){
            ClientsC::setMsg('msg_notify', 'Your account has been deactivated successfully. Request support to activate your account.');
            unset($_SESSION['user']);
            ClientsC::redirect('login.php');
            exit();
        }
        
        
    }
    
}