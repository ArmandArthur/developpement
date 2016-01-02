<?php
require_once 'Manager.class.php';
require_once 'Carte.class.php';

class CarteManager extends Manager
{	
	public function get($id)
	{
		$request = $this->db->prepare('
		SELECT * 
			FROM 
				carte 
			WHERE 
				id = :id');
		$request->bindValue(':id', $id);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);
		
		return new Carte($resultat);
	}	
		
}