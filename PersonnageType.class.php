<?php

class PersonnageType
{
        // Attributs personnnage type
	private $id;
	private $nom;
	private $nombreAttaque;        
        private $mouvement;
	private $pointDeVie;	

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

        public function getMouvement()
	{
		return $this->mouvement;
	}              
        
	public function getNom()
	{
		return $this->nom;
	}
        
	public function getNombreAttaque()
	{
		return $this->nombreAttaque;
	}
        
	public function getPointDeVie()
	{
		return $this->pointDeVie;
	}
	
	// Setters
        public function setMouvement($mouvement)
	{
		$this->mouvement = $mouvement;
	}
        
	public function setNom($nom)
	{
		$this->nom = $nom;
	}

	public function setNombreAttaque($nombreAttaque)
	{
		$this->nombreAttaque = $nombreAttaque;
	}
        
	public function setPointDeVie($pointDeVie)
	{
		$this->pointDeVie = $pointDeVie;
	}
}


