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
    echo 'Vous consultez les informations de l\'employé mentionné : ' . $GLOBALS['employe'] .'  <br>';
    echo 'Son identité : ' . $emp->getNom() . ' ' . $emp->getPrenom() . '<br>';
    echo 'Sa date d\'embauche : ' . $emp->getDate()->format('Y-m-d') . '<br>';
    echo 'Le nombre d\'année passée au sein de l\'entreprise : ' . $emp->Anciennete($emp->getDate()) .' Dans ce cas, la prime s\'élève à : ' . $emp->Prime($emp->getSalaire(),$emp->Anciennete($emp->getDate())) . ' <br>';
    echo 'Sa fonction et son salaire : ' . $emp->getFonction() .' '. $emp->getSalaire() . ' € <br>';
    echo 'Son service : ' . $emp->getService() .'<br>';
    echo 'le nom de son magasin : ' . $emp->getMagasin()->getNom().' son adresse : '. $emp->getMagasin()->getAdresse() . '<br>';
    echo 'le code postal du Magasin :' . $emp->getMagasin()->getCodePostal().' le nom de la ville ' . $emp->getMagasin()->getVille() . '<br>';
    echo 'Son mode de restauration : '. $emp->getMagasin()->Ticket($emp->getMagasin()->getRestaurant()). '<br>';
    echo 'l\'age des enfants : ';
    $count= count($emp->getEnfants());
    $i=0;
    foreach ($emp->getEnfants() as $enfants) 
            {
                $i++;
                if ($i != $count)
                {
                echo $enfants.',';
                }
                else
                {
                 echo $enfants;
                }
            } 
    echo ' A-t\'il droit au chèque de Noel : '. $emp->droitCheque($emp->getEnfants()).' <br>';
    if ($emp->droitCheque($emp->getEnfants())=='Oui')
    {
     echo 'Voici donc le montant du chèque de Noël : ' . $emp->chequeNoel($emp->getEnfants()) . '€ <br><br><hr>';
    }
}
$p = new Personnage(); 

$p ->setNom("Duplan");
$p ->setPrenom("Robert");
$p ->setSexe("Masculin");
$p ->setAge("45");
$p ->setCapaciteSpeciale('Je fais une nucléaire sur Rust uniquement avec des 360 no scope à l\'intervention !');

echo Appel($p);

$employe0 = new Employe();
$employe0 ->setNom("Duplan");
$employe0 ->setPrenom("Robert");
$employe0 ->setDate("2023-10-09 UTC");
$employe0 ->setFonction("Comptable");
$employe0 ->setSalaire('3000');
$employe0 ->setService('Comptabilité');
$employe0 ->setEnfants(Array ('15','10','18'));
$employe0 -> setMagasin(new Magasin())->setNom('Cobalt');
$employe0 -> getMagasin()->setAdresse('21 rue de la Mine');
$employe0 -> getMagasin()->setCodePostal('80000');
$employe0 -> getMagasin()->setVille('Amiens');
$employe0 -> getMagasin()->setRestaurant('0');


$employe1= new Employe();
$employe1 ->setNom("Vabre");
$employe1 ->setPrenom("Jacqueline");
$employe1 ->setDate("2005-05-25 UTC");
$employe1 ->setFonction("Conseillère");
$employe1 ->setSalaire('3500');
$employe1 ->setService('Ressources Humaines');

$employe2= new Employe();
$employe2 ->setNom("Ine");
$employe2 ->setPrenom("Michelle");
$employe2 ->setDate("2017-12-10 UTC");
$employe2 ->setFonction("Caissière");
$employe2 ->setSalaire('1500');
$employe2 ->setService('Vente');

$employe3= new Employe();
$employe3 ->setNom("Chad");
$employe3 ->setPrenom("Giga");
$employe3 ->setDate("1998-10-20 UTC");
$employe3 ->setFonction("Gestion Entrepôt");
$employe3 ->setSalaire('3000');
$employe3 ->setService('Entrepôt');

$employe4= new Employe();
$employe4 ->setNom("Meta");
$employe4 ->setPrenom("Ultra");
$employe4 ->setDate("1992-01-21 UTC");
$employe4 ->setFonction("PDG");
$employe4 ->setSalaire('10000');
$employe4 ->setService('Ressources Humaines');

$employe5= new Employe();
$employe5 ->setNom("Mac");
$employe5 ->setPrenom("Big");
$employe5 ->setDate("2020-01-21 UTC");
$employe5 ->setFonction("Poucave");
$employe5 ->setSalaire('100');
$employe5 ->setService('Ratus');

for( $i=0; $i<=5 ;$i++)
{
    $employe='employe'.$i; // -> employe0,employe1,employe2,employe3,employe4,employe5
    echo Employe(${$employe});
}












?>