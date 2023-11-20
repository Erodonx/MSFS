<?php

include 'Bdd_auth.php';
$stmt = $conn->query("SELECT * FROM plat");
$id=1;
$libelle='Sushi maki';
$description='Sushis maki, un régal,
saumon frais pêché de la veille ! Pêché avec amour et soin.';
$prix=8.50;
$image='i14425-recette-de-sushis.jpeg';
$id_categorie=12;
$active='Yes';
try {
    //$conn nous permettra d'accéder au connecteur PDO

    $conn->beginTransaction();
    // Ajouter une nouvelle catégorie
    $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':libelle',$libelle);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();
    $conn->commit();
    echo 'Modification dans la base de donnée effectué ! :)';
    header('Refresh: 15;URL=php-crud.php');
} catch (PDOException $e) {
    // En cas d'erreur, annuler la transaction
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
}






?>