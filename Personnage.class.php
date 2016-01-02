<?php

require_once 'CarteManager.class.php';

class Personnage
{
	private $degats;
	private $id;
	private $nom;
	private $pointDeVie;
	private $pointDeVieRestant;
	private $planId;
	private $positionX;
	private $positionY;
	
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
	
	/*
		Retourne la liste des déplacements possibles.
	*/
	public function getDeplacementPossible()
	{
		$positionX = $this->getPositionX();
		$positionY = $this->getPositionY();
		$deplacementPossible = array();
		$deplacementPossible[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bg');
		$deplacementPossible[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY,'flecheClass'=> 'fleche_mg');
		$deplacementPossible[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hg');
		$deplacementPossible[] = array('flecheX'=> $positionX, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bc');
		$deplacementPossible[] = array('flecheX'=> $positionX, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hc');
		$deplacementPossible[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bd');
		$deplacementPossible[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY,'flecheClass'=> 'fleche_md');
		$deplacementPossible[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hd');
		
		// Trouver une solution
		$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');
		$CarteManager = new CarteManager($db);
		$Carte = $CarteManager->get(1);
		
		// Suppresion des flèches qui sortent de la carte
		foreach($deplacementPossible as $key => $value)
		{
			foreach($value as $k => $item)
			{
				if($k == 'flecheX')
				{
					if($Carte->getLargeur() < $item)
					{
						unset($deplacementPossible[$key]);
					}
				}
				if($k == 'flecheY')
				{
					if($Carte->getHauteur() < $item || 0 >= $item)
					{
						unset($deplacementPossible[$key]);
					}
				}
				
			}
		}
		return $deplacementPossible;
	}
	//Getters
	public function getDegats()
	{
		return $this->degats;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getNom()
	{
		return $this->nom;
	}
	
	public function getPointDeVie()
	{
		return $this->pointDeVie;
	}
	
	public function getPointDeVieRestant()
	{
		return $this->pointDeVieRestant;
	}
	
	public function getPlanId()
	{
		return $this->planId;
	}
	
	public function getPositionX()
	{
		return $this->positionX;
	}
	
	public function getPositionY()
	{
		return $this->positionY;
	}
	
	// Setters
	public function setDegats($degats)
	{
		$this->degats = $degats;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setNom($nom)
	{
		$this->nom = $nom;
	}
	
	public function setPointDeVie($pointDeVie)
	{
		$this->pointDeVie = $pointDeVie;
	}
	
	public function setPointDeVieRestant($pointDeVieRestant)
	{
		$this->pointDeVieRestant = $pointDeVieRestant;
	}
	
	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}
	
	public function setPositionX($positionX)
	{
		$this->positionX = $positionX;
	}
	
	public function setPositionY($positionY)
	{
		$this->positionY = $positionY;
	}
	
}


