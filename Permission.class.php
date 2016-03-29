<?php

class Permission
{
	private $id;
	private $nom;        	

	public function __construct($donnees) 
	{
            $this->hydrate($donnees);
        }
	
	public function hydrate($donnees)
	{
		foreach ($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
				
			if (method_exists($this, $method))
			{
			  $this->$method($value);
			}
		}
	}
        
	//Getters
	public function getId()
	{
		return $this->id;
	}

        public function getNom()
	{
		return $this->nom;
	}                 
	
	// Setters
	public function setId($id)
	{
		$this->id = $id;
	}        
        
        public function setNom($nom)
	{
		$this->nom = $nom;
	}
  
}


