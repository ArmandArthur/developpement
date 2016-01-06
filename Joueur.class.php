<?php

class Joueur
{
        // Attributs personnnage
	private $id;
        private $login;

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
	
	// Setters
	public function setId($id)
	{
		$this->id = $id;
	}

        public function setLogin($login)
	{
		$this->login = $login;
	}
}


