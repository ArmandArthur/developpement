<?php
require_once 'Manager.class.php';

class RoleManager extends Manager
{	   
       /***********************
        * Table role
        ***********************/
        public function insert(Role $role)
	{
            
           $request = $this->db->prepare('
            INSERT INTO 
                    role
                (
                    `id`,
                    `nom`
                )
            VALUES 
                (
                    :id,
                    :nom
                )');

            $request->bindValue(':id', null);
            $request->bindValue(':nom', $role->getNom());
            $request->execute();
	}
        
        public function getAll()
        {
            $request = $this->db->prepare('
            SELECT 
                role.*                
            FROM 
                role
            ORDER BY
                id ASC
            ');
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }

        /**************************
        * Table _permission_role
        **************************/
        public function insert_permission_role($roleId, $permissionId)
        {
            $request = $this->db->prepare('
            INSERT INTO 
                    _permission_role
            (
                `roleId`,
                `permissionId`
            )
            VALUES 
            (
                :roleId,
                :permissionId
            )
            ;');

            $request->bindValue(':roleId', $roleId);
            $request->bindValue(':permissionId', $permissionId);
            $request->execute(); 
        }
        
        public function delete_permission_role($roleId)
        {
            $request = $this->db->prepare('
            DELETE FROM 
                _permission_role
            WHERE
                _permission_role.roleId = :roleId
            ;');

            $request->bindValue(':roleId', $roleId);
            $request->execute(); 
        }
        
        public function getBy_permission_role($filtre, $valeur)
        {
            $request = $this->db->prepare('
            SELECT 
                _permission_role.*
            FROM 
                _permission_role
            WHERE
                _permission_role.'.$filtre.'='.$valeur);
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }        

        /**************************
        * Table _joueur_role
        **************************/        
        public function insert_joueur_role($joueurId, $roleId)
        {
            $request = $this->db->prepare('
            INSERT INTO 
                    _joueur_role
            (
                `joueurId`,
                `roleId`
            )
            VALUES 
            (
                :joueurId,
                :roleId
            )
            ;');

            $request->bindValue(':joueurId', $joueurId);
            $request->bindValue(':roleId', $roleId);
            $request->execute(); 
        }
        
        public function delete_joueur_role($joueurId)
        {
            $request = $this->db->prepare('
            DELETE FROM
                    _joueur_role
            WHERE
                _joueur_role.joueurId = :joueurId
            ;');

            $request->bindValue(':joueurId', $joueurId);
            $request->execute();  
        }
        /*public function get($id)
        {
            $request = $this->db->prepare('
            SELECT 
                evolution.*
            FROM 
                evolution
            WHERE
                evolution.id=:id');
            
            $request->bindValue(':id', $id);
            $request->execute();
            $resultats = $request->fetch(PDO::FETCH_ASSOC);
		
            return $resultats;
        }
        
        public function getAll()
        {
            $request = $this->db->prepare('
            SELECT 
                evolution.*,
                iconepersonnage.chemin AS iconePersonnagePath
            FROM 
                evolution
            INNER JOIN
                iconepersonnage
            ON
                evolution.iconePersonnageId = iconepersonnage.id
            ORDER BY
                personnageTypeId ASC,
                palierInferieur ASC');
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }
        
        public function getBy($filtre, $valeur)
        {
            $request = $this->db->prepare('
            SELECT 
                evolution.*
            FROM 
                evolution
            WHERE
                evolution.'.$filtre.'='.$valeur);
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }
        
        public function update(Evolution $evolution)
	{
            $request = $this->db->prepare('
            UPDATE 
                    evolution
            SET 
                    personnageTypeId = :personnageTypeId,
                    palierInferieur = :palierInferieur,
                    palierSuperieur = :palierSuperieur,
                    iconePersonnageId = :iconePersonnageId
            WHERE id = :id');

            $request->bindValue(':id', $evolution->getId());
            $request->bindValue(':personnageTypeId', $evolution->getPersonnageTypeId());
            $request->bindValue(':palierInferieur', $evolution->getPalierInferieur());
            $request->bindValue(':palierSuperieur', $evolution->getPalierSuperieur());
            $request->bindValue(':iconePersonnageId', $evolution->getIconePersonnageId());
            $request->execute();
	}   */     
}

