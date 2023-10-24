<?php

namespace App\Banque;
use App\Banque\Compte;
use App\Client\Compte as CompteClient;
/* création d'une classe
* objet compte 
*/
class CompteEpargne extends Compte
{
    /**
     * taux d'intérêts du compte
     * @var float
     */
    private $taux_interets;

    public function __construct(CompteClient $compte, float $somme, float $taux)
    {
        parent::__construct($compte, $somme);
        $this->taux_interets = $taux;
    }

    public function getTaux_interets()
    {
        return $this->taux_interets;
    }

    public function setTaux_interets(float $taux)
    {
        if(parent::getSolde() > 0){
            return $taux;
        } else {
            return "0";
        }
    }

    public function verserInterets()
    {
        if(parent::getSolde() > 0) {
            $interets = parent::getSolde() * $this->taux_interets / 100;
            return $interets;
        }
    }
}