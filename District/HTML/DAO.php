<?php
include('Modif_BDD/Bdd_auth.php');

//Requêtes accueil
function affiche_cat_Populaire($conn)
{
    $stmt = $conn->query("select categorie.libelle,categorie.image,sum(quantite),categorie.id from commande join plat on plat.id = commande.id_plat join categorie on plat.id_categorie=categorie.id group by categorie.id order by sum(quantite) desc;");
    return $stmt;
}
function affiche_cat($conn)
{
    $stmt = $conn->query("select categorie.libelle,categorie.image,categorie.id from categorie where categorie.libelle not in (select categorie.libelle from commande join plat on plat.id = commande.id_plat join categorie on plat.id_categorie=categorie.id group by categorie.id order by sum(quantite) desc) and active='Yes';");
    return $stmt;
}

function affiche_plat($conn)
{
    $etat='Annulée';
    $stmt=$conn->query("SELECT sum(quantite*prix), plat.libelle,plat.image from commande join plat where id_plat=plat.id and commande.etat!='Annulée' group by plat.libelle order by sum(quantite) desc limit 5");
    $stmt->execute();
    return $stmt;
}
function plat_plat($conn)
{
    $stmt = $conn->query("SELECT categorie.libelle as catname,plat.description as descrip, plat.image as image, plat.id as platid from categorie join plat where plat.id_categorie=categorie.id and categorie.active='Yes' Order by categorie.libelle");
    return $stmt;
}
function plat_plat_cat($conn)
{
    $vari=$_GET['cat_id'];
    $stmt = $conn->query("SELECT categorie.libelle as catname,plat.description as descrip, plat.image as image, plat.id as platid from categorie join plat where plat.id_categorie=categorie.id and categorie.active='Yes' and id_categorie=".$vari." Order by categorie.libelle");
    return $stmt;
}
function commande($conn)
{
$vari=$_GET['id'];
$stmt = $conn-> query("SELECT * FROM plat where id=".$vari."");
return $stmt;
}

?>
