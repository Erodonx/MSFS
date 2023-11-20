<?php

include 'Bdd_auth.php';
$stmt = $conn->query("SELECT * FROM plat");
$id=1;
$libelle='Sushi maki';
$description='Sushis maki, un régal,
saumon frais pêché de la veille ! Pêché avec amour et soin.';
$prix=8.50;
$image='sushi_maki.jpeg'; //'i14425-recette-de-sushis.jpeg'
$id_categorie=12;
$active='Yes';

$id1=2;
$libelle1='Boeuf caramel';
$description1='Du boeuf au caramel, sans
prétention. un régaahjkehazhrahjkhjkakjhr';
$prix1=10.50;
$image1='boeuf_caramel.jpg'; //'boeuf-caramel-final-scaled.jpg'

$id2=3;
$libelle2='Yakitori';
$description2='Yakitori, du boeuf avec du
fromage dans des belles brochettes.';
$prix2=9.00;
$image2='Yakitori.jpg'; //Yakitori-boeuf-fromage-recette-simple-et-rapide-de-brochettes-japonaises.jpg

$id3=4;
$libelle3='Riz cantonais';
$description3='Du riz cantonais, un
classique quand on veux manger asiatique.';
$prix3=12.00;
$image3='riz_cantonais.jpg';
try {
    //$conn nous permettra d'accéder au connecteur PDO

    $conn->beginTransaction();
    // Ajouter une nouvelle catégorie
    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':libelle',$libelle);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id1);
    $stmt->bindParam(':libelle',$libelle1);
    $stmt->bindParam(':description',$description1);
    $stmt->bindParam(':prix',$prix1);
    $stmt->bindParam(':image',$image1);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id2);
    $stmt->bindParam(':libelle',$libelle2);
    $stmt->bindParam(':description',$description2);
    $stmt->bindParam(':prix',$prix2);
    $stmt->bindParam(':image',$image2);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    $stmt->bindParam(':id',$id3);
    $stmt->bindParam(':libelle',$libelle3);
    $stmt->bindParam(':description',$description3);
    $stmt->bindParam(':prix',$prix3);
    $stmt->bindParam(':image',$image3);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();
    
    
    $conn->commit();

    echo 'Modification dans la base de donnée effectué ! :)';
} catch (PDOException $e) {
    // En cas d'erreur, annuler la transaction
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
}






?>