<?php
namespace App\Banque;

use App\Client\Compte as CompteClient;
/**
 * création d'une classe compte abstaite
 */

abstract class Compte
{
    /*déclaration des propriétés de la classe et la visibilité
    */
    /**
     * obj titulaire CompteClient
     * @var object
     */
    protected CompteClient $titulaire;

    /**
     * solde du compte
     * @var float
     */
    private $solde;

    public function __construct(CompteClient $compte, float $somme)
    {
        //on attribue le nom à la propriété titulaire de l'instance créée
        $this->titulaire = $compte;
        //on attribue la somme à la propriété solde de l'instance créée
        $this->solde = $somme;
    }

    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setTitulaire(CompteClient $compte): self
    {
        if (isset($compte)) {
            $this->titulaire = $compte;            
        }
        return $this;
    }

    public function setSolde($solde)
    {
        if ($solde >= 0 || $solde != 0) {
            $this->solde = $solde;
        }
        return $this;
    }
}
