<?php
require_once 'Manager.class.php';

class PersonnageManager extends Manager
{	
	public function get($id)
	{
            $request = $this->db->prepare('
            SELECT 
                personnage.*,
                _personnage_personnagetype.personnageTypeId,
                iconepersonnage.chemin
            FROM 
                personnage
            INNER JOIN
                _personnage_personnagetype
            ON
                personnage.id = _personnage_personnageType.personnageId
            LEFT JOIN
                _iconepersonnage_personnage
            ON
                personnage.id = _iconepersonnage_personnage.personnageId
            LEFT JOIN
                iconepersonnage
            ON
                _iconepersonnage_personnage.iconePersonnageId = iconepersonnage.id                
            WHERE 
                personnage.id = :id');
            $request->bindValue(':id', $id);
            $request->execute();
            $resultat = $request->fetch(PDO::FETCH_ASSOC);
		
            return $resultat;
	}
	public function getAll($id)
	{
            $request = $this->db->prepare('
            SELECT * 
                    FROM 
                            personnage 
                    WHERE 
                            id != :id
                    AND
                        planId = :planId');
            $request->bindValue(':id', $id);
            $request->bindValue(':planId', 1);
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
	}
	
        public function getAdversaire($joueurId, $planId)
        {
            $request = $this->db->prepare('
            SELECT 
                personnage.*        
            FROM 
                personnage
            INNER JOIN
                _joueur_personnage
            ON 
                personnage.id = _joueur_personnage.personnageId
            WHERE 
                _joueur_personnage.joueurId != :joueurId
            AND
                personnage.planId = :planId');
            $request->bindValue(':joueurId', $joueurId);
            $request->bindValue(':planId', $planId);
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_OBJ);
		
            return $resultats;
        }

        public function insert(Personnage $personnage)
	{
            
            $request = $this->db->prepare('
            INSERT INTO 
                    personnage
            (
                `id`,
                `degat`,
                `experience`,
                `nom`,
                `nombreAttaque`,
                `mouvement`,
                `pointDeVie`,
                `planId`,
                `pointInvestissement`,
                `positionX`,
                `positionY`,
                `tourDeJeu`,
                `prochainTourDeJeu`
            )
            VALUES 
            (
                :id,
                :degat,
                :experience,
                :nom,
                :nombreAttaque,
                :mouvement,
                :pointDeVie,
                :planId,
                :pointInvestissement,
                :positionX,
                :positionY,
                :tourDeJeu,
                :prochainTourDeJeu
            )
            ;');

            $request->bindValue(':id', null);
            $request->bindValue(':degat', $personnage->getDegat());
            $request->bindValue(':experience', $personnage->getExperience());
            $request->bindValue(':nom', $personnage->getNom());
            $request->bindValue(':nombreAttaque', $personnage->getNombreAttaque());
            $request->bindValue(':mouvement', $personnage->getMouvement());
            $request->bindValue(':planId', $personnage->getPlanId());
            $request->bindValue(':pointInvestissement', $personnage->getPointInvestissement());
            $request->bindValue(':pointDeVie', $personnage->getPointDeVie());            
            $request->bindValue(':positionX', $personnage->getPositionX());
            $request->bindValue(':positionY', $personnage->getPositionY());
            $request->bindValue(':tourDeJeu', $personnage->getTourDeJeu());
            $request->bindValue(':prochainTourDeJeu', $personnage->getProchainTourDeJeu());
            $request->execute();
            
            return $this->db->lastInsertId();
	}
        public function insert_joueur_personnage($joueurId, $personnageId) {
            $request = $this->db->prepare('
            INSERT INTO 
                    _joueur_personnage
            (
                `joueurId`,
                `personnageId`
            )
            VALUES 
            (
                :joueurId,
                :personnageId
            )
            ;');

            $request->bindValue(':joueurId', $joueurId);
            $request->bindValue(':personnageId', $personnageId);
            $request->execute();
        }
        
        public function insert_personnage_personnageType($personnageId, $personnageTypeId)
        {
            $request = $this->db->prepare('
            INSERT INTO 
                    _personnage_personnagetype
            (
                `personnageId`,
                `personnageTypeId`
            )
            VALUES 
            (
                :personnageId,
                :personnageTypeId
            )
            ;');

            $request->bindValue(':personnageId', $personnageId);
            $request->bindValue(':personnageTypeId', $personnageTypeId);
            $request->execute(); 
        }
        
        public function insert_iconePersonnage_personnage($personnageId, $iconePersonnageId)
        {
            $request = $this->db->prepare('
            INSERT INTO 
                    _iconepersonnage_personnage
            (
                `personnageId`,
                `iconePersonnageId`
            )
            VALUES 
            (
                :personnageId,
                :iconePersonnageId
            )
            ;');

            $request->bindValue(':personnageId', $personnageId);
            $request->bindValue(':iconePersonnageId', $iconePersonnageId);
            $request->execute(); 
        }
        
        public function update(Personnage $personnage)
	{
            $request = $this->db->prepare('
            UPDATE 
                    personnage
            SET 
                    degat = :degat,
                    experience = :experience,
                    nom = :nom,
                    nombreAttaque = :nombreAttaque,
                    mouvement = :mouvement,
                    pointDeVie = :pointDeVie,
                    planId = :planId,
                    pointInvestissement = :pointInvestissement,
                    positionX = :positionX,
                    positionY = :positionY,
                    tourDeJeu = :tourDeJeu,
                    prochainTourDeJeu = :prochainTourDeJeu
            WHERE id = :id');

            $request->bindValue(':degat', $personnage->getDegat());
            $request->bindValue(':experience', $personnage->getExperience());
            $request->bindValue(':id', $personnage->getId());
            $request->bindValue(':nom', $personnage->getNom());
            $request->bindValue(':nombreAttaque', $personnage->getNombreAttaque());
            $request->bindValue(':mouvement', $personnage->getMouvement());
            $request->bindValue(':planId', $personnage->getPlanId());
            $request->bindValue(':pointInvestissement', $personnage->getPointInvestissement());
            $request->bindValue(':pointDeVie', $personnage->getPointDeVie());            
            $request->bindValue(':positionX', $personnage->getPositionX());
            $request->bindValue(':positionY', $personnage->getPositionY());
            $request->bindValue(':tourDeJeu', $personnage->getTourDeJeu());
            $request->bindValue(':prochainTourDeJeu', $personnage->getProchainTourDeJeu());
            $request->execute();
	}
        
        public function update_iconepersonnage_personnage(Personnage $personnage)
        {
            $request = $this->db->prepare('
            UPDATE 
                    _iconepersonnage_personnage
            SET 
                    iconePersonnageId = :iconePersonnageId
            WHERE 
                    personnageId= :personnageId');
            
            $request->bindValue(':iconePersonnageId', $personnage->getIconePersonnageId());
            $request->bindValue(':personnageId', $personnage->getId());
            $request->execute();            
        }
}