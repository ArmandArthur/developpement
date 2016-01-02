<?php
require_once 'Manager.class.php';
require_once 'Personnage.class.php';

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
		
		return new Personnage($resultat);
	}	
	
	public function update(Personnage $personnage)
	{
		$request = $this->db->prepare('
		UPDATE 
			personnage
		SET 
			degats = :degats,
			nom = :nom,
			pointDeVie = :pointDeVie,
			pointDeVieRestant = :pointDeVieRestant,
			planId = :planId,
			positionX = :positionX,
			positionY = :positionY
		WHERE id = :id');
		
		$request->bindValue(':degats', $personnage->getDegats());
		$request->bindValue(':id', $personnage->getId());
		$request->bindValue(':nom', $personnage->getNom());
		$request->bindValue(':pointDeVie', $personnage->getPointDeVie());
		$request->bindValue(':pointDeVieRestant',  $personnage->getPointDeVieRestant());
		$request->bindValue(':planId', $personnage->getPlanId());
		$request->bindValue(':positionX', $personnage->getPositionX());
		$request->bindValue(':positionY', $personnage->getPositionY());
        $request->execute();
	}	
		
}