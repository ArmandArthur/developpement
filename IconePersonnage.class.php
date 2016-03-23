<?php

class IconePersonnage
{
        // Attributs personnnage type
	private $id;
	private $chemin;        

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

        public function getChemin()
	{
		return $this->chemin;
	}                   
	
	// Setters
	public function setId($id)
	{
		$this->id = $id;
	}        
        
        public function setChemin($chemin)
	{
		$this->chemin = $chemin;
	}  
}


