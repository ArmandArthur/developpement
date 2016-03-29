<?php
require_once 'Manager.class.php';

class PermissionManager extends Manager
{	   
       public function insert(Permission $permission)
	{
            
           $request = $this->db->prepare('
            INSERT INTO 
                    permission
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
            $request->bindValue(':nom', $permission->getNom());
            $request->execute();
	}
        
        public function getAll()
        {
            $request = $this->db->prepare('
            SELECT 
                permission.*                
            FROM 
                permission
            ORDER BY
                nom ASC
            ');
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }        
        public function get($id)
        {
            $request = $this->db->prepare('
            SELECT 
                permission.*
            FROM 
                permission
            WHERE
                permission.id=:id');
            
            $request->bindValue(':id', $id);
            $request->execute();
            $resultat = $request->fetch(PDO::FETCH_ASSOC);
		
            return $resultat;
        }
        /*
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

