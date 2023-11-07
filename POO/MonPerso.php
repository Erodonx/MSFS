<?php
include 'Classes/Personnage.class.php';
function Appel($chacha){
    echo 'Un héros répond à l\'appel, voici ses caractéristiques :  <br>';
    echo 'Son identité : ' . $chacha->getNom() . ' ' . $chacha->getPrenom() . '<br>';
    echo 'Son age : ' . $chacha->getAge() . '<br>';
    echo 'Son sexe : ' . $chacha->getSexe() . '<br>';
    echo 'Sa devise : ' . $chacha->getCapaciteSpeciale() .'<br><br>' ;
}
function Employe($emp){
    echo 'Vous consultez les informations de l\'employé mentionné :  <br>';
    echo 'Son identité : ' . $emp->getNom() . ' ' . $emp->getPrenom() . '<br>';
    echo 'Sa date d\'embauche : ' . $emp->getDate()->format('Y-m-d') . '<br>';
    echo 'Le nombre d\'année passée au sein de l\'entreprise : ' . $emp->Anciennete($emp->getDate()) . '<br>';
    echo 'Sa fonction et son salaire : ' . $emp->getFonction() .' '. $emp->getSalaire() . ' € <br>';
    echo 'Son service : ' . $emp->getService();
}
$p = new Personnage(); 

$p ->setNom("Duplan");
$p ->setPrenom("Robert");
$p ->setSexe("Masculin");
$p ->setAge("45");
$p ->setCapaciteSpeciale('Je fais une nucléaire sur Rust uniquement avec des 360 no scope à l\'intervention !');

echo Appel($p);

$aled = new Employe();
$aled ->setNom("Duplan");
$aled ->setPrenom("Robert");
$aled ->setDate("2013-11-07 UTC");
$aled ->setFonction("Comptable");
$aled ->setSalaire('3000');
$aled ->setService('Comptabilité');

echo Employe($aled);













?>