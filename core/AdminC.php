<?PHP
	// include "../config.php";
	class AdminC {
	//Database Main Object
	 public static  function objDB(){
	    
	    $objDB = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	    
	    if($objDB->connect_error){
	      die("Connection not established");
	    }
	    
	    return $objDB;
	}

public static function getalladmins(){
	    
	    $sql="SElECT * From admin  ";
		$db = AdminC::objDB();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



	public static function deleteadmin($id)
	{
	   
		$objDB=AdminC::objDB();
        $stmt = $objDB->prepare(
            'DELETE FROM admin  WHERE id = ?'  
           
        );
        
        $stmt->bind_param('i', $id);
      

        if($stmt->execute()==true)
        	{return true;
        		
        	}
        return false;

    }




    public static function deleteuser($id)
	{
	   
		$objDB=ClientsC::objDB();
        $stmt = $objDB->prepare(
            'DELETE FROM users  WHERE id = ?'  
           
        );
        
        $stmt->bind_param('i', $id);
      

        if($stmt->execute()==true)
        	{return true;
        		
        	}
        return false;

    }

	// creat account
	public static function createaccout($admin){

	//echo ("$admin->getPassWord()");
			$password =password_hash($admin->getPassWord(), PASSWORD_DEFAULT);
	       $code = md5(crypt(rand(), 'aa'));
	        
	        //Store them into database
	        $objDB = AdminC::objDB();
	        $stmt = $objDB->prepare(
	            'INSERT INTO admin(name, email, username, password, surname, created_at, reset_code) 
	            VALUES(?, ?, ?, ?, ?, ?, ?)'
	        );

	        $name=$admin->getFirstName();
	        $email=$admin->getMail();

	        $username=$admin->getUserName();
	        $surname=$admin->getLastName();
	       

	        $stmt->bind_param('sssssis',$name ,$email , $username , $password, $surname , time(), $code );
	      

	        if($stmt->execute())
	        	{ return true;
	        	 echo ($name); exit;}echo ($password); exit;
	        return false;
	 


	        }


	//UPDATE THE PASSWORD
	public static function updatePass($id,$password)
	{
	   //Store them into database
		$objDB=AdminC::objDB();
        $stmt = $objDB->prepare(
            'UPDATE admin SET password = ? WHERE id = ?'  
           
        );
        
        $stmt->bind_param('si', password_hash($password, PASSWORD_DEFAULT), $id);
      

        if($stmt->execute()==true)
        	{return true;
        		//echo ($id.$password); exit;
        	}
        return false;

    }


	public static function upload_image($image){
	    
	  //create image directory if doesn't exists    
	  if(!is_dir(APPROOT.'/images')){
	       mkdir(APPROOT.'/images');
	  }

	  if($image['error']==4){
	      die('image file not uploaded');
	  }
	  
	  if($image['type']!='image/png'){
	       die('Only, png image files are allowed');
	  }
	    
	  $image_info = pathinfo($image['name']);
	  extract($image_info);
	  $image_convention = $filename . time() . ".$extension";

	  if(move_uploaded_file($image['tmp_name'], APPROOT . "/images/" . $imageConvention)){
	      return $image_convention;
	  }else{
	      return false;
	  }  
	    
	}


	//format: 24 September, 2018
	public static function cTime($timestamp){
	    return date('j F, Y', $timestamp);
	}



	//checking user by email
	public static function checkUserByEmail($email){
	    
	    //make database connection
	    $objDB = AdminC::objDB();
	    
	     //make the statement
	     $stmt = $objDB->prepare(
	            'SELECT * FROM admin WHERE email=?'
	     );
	    
	     //bind the paramters
	     $stmt->bind_param('s', $email);
	    
	     //execute
	     $stmt->execute();
	    
	     
	     //store the result
	     $stmt->store_result();
	    
	     //return number of rows 
	     return $stmt->num_rows;
	}


	//checking user by username
	public static function checkUserByUsername($username){
	    
	    $objDB = AdminC::objDB();
	    
	   
	     $stmt = $objDB->prepare(
	            'SELECT * FROM admin WHERE username=?'
	     );
	    
	     $stmt->bind_param('s', $username);
	    
	     $stmt->execute();
	    
	     $stmt->store_result();
	    
	     return $stmt->num_rows;
	}

	public static function checkUserByUsernamePass($username,$password){
	    
	    $objDB = AdminC::objDB();
	
    
      $stmt = $objDB->prepare(
              'SELECT * FROM admin WHERE username=?'
      );

      $stmt->bind_param('s', $username);
      $stmt->execute();

      //get the data
      $result = $stmt->get_result();
      $user = $result->fetch_object();

      if ($result->num_rows == 1) 
      {


         if (password_verify($password, $user->password)) 
         {
         	return $user;
         }
        }
         return false;
	}



	//check user activation
	public static function checkUserActivation($username){
	    
	    $objDB = AdminC::objDB();
	    
	    //Store them into database
	     $stmt = $objDB->prepare(
	            'SELECT * FROM admin WHERE username=? AND is_active=1'
	     );
	    
	     $stmt->bind_param('s', $username);
	    
	     $stmt->execute();
	    
	     $stmt->store_result();
	    
	     return $stmt->num_rows;
	}


   // CHECK FOR THE TEL_GIFT TABLE
	public static function checktelgift($id){
	    
	    $objDB = AdminC::objDB();
	    
	    //Store them into database
	     $stmt = $objDB->prepare(
	            'SELECT * FROM tel_gift WHERE id_cl =? '
	     );
	    
	     $stmt->bind_param('i', $id);
	    
	     $stmt->execute();
	    
	     	     $result =$stmt->get_result();
	     $user = $result->fetch_object();
	    
	      if ($result->num_rows == 1) 
          {  return $user; }
      
         return false;
	}
function checkteldetails($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From tel_details where id_gift=".$id;
		$db = AdminC::objDB();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

   // CHECK FOR THE tel_details table 
	public static function checkteldetail($id){
	    
	    $objDB = AdminC::objDB();
	    
	    //Store them into database
	     $stmt = $objDB->prepare(
	            'SELECT * FROM tel_details WHERE id_gift =? '
	     );
	    
	     $stmt->bind_param('i', $id);
	    
	     $stmt->execute();
	    
	     	     $result =$stmt->get_result();
	    $user = $result->fetch_object();
	     
	    
	      if ($result->num_rows != 0) 
          {   return $user; }
      
         return false;
	}

	//redirection reuseable function
	public static function redirect($file){
	    header("Location:".URLROOT.'/'.$file); 
	}


	//setting a msg
	public static function setMsg($name, $value, $class = 'success'){
	    if(is_array($value)){
	        $_SESSION[$name] = $value;
	    }else{
	        $_SESSION[$name] = "<div class='alert label-$class text-center'>$value</div>";
	    }

	}

	//getting a msg
	public static function getMsg($name){
	    if(isset($_SESSION[$name])){
	        $session=$_SESSION[$name];
	        unset($_SESSION[$name]);
	        return $session;
	    }
	}


	public static function getUserById($user_id){
	    
	    $objDB = AdminC::objDB();
	    
	    //Store them into database
	     $stmt = $objDB->prepare(
	            'SELECT * FROM admin WHERE id=?'
	     );
	    
	     $stmt->bind_param('i', $user_id);
	    
	     $stmt->execute();
	    
	     //get the data
	     $result = $stmt->get_result();
	    
	     return $result->fetch_object();
	}



	public static function verifyUserAccount($code){
	    
	    $objDB = AdminC::objDB();
	    
	  
	     $stmt = $objDB->prepare(
	            "UPDATE admin SET is_active = 1 , reset_code = '' WHERE reset_code = ?"
	     );
	    
	     $stmt->bind_param('s', $code);
	    
	     $stmt->execute();
	    
	     $stmt->store_result();
	    
	     return $stmt->affected_rows;
	}



	public static function checkUserByCode($code){
	    
	    $objDB = AdminC::objDB();
	    
	    //Store them into database
	     $stmt = $objDB->prepare(
	            'SELECT * FROM admin WHERE reset_code = ?'
	     );
	    
	     $stmt->bind_param('s', $code);
	    
	     $stmt->execute();
	    
	     $stmt->store_result();
	    
	     return $stmt->num_rows;
	}

	//If user is logged In
	public static function isUserLoggedIn(){
	    if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
	        return true;
	    }else{
	        return false;
	    }
	}





	 //Send the email mail
	public static function send_mail($detail=array()){


	    if(!empty($detail['to']) && !empty($detail['message']) && !empty($detail['subject']) && !empty($detail['from'])){
	        $mail = new PHPMailer(true); 
	        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
	        $mail->isSMTP();                                      // Set mailer to use SMTP
	        $mail->Host = 'pro.turbo-smtp.com';  // Specify main and backup SMTP servers
	        $mail->SMTPAuth = true;                               // Enable SMTP authentication
	        $mail->Username = 'hamdi.gtari@esprit.tn';                 // SMTP username
	        $mail->Password = 'tk7590XR';                           // SMTP password
	        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	        $mail->Port = 578;  

	        //Recipients
	        $mail->setFrom('hamdi.gtari@esprit.tn', $detail['from']);
	        $mail->addAddress($detail['to'], '');     // Add a recipient

	        //Content
	        $mail->isHTML(true);                                  // Set email format to HTML
	        $mail->Subject = $detail['subject'];
	        $mail->Body    = $detail['message'];
	        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	            if(!$mail->send()) {
	              return false;
	            } else {
	                return true;
	            }

	    }else{

	        die('Your Mail Handler requires four main paramters');

	    }
	   
	}

	}
?>