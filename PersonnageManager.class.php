<?php
require_once 'Manager.class.php';

class PersonnageManager extends Manager
{	
	public function get($id)
	{
            $request = $this->db->prepare('
            SELECT 
                personnage.*,
                liaison_personnage_personnagetype.personnageTypeId
            FROM 
                personnage
            INNER JOIN
                liaison_personnage_personnagetype
            ON
                personnage.id = liaison_personnage_personnageType.personnageId
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
                liaison_joueur_personnage
            ON 
                personnage.id = liaison_joueur_personnage.personnageId
            WHERE 
                liaison_joueur_personnage.joueurId != :joueurId
            AND
                personnage.planId = :planId');
            $request->bindValue(':joueurId', $joueurId);
            $request->bindValue(':planId', $planId);
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_OBJ);
		
            return $resultats;
        }
        
        public function update(Personnage $personnage)
	{
            $request = $this->db->prepare('
            UPDATE 
                    personnage
            SET 
                    degat = :degat,
                    nom = :nom,
                    nombreAttaque = :nombreAttaque,
                    mouvement = :mouvement,
                    pointDeVie = :pointDeVie,
                    planId = :planId,
                    positionX = :positionX,
                    positionY = :positionY,
                    tourDeJeu = :tourDeJeu,
                    prochainTourDeJeu = :prochainTourDeJeu
            WHERE id = :id');

            $request->bindValue(':degat', $personnage->getDegat());
            $request->bindValue(':id', $personnage->getId());
            $request->bindValue(':nom', $personnage->getNom());
            $request->bindValue(':nombreAttaque', $personnage->getNombreAttaque());
            $request->bindValue(':mouvement', $personnage->getMouvement());
            $request->bindValue(':planId', $personnage->getPlanId());
            $request->bindValue(':pointDeVie', $personnage->getPointDeVie());            
            $request->bindValue(':positionX', $personnage->getPositionX());
            $request->bindValue(':positionY', $personnage->getPositionY());
            $request->bindValue(':tourDeJeu', $personnage->getTourDeJeu());
            $request->bindValue(':prochainTourDeJeu', $personnage->getProchainTourDeJeu());
            $request->execute();
	}	
}