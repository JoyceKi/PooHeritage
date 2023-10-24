<?php

use App\Autoloader;

// require_once 'classes/Banque/Compte.php';
// require_once 'classes/Banque/compteCourant.php';
// require_once 'classes/Banque/CompteEpargne.php';
// require_once 'classes/Client/Compte.php';

require_once 'classes/Autoloader.php';
Autoloader::register();

use App\Banque\Compte as CompteBancaire;
use App\Banque\CompteCourant as CompteCourant;
use App\Banque\CompteEpargne as CompteEpargne;
use App\Client\Compte as CompteClient;

// $compte1 = new CompteCourant("Stéphane", 1000,500);

// // echo $compte1->getSolde();

// $nouveauSolde = $compte1->retirer(120);
// echo "Votre nouveau solde est de ".$nouveauSolde."€";
// // var_dump($compte1);
// echo '<br>';

// $compte2 = new CompteEpargne ("Mathieu", 1000, 2);
// // var_dump($compte2);

// echo "Votre taux d'intérêts est de ". $compte2->setTaux_interets(2)."%";
// echo '<br>';

// echo "Vos intérêts s'élèvent à ".$compte2->verserInterets()."€";
// echo '<br>';
// $compte3 = new CompteClient ("Doe", "John");
// var_dump($compte3);

// $compte1 = new CompteCourant("Hendrix", "Jimi", 10000, 500);

// $compte2 = new CompteEpargne("Page", "Jimmy", 10020, 5);

$compteClient = new CompteClient("Hendrix", "Jimi", "06 02 03 04 05");
$compteCourant = new CompteCourant($compteClient, 1000, 500);
$compteEpargne = new CompteEpargne($compteClient, 1000, 5);

// var_dump($compteCourant);
// echo '<br>';
// echo '<br>';
// var_dump($compteEpargne);

$nomClient = $compteCourant->getTitulaire()->getNom();
$telephoneClient = $compteCourant->getTitulaire()->getTelephone();


echo "Titulaire du compte : ".$nomClient."<br>";
echo "N° de téléphone : ".$telephoneClient."<br>";