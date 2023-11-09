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

    echo '<hr><br>Vous consultez les informations de l\'employé mentionné : ' . $GLOBALS['employe'] .'  <br>';
    echo 'Son identité : ' . $emp->getNom() . ' ' . $emp->getPrenom() . '<br>';
    echo 'Sa date d\'embauche : ' . $emp->getDate()->format('Y-m-d') . '<br>';
    echo 'Le nombre d\'année passée au sein de l\'entreprise : ' . $emp->Anciennete($emp->getDate()) .' Dans ce cas, la prime s\'élève à : ' . $emp->Prime($emp->getSalaire(),$emp->Anciennete($emp->getDate())) . ' <br>';
    echo 'Sa fonction et son salaire : ' . $emp->getFonction() .' '. $emp->getSalaire() . ' € <br>';
    echo 'Son service : ' . $emp->getService() .'<br>';
    if ($emp->getMagasin()!=NULL)
    {

    echo 'le nom de son magasin : ' . $emp->getMagasin()->getNom().' son adresse : '. $emp->getMagasin()->getAdresse() . '<br>';
    echo 'le code postal du Magasin :' . $emp->getMagasin()->getCodePostal().' le nom de la ville ' . $emp->getMagasin()->getVille() . '<br>';
    echo 'Son mode de restauration : '. $emp->getMagasin()->Ticket($emp->getMagasin()->getRestaurant()). '<br>';
    /*echo 'l\'age des enfants : ';
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
            } */
    echo ' A-t\'il droit au chèque de Noel : '. $emp->droitCheque($emp->getEnfants()).' <br>';
    if ($emp->droitCheque($emp->getEnfants())=='Oui')
    {
     echo 'Voici donc le montant du chèque de Noël : ' . $emp->montantCheque($emp->getEnfants()) . '€ , et son détail : '. $emp->detailCheque($emp->getEnfants()). '<br><br>';
    }else{
        echo '<br>';
    }
}else
{
    echo '<br>';
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
$employe1 ->setEnfants(Array ('5','18','20'));
$employe1 -> setMagasin(new Magasin())->setNom('Café & Co');
$employe1 -> getMagasin()->setAdresse('15 rue du Soluble');
$employe1 -> getMagasin()->setCodePostal('80000');
$employe1 -> getMagasin()->setVille('Amiens');
$employe1 -> getMagasin()->setRestaurant('a');

$employe2= new Employe();
$employe2 ->setNom("Ine");
$employe2 ->setPrenom("Michelle");
$employe2 ->setDate("2017-12-10 UTC");
$employe2 ->setFonction("Caissière");
$employe2 ->setSalaire('1500');
$employe2 ->setService('Vente');
$employe2 ->setEnfants(Array('15','20','17','8','5'));
$employe2 -> setMagasin(new Magasin())->setNom('Pneu-monie');
$employe2 -> getMagasin()->setAdresse('21 rue de la Gommme');
$employe2 -> getMagasin()->setCodePostal('80000');
$employe2 -> getMagasin()->setVille('Amiens');
$employe2 -> getMagasin()->setRestaurant('0');

$employe3= new Employe();
$employe3 ->setNom("Chad");
$employe3 ->setPrenom("Giga");
$employe3 ->setDate("1998-10-20 UTC");
$employe3 ->setFonction("Gestion Entrepôt");
$employe3 ->setSalaire('3000');
$employe3 ->setService('Entrepôt');
$employe3 ->setEnfants(Array('10','12','14','16','18','5','7','9','1','3'));
$employe3 -> setMagasin(new Magasin())->setNom('Pusher de Fonte Maggle');
$employe3 -> getMagasin()->setAdresse('77 avenue des Haltères');
$employe3 -> getMagasin()->setCodePostal('80000');
$employe3 -> getMagasin()->setVille('Amiens');
$employe3 -> getMagasin()->setRestaurant('1');

$employe4= new Employe();
$employe4 ->setNom("Meta");
$employe4 ->setPrenom("Ultra");
$employe4 ->setDate("1992-01-21 UTC");
$employe4 ->setFonction("PDG");
$employe4 ->setSalaire('10000');
$employe4 ->setService('Ressources Humaines');
$employe4 ->setEnfants(Array('10','15','25','30','18'));
$employe4 -> setMagasin(new Magasin())->setNom('Moulah PDG');
$employe4 -> getMagasin()->setAdresse('07 avenue d\'Or Ré');
$employe4 -> getMagasin()->setCodePostal('80000');
$employe4 -> getMagasin()->setVille('Amiens');
$employe4 -> getMagasin()->setRestaurant('1');

$employe5= new Employe();
$employe5 ->setNom("Mac");
$employe5 ->setPrenom("Big");
$employe5 ->setDate("2020-01-21 UTC");
$employe5 ->setFonction("Poucave");
$employe5 ->setSalaire('100');
$employe5 ->setService('Ratus');
$employe5 ->setEnfants(Array('20','25','30'));
$employe5 -> setMagasin(new Magasin())->setNom('La fromagerie');
$employe5 -> getMagasin()->setAdresse('13 rue Roquefort');
$employe5 -> getMagasin()->setCodePostal('80000');
$employe5 -> getMagasin()->setVille('Amiens');
$employe5 -> getMagasin()->setRestaurant('0');

for( $i=0; $i<=5 ;$i++)
{
    $employe='employe'.$i; // -> employe0,employe1,employe2,employe3,employe4,employe5
    echo Employe(${$employe});
}












?>