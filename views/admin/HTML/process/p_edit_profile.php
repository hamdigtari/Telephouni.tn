<?php
require_once /*******/'C:\xampp\htdocs\App\configAdmin.php'; 

if(isset($_POST['edit'])){
    
    //Main errors array
    $errors = array();
    
    //get values & sanitize them
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); 
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $image = isset($_FILES['image']) ? $_FILES['image'] : '';
  
    $user = $_SESSION['user'];
    
    //name error
     if(strlen($name)>50 || strlen($name)<5){
         $errors['name_err'] = 'Name min limit is 5 & max is 50 characters';
     }

     //name error
     if(strlen($surname)>50 || strlen($surname)<5){
         $errors['surname_err'] = 'Surame min limit is 5 & max is 50 characters';
     }
    
     //username
     if(strlen($username)>15 || strlen($username)<5){
         $errors['username_err'] = 'Username min limit is 5 & max is 15 characters';
     }
    
    //email
    $reg_email = '/^[a-z0-9]+(\.|_)?[a-z0-9]+@[a-z0-9]+(.com|.net|.org|.me)$/i'; 
    if(!preg_match($reg_email, $email)){
        $errors['email_err'] = 'Enetered email is invalid';
    }
    
    
    
   
    define('URLI','C:\xampp\htdocs\App\views\admin\HTML');
    
    if($image['error']!=4){
        
        //upload file
    
    //create image directory if doesn't exists    
      if(!is_dir(URLRI.'\images')){
           mkdir(URLRI.'\images');
      }

      if($image['error']==4){
         $errors['image_err']='Please, upload file';
      }elseif($image['type']!='image/png' && $image['type']!='image/jpeg' && $image['type']!='image/jpg'){
          $errors['image_err']='Only, png/jpeg/jpg image is allowed';
      }
    
      $image_info = pathinfo($image['name']);
      extract($image_info);
      $image_convention = $filename . time() . ".$extension";

      move_uploaded_file($image['tmp_name'], URLI . "\images/" .  $image_convention);
        
    }else{
        $image_convention = $user->image;
    }

    
    if(!count($errors)){
     
        
        //Store them into database
        $stmt = $objDB->prepare(
            'UPDATE admin SET name = ?, email = ?, username=?, surname=?, image=? WHERE id=?'  
           
        );
        
        $stmt->bind_param('sssssi', $name, $email, $username, $surname, $image_convention, $user->id);
      

        if($stmt->execute()){
            ClientsC::setMsg('msg_notify', 'Account has been updated successfully.');
        }
        
        $_SESSION['user'] = AdminC::getUserById($user->id);
        ClientsC::redirect('profile.php');
        
    } else{
        
        
        ClientsC::setMsg('errors', $errors); 
       ClientsC:: redirect('edit_profile.php');
       
    } 
   
     
}