<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "baaa6bb3a55649", "fe722353", "heroku_86547dcf118f6bf");
		return $this->con;
	}
}

?>
