<?php
require_once 'Manager.class.php';

class EvolutionManager extends Manager
{	
        public function delete($id)
        {
            $request = $this->db->prepare('
            DELETE FROM 
                evolution            
            WHERE
                evolution.id=:id');
            
            $request->bindValue(':id', $id);
            $request->execute();
        }   
        
       public function insert(Evolution $evolution)
	{
            
           $request = $this->db->prepare('
            INSERT INTO 
                    evolution
                (
                    `id`,
                    `personnageTypeId`,
                    `palierInferieur`,
                    `palierSuperieur`,
                    `iconePersonnageId`
                )
            VALUES 
                (
                    :id,
                    :personnageTypeId,
                    :palierInferieur,
                    :palierSuperieur,
                    :iconePersonnageId
                )');

            $request->bindValue(':id', null);
            $request->bindValue(':personnageTypeId', $evolution->getPersonnageTypeId());
            $request->bindValue(':palierInferieur', $evolution->getPalierInferieur());
            $request->bindValue(':palierSuperieur', $evolution->getPalierSuperieur());
            $request->bindValue(':iconePersonnageId', $evolution->getIconePersonnageId());
            $request->execute();
	}
        
        public function get($id)
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
	}        
}

