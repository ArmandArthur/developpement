<?php

require_once 'CarteManager.class.php';

class Personnage
{
        // Attributs personnnage
	private $degat;
	private $id;
        private $personnageTypeId;
	private $nom;
        private $mouvement;
	private $pointDeVie;
	private $planId;
	private $positionX;
	private $positionY;

	public function __construct(Array $donnees) 
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
        
	public function seDeplacer($positionX, $positionY)
        {
            $this->setPositionX($positionX);
            $this->setPositionY($positionY);
        }
        
	/*
            Retourne la liste des déplacements possibles.
	*/
	public function getDirection($personnages, $carte)
	{
		$positionX = $this->getPositionX();
		$positionY = $this->getPositionY();
                
		$direction = array();
		$direction[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bg');
		$direction[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY,'flecheClass'=> 'fleche_mg');
		$direction[] = array('flecheX'=> $positionX - 1, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hg');
		$direction[] = array('flecheX'=> $positionX, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bc');
		$direction[] = array('flecheX'=> $positionX, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hc');
		$direction[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY +1,'flecheClass'=> 'fleche_bd');
		$direction[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY,'flecheClass'=> 'fleche_md');
		$direction[] = array('flecheX'=> $positionX + 1, 'flecheY'=> $positionY -1,'flecheClass'=> 'fleche_hd');
		
		// Suppresion des flèches qui sortent de la carte
		foreach($direction as $key => $item)
		{
                    foreach($personnages as $personnage)
                    {
                        if($item['flecheX'] == $personnage->getPositionX() && $item['flecheY'] == $personnage->getPositionY() )
                        {
                            unset($direction[$key]);
                        }
                    }
                    if($carte->getLargeur() < $item['flecheX'])
                    {
                        unset($direction[$key]);
                    }
                    if($carte->getHauteur() < $item['flecheY'] || 0 >= $item['flecheY'])
                    {
                        unset($direction[$key]);
                    }
		}
                
		return $direction;
	}
	//Getters
	public function getDegat()
	{
		return $this->degat;
	}

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
	
	public function getPointDeVie()
	{
		return $this->pointDeVie;
	}
        
	public function getPersonnageTypeId()
	{
		return $this->personnageTypeId;
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
	public function setDegat($degat)
	{
		$this->degat = $degat;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

        public function setMouvement($mouvement)
	{
		$this->mouvement = $mouvement;
	}
              
	public function setNom($nom)
	{
		$this->nom = $nom;
	}
	
	public function setPointDeVie($pointDeVie)
	{
		$this->pointDeVie = $pointDeVie;
	}
        
        public function setPersonnageTypeId($personnageTypeId)
	{
		$this->personnageTypeId = $personnageTypeId;
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


