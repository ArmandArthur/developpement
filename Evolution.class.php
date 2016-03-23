<?php

class Evolution
{
        // Attributs personnnage type
	private $id;
	private $palierInferieur;        
        private $palierSuperieur;        
	private $personnageTypeId;
	private $iconePersonnageId;	
	private $iconePersonnagePath;	

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

        public function getPalierInferieur()
	{
		return $this->palierInferieur;
	}              
        
	public function getPalierSuperieur()
	{
		return $this->palierSuperieur;
	}
        
	public function getPersonnageTypeId()
	{
		return $this->personnageTypeId;
	}
        
	public function getIconePersonnageId()
	{
		return $this->iconePersonnageId;
	}
        
	public function getIconePersonnagePath()
	{
		return $this->iconePersonnagePath;
	}        
	
	// Setters
	
	public function setId()
	{
		return $this->id;
	}        
        
        public function setPalierInferieur($palierInferieur)
	{
		$this->palierInferieur = $palierInferieur;
	}
        
        public function setPalierSuperieur($palierSuperieur)
	{
		$this->palierSuperieur = $palierSuperieur;
	}

	public function setPersonnageTypeId($personnageTypeId)
	{
		$this->personnageTypeId = $personnageTypeId;
	}
        
	public function setIconePersonnageId($iconePersonnageId)
	{
		$this->iconePersonnageId = $iconePersonnageId;
	}
        
	public function setIconePersonnagePath($iconePersonnagePath)
	{
		$this->iconePersonnagePath = $iconePersonnagePath;
	}        
}


