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
       
      

        if(AdminC::deleteuser($id)){
            AdminC::setMsg('msg_notify', 'Account has been deleted successfully.');
        }
        
      //  $_SESSION['user'] = AdminC::getUserById($id);
        AdminC::redirect('clients.php');
        
    } else{
        
        
        AdminC::setMsg('errors', $errors); 
       AdminC:: redirect('delete_user.php');
       
    } 
   
     
}