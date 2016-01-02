<?php

class Carte
{
	private $hauteur;
	private $largeur;
	
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
	
	public function getHauteur()
	{
		return $this->hauteur;
	}	
	
	public function getLargeur()
	{
		return $this->largeur;
	}	
	
	public function setHauteur($hauteur)
	{
		$this->hauteur = $hauteur;
	}
	
	public function setLargeur($largeur)
	{
		$this->largeur = $largeur;
	}
}