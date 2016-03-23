<?php
require_once 'Manager.class.php';

class IconePersonnageManager extends Manager
{		
       public function insert(IconePersonnage $iconePersonnage)
	{
            $request = $this->db->prepare('
            INSERT INTO 
                    iconepersonnage
                (
                    `id`,
                    `chemin`
                )
            VALUES 
                (
                    :id,
                    :chemin
                )');

            $request->bindValue(':id', null);
            $request->bindValue(':chemin', $iconePersonnage->getChemin());
            $request->execute();
	}
        
        public function getAll()
        {
            $request = $this->db->prepare('
            SELECT 
                iconepersonnage.*
            FROM 
                iconepersonnage            
            ORDER BY
                chemin ASC
                ');
            $request->execute();
            $resultats = $request->fetchAll(PDO::FETCH_ASSOC);
		
            return $resultats;
        }
}

