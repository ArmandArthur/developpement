<?php
class Manager
{
	// Instance de PDO
	protected $db; 
	
	public function __construct($db)
	{
		$this->setDb($db);
	}     
	
	public function setDb($db)
	{
		$this->db = $db;
	}
			
}