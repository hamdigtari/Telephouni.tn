<?php
require_once /*******/'C:\xampp\htdocs\App\configClient.php'; 

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
    
    
    
    define('URLI', 'C:\xampp\htdocs\App\views\client');
    
    
    if($image['error']!=4){
        
        //upload file
    
    //create image directory if doesn't exists    
      if(!is_dir(URLI.'\images')){
           mkdir(URLI.'\images');
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
            'UPDATE users SET name = ?, email = ?, username=?, surname=?, image=? WHERE id=?'  
           
        );
        
        $stmt->bind_param('sssssi', $name, $email, $username, $surname, $image_convention, $user->id);
      

        if($stmt->execute()){
            ClientsC::setMsg('msg_notify', 'Your account has been updated successfully.');

            if(ClientsC::check_task_status($user->username,11))
        { 

          if(!ClientsC::checkTelGiftExist($user->id)) {ClientsC::setTelGift($user->id);}

            ClientsC::update_task_status(11,$user->id,$user->username); 
            $Telgift=ClientsC::checktelgift($user->id);
            $tasks=ClientsC::getTaskById(11);
            ClientsC::setTelDetails($Telgift->id_gift,$tasks->description,1,$tasks->rewards);
            
        
         }
        }
        
        $_SESSION['user'] = ClientsC::getUserById($user->id);
        ClientsC::redirect('profile.php');
        
    } else{
        
        
        ClientsC::setMsg('errors', $errors); 
       ClientsC:: redirect('edit_profile.php');
       
    } 
   
     
}