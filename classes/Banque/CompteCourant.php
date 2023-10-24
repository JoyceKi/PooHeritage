<?php
namespace App\Banque;
use App\Banque\Compte;
use App\Client\Compte as CompteClient;
/* utilisation de namespace pour gérer les classes qui ont le même nom
création d'une classe
* objet compte 
*/
class CompteCourant extends Compte
{
    /**
     * Summary of decouvert
     * @var float
     */
    private $decouvert;

    public function __construct(CompteClient $compte, float $somme, float $decouvert)
    {
        parent::__construct($compte, $somme);
        $this->decouvert = $decouvert;
    }

    public function getDecouvert()
    {
        return $this->decouvert;
    }

    public function setDecouvert($decouvert)
    {
        if($this->getSolde()> ($decouvert - $this->getSolde())) {
         return $this->setDecouvert($decouvert);
        }
    }


    public function retirer($retrait)
    {
        if ($retrait > 0 && $retrait <= (parent::getSolde() + $this->getDecouvert())) {
            $nouveauSolde =  (parent::getSolde()) - $retrait;
            parent::setSolde($nouveauSolde);
            return parent::getSolde();
        } else {
            return "Solde insuffisant";
        }
    }

    public function __toString()
{
    return "Votre solde est de - ".$this->getSolde()." €";
}
}
