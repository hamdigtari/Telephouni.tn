<?php
require_once /*******/'C:\xampp\htdocs\App\configAdmin.php'; 

if(isset($_POST['delete'])){
    
    //Main errors array
    $errors = array();
    
    //get values & sanitize them
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING); 
    
  
    $user = $_SESSION['user'];
    
    //name error
     if(strlen($id)==0 ){
         $errors['name_err'] = 'check the ID again';
     }

    

    
    if(!count($errors)){
     
        
        //Store them into database
       
      

        if(AdminC::deleteadmin($id)){
            ClientsC::setMsg('msg_notify', 'Account has been deleted successfully.');
        }
        
      //  $_SESSION['user'] = ClientsC::getUserById($id);
        ClientsC::redirect('admins.php');
        
    } else{
        
        
        ClientsC::setMsg('errors', $errors); 
       ClientsC:: redirect('delete_admin.php');
       
    } 
   
     
}