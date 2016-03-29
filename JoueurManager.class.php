<?php
require_once 'Manager.class.php';

class JoueurManager extends Manager
{	
    // Recherche un joueur dont le login contient le path
    public function chercherLogin($path)
    {
        $request = $this->db->prepare('
            SELECT 
                * 
            FROM 
                joueur 
            WHERE 
                login LIKE :login');
        $request->bindValue(':login', '%'.$path.'%');
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
        return $resultats;
    }
    
    // Recherche un joueur par son login
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
        $resultat = $request->fetch(PDO::FETCH_ASSOC);
        return $resultat;
    }
    
    // Recherche un joueur par son id
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
    
    // Récupération des joueurs et de leur rôles
    public function getAll()
    {
        $request = $this->db->prepare('
            SELECT 
                joueur.*,
                _joueur_role.roleId,
                role.nom AS "roleNom"
            FROM 
                joueur
            LEFT JOIN
                _joueur_role
            ON
                joueur.Id = _joueur_role.joueurId
            LEFT JOIN
                role
            ON
                _joueur_role.roleId = role.id
            ORDER BY
                role.id ASC,
                joueur.login ASC
            ');
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
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
                    _joueur_personnage 
                ON 
                    personnage.id = _joueur_personnage.personnageId 
                WHERE 
                    _joueur_personnage.joueurId = :id
                AND 
                    personnage.planId = :planId
            ');
        $request->bindValue(':id', $id);
        $request->bindValue(':planId', 1);
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_OBJ);
        return $resultats;
    }
    
    public function getPrivilege($id)
    {
        $request = $this->db->prepare('
            SELECT 
                joueur.*,
                _joueur_role.roleId,
                _permission_role.permissionId,
                permission.nom
            FROM 
                joueur 
            LEFT JOIN 
                _joueur_role 
            ON 
                joueur.id = _joueur_role.joueurId
            LEFT JOIN 
                _permission_role 
            ON 
                _joueur_role.roleId = _permission_role.roleId
            LEFT JOIN 
                permission 
            ON 
                _permission_role.permissionId = permission.id                   
            WHERE 
                joueur.id = :id            
        ');
        $request->bindValue(':id', $id);
        $request->execute();
        $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
        return $resultats;
    }
}