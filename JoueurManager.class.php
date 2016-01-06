<?php
require_once 'Manager.class.php';

class JoueurManager extends Manager
{	
    public function login($login)
    {
        $request = $this->db->prepare('
            SELECT 
                * 
            FROM 
                joueur 
            WHERE 
                login = :login');
        $request->bindValue(':login', $login);
        $request->execute();
        $resultat = $request->fetch(PDO::FETCH_OBJ);
        return $resultat;
    }
    
    public function get($id)
    {
        $request = $this->db->prepare('
            SELECT 
                * 
            FROM 
                joueur 
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
                joueur 
            ');
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_OBJ);
        return $resultats;
    }
}