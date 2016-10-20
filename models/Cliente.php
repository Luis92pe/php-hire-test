<?php 

require "config/database.php";

/**
* 
*/
class Cliente extends DB
{
	
	protected $table = "clientes";

	protected $name;
	protected $email;
	protected $website;
	protected $comments;



	public function setName($name){
		$this->name = $name;

	}
	public function setEmail($email){
		$this->email = $email;

	}
	public function setWebsite($website){
		$this->website = $website;

	}
	public function setComments($comments){
		$this->comments = $comments;

	}

	public function getName(){
		return $this->name;
	}
	public function getEmail(){
		return $this->email;

	}
	public function getWebsite(){
		return $this->website;

	}
	public function getComments(){
		return $this->comments;

	}

	public function save(){

		$this->connect();
		
		$sql = $this->conn->prepare('INSERT INTO `'.$this->table.'` (`id`, `name`, `email`, `website`, `comments`) VALUES (NULL, "'.$this->getName().'", "'.$this->getEmail().'", "'.$this->getWebsite().'", "'.$this->getComments().'")');
    	
    	$sql->execute();

		$this->disconnect();

	}


}

 ?>