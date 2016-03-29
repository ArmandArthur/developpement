<?php

class Joueur
{
        // Joueur
	private $id;
        private $login;
        
        // Role
        private $roleId;
        private $roleNom;

	public function __construct(Array $donnees) 
	{
            $this->hydrate($donnees);
        }
	
	public function hydrate($donnees)
	{
		foreach ($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
				
			if (method_exists($this, $method))
			{
			  $this->$method($value);
			}
		}
	}
        //Getters
	public function getId()
	{
		return $this->id;
	}

	public function getLogin()
	{
		return $this->login;
	}
        
        public function getRoleId()
        {
                return $this->roleId;
        }
        
        public function getRoleNom()
        {
                return $this->roleNom;
        }        
	
	// Setters
	public function setId($id)
	{
		$this->id = $id;
	}

        public function setLogin($login)
	{
		$this->login = $login;
	}
        
	public function setRoleId($roleId)
	{
		$this->roleId = $roleId;
	}

        public function setRoleNom($roleNom)
	{
		$this->roleNom = $roleNom;
	}        
}


