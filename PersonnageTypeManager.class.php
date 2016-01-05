<?php
require_once 'Manager.class.php';

class PersonnageTypeManager extends Manager
{	
    public function get($id)
    {
        $request = $this->db->prepare('
        SELECT 
            * 
        FROM 
            personnage_type 
        WHERE 
            id = :id');
        $request->bindValue(':id', $id);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);

        return $resultat;
    }		
}