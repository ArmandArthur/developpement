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
    
    public function getListeJoueur()
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
    
    public function getListePersonnageFromJoueur($id)
    {
        $request = $this->db->prepare('
            SELECT 
            * 
            FROM 
                personnage 
            LEFT JOIN 
                liaison_joueur_personnage 
            ON 
                personnage.id = liaison_joueur_personnage.personnageId 
            WHERE 
                liaison_joueur_personnage.joueurId = :id
            AND 
                personnage.planId = :planId
            ');
        $request->bindValue(':id', $id);
        $request->bindValue(':planId', 1);
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_OBJ);
        return $resultats;
    }    
}