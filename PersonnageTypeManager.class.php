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
            personnageType 
        WHERE 
            id = :id');
        $request->bindValue(':id', $id);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_ASSOC);

        return $resultat;
    }
    
    public function getAll()
    {
        $request = $this->db->prepare('
        SELECT 
            * 
        FROM 
            personnageType
        ORDER BY
            nom');
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_OBJ);

        return $resultats;
    }
}