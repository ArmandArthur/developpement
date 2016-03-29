<?php

class Privilege {
	//private $joueurId;
	//private $roleId;
        private $permission = array();

	public function __construct($donnees) 
	{
            $this->hydrate($donnees);
        }
        
	public function hydrate($donnees)
	{
            
		foreach ($donnees as $key => $item)
		{
                    $this->permission[$item['nom']] = $item['permissionId'];
		}
	}
        
        public function hasPermission($permission)
        {
            $boolean = false;
            foreach($this->permission as $key => $value)
            {
                if($key == $permission)
                {
                    $boolean = true;
                }
            }
            return $boolean;
        }
}
