<?php
require_once 'Manager.class.php';

class PersonnageManager extends Manager
{	
	public function get($id)
	{
            $request = $this->db->prepare('
            SELECT * 
                    FROM 
                            personnage 
                    WHERE 
                            id = :id');
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
	
	public function update(Personnage $personnage)
	{
            $request = $this->db->prepare('
            UPDATE 
                    personnage
            SET 
                    degat = :degat,
                    nom = :nom,
                    personnageTypeId = :personnageTypeId,
                    mouvement = :mouvement,
                    pointDeVie = :pointDeVie,
                    planId = :planId,
                    positionX = :positionX,
                    positionY = :positionY
            WHERE id = :id');

            $request->bindValue(':degat', $personnage->getDegat());
            $request->bindValue(':id', $personnage->getId());
            $request->bindValue(':personnageTypeId', $personnage->getPersonnageTypeId());
            $request->bindValue(':nom', $personnage->getNom());
            $request->bindValue(':mouvement', $personnage->getMouvement());
            $request->bindValue(':pointDeVie', $personnage->getPointDeVie());
            $request->bindValue(':planId', $personnage->getPlanId());
            $request->bindValue(':positionX', $personnage->getPositionX());
            $request->bindValue(':positionY', $personnage->getPositionY());
            $request->execute();
	}	
}