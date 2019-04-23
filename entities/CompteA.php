<?PHP
class Admin
{
	private $Id;
	private $Mail;
	private $UserName;
	
	private $FirstName;
	private $LastName;
	private $PassWord;
	private $Image;
	private $Created_at;
	private $Reset_code;
	private $Is_active;
	
	 function __construct(/*$id , $image,$created_at ,$reset_code  ,$is_active ,*/ $username, $mail,$firstname,$lastname,$password){
	
		$this->Mail=$mail;
		$this->FirstName=$firstname;
		$this->LastName=$lastname;
		$this->PassWord=$password;
		$this->UserName=$username;
		/*$this->Image=$image;
		$this->Created_at=$created_at;
		$this->Reset_code=$reset_code;
		$this->Is_active=$is_active;
		$this->Id=$id;*/
	}

	
	
	
	function getUserName(){
		return $this->UserName;
	}
	
	
	function getMail(){
		return $this->Mail;
	}
	 function getFirstName(){
		return $this->FirstName;
	}
	 function getLastName(){
		return $this->LastName;
	}
	 function getPassWord(){
		return $this->PassWord;
	}
	


  
	 function setUserName($UserName){
		 $this->UserName=$UserName;
	}
	
	
	
	 function getIs_active($Is_active){
		 $this->Is_active=$Is_active;
		}

	 function setMail($Mail){
		$this->Mail=$Mail;
	}
	 function setFirstName($FirstName){
		$this->FirstName=$FirstName;
	}
	 function setLastName($LastName){
		$this->LastName=$LastName;
	}
	 function setPassWord($PassWord){
		$this->PassWord=$PassWord;
	}
	
	
}

?>