<?php
namespace App\Client;

class Compte
{
    /**
     * Nom du client
     * @var string
     */
    private $nom;

    /**
     * Prénom du client
     * @var string
     */
    private $prenom;

    /**
     * Téléphone du client
     * @var string
     */
    private $telephone;
    
    /**
     * Summary of __construct
     * @param string $nom
     * @param string $prenom
     */
    public function __construct(string $nom, string $prenom, string $telephone)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    

	/**
	 * @return mixed
	 */
	public function getTelephone() {
		return $this->telephone;
	}
	
	/**
	 * @param mixed $telephone 
	 * @return self
	 */
	public function setTelephone($telephone): self {
		$this->telephone = $telephone;
		return $this;
	}
}