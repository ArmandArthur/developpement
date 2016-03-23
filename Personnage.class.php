<?php

require_once 'CarteManager.class.php';

class Personnage
{
        // Attributs personnnage
	private $chemin;
	private $degat;
	private $experience;
	private $pointInvestissement;
	private $id;
        private $iconePersonnageId;
        private $personnageTypeId;
	private $nom;
        private $nombreAttaque;
        private $mouvement;
	private $pointDeVie;
	private $planId;
	private $positionX;
	private $positionY;
	private $tourDeJeu;
	private $prochainTourDeJeu;

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
        
        public function setMort()
        {
            $this->setPlanId(0);
        }
        
        public function isMort()
        {
            if($this->getPointDeVie() < 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        public function recevoirDegat($degat)
        {
            $this->setPointDeVie($this->getPointDeVie()-$degat);
        }
        
	public function seDeplacer($positionX, $positionY)
        {
            $this->setPositionX($positionX);
            $this->setPositionY($positionY);
            $this->setMouvement($this->getMouvement() - 1);
        }

        public function seToucher(Personnage $personnage)
        {
            if( ($this->positionX == $personnage->getPositionX()-1 && $this->positionY == $personnage->getPositionY() + 1)  ||
                ($this->positionX == $personnage->getPositionX()-1 && $this->positionY == $personnage->getPositionY()) ||
                ($this->positionX == $personnage->getPositionX()-1 && $this->positionY == $personnage->getPositionY() -1) ||
                ($this->positionX == $personnage->getPositionX() && $this->positionY == $personnage->getPositionY() +1) ||
                ($this->positionX == $personnage->getPositionX() && $this->positionY == $personnage->getPositionY() -1) ||
                ($this->positionX == $personnage->getPositionX()+1 && $this->positionY == $personnage->getPositionY() + 1)  ||
                ($this->positionX == $personnage->getPositionX()+1 && $this->positionY == $personnage->getPositionY()) ||
                ($this->positionX == $personnage->getPositionX()+1 && $this->positionY == $personnage->getPositionY() -1) )
            {
                return true;
            }
        }
        
	/*
            Retourne si les attaques sont disponible
	*/        
        public function tourDisponible()
        {
            $tourDisponible = true;
            
            // Si le tour est expiré
            if( strtotime(date('Y-m-d H:i:s')) > strtotime($this->getProchainTourDeJeu()) )
            {
                $tourDisponible = false;
            }    
            return $tourDisponible;
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
	public function getChemin()
	{
		return $this->chemin;
	}
        
	public function getDegat()
	{
		return $this->degat;
	}

	public function getExperience()
	{
		return $this->experience;
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

	public function getNombreAttaque()
	{
		return $this->nombreAttaque;
	}
        
	public function getPointDeVie()
	{
		return $this->pointDeVie;
	}
        
        public function getIconePersonnageId()
        {
            return $this->iconePersonnageId;
        }
        
	public function getPersonnageTypeId()
	{
		return $this->personnageTypeId;
	}
	
	public function getPlanId()
	{
		return $this->planId;
	}

        public function getPointInvestissement()
	{
		return $this->pointInvestissement;
	}
        
	public function getPositionX()
	{
		return $this->positionX;
	}
	
	public function getPositionY()
	{
		return $this->positionY;
	}

	public function getTourDeJeu()
	{
		return $this->tourDeJeu;
	}
        
        public function getProchainTourDeJeu()
	{
		return $this->prochainTourDeJeu;
	}
        
	// Setters
	public function setChemin($chemin)
	{
		$this->chemin = $chemin;
	}

	public function setDegat($degat)
	{
		$this->degat = $degat;
	}
        
	public function setExperience($experience)
	{
		$this->experience = $experience;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setIconePersonnageId($iconePersonnageId)
	{
		$this->iconePersonnageId = $iconePersonnageId;
	}
        
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
        
        public function setPersonnageTypeId($personnageTypeId)
	{
		$this->personnageTypeId = $personnageTypeId;
	}
	
	public function setPlanId($planId)
	{
		$this->planId = $planId;
	}
	
        public function setPointInvestissement($pointInvestissement)
	{
		$this->pointInvestissement = $pointInvestissement;
	}
        
	public function setPositionX($positionX)
	{
		$this->positionX = $positionX;
	}
	
	public function setPositionY($positionY)
	{
		$this->positionY = $positionY;
	}
        
	public function setTourDeJeu($tourDeJeu)
	{
		$this->tourDeJeu = $tourDeJeu;
	}        
        
	public function setProchainTourDeJeu($prochainTourDeJeu)
	{
		$this->prochainTourDeJeu = $prochainTourDeJeu;
	}  	
}


