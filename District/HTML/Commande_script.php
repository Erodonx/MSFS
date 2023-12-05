<?php
include ("Modif_BDD/Bdd_auth.php");

if (isset($_POST['idplat'])==true)
{

    $stmt1 = $conn-> query("SELECT * FROM plat where id=".$_POST['idplat']."");
    while($row=$stmt1->fetch())
    {
        $total=$row['prix']*$_POST['nombreco'];
    }
    $dateactuelle=date("Y-m-d H:i:s");
    echo $dateactuelle;
    $etat="En préparation";
        try {
        //$conn nous permettra d'accéder au connecteur PDO

        $conn->beginTransaction();
        // Ajouter une nouvelle catégorie
        $stmt = $conn->prepare("INSERT INTO commande (id_plat, quantite, total,date_commande,etat,nom_client,telephone_client,email_client,adresse_client) VALUES (:id_plat, :quantite,:total, :date_commande,:etat,:nom_client,:telephone_client,:email_client,:adresse_client)");
        $stmt->bindParam(':id_plat',$_POST['idplat']);
        $stmt->bindParam(':quantite', $_POST['nombreco']);
        $stmt->bindParam(':total',$total);
        $stmt->bindParam(':date_commande',$dateactuelle);
        $stmt->bindParam(':etat',$etat);
        $stmt->bindParam(':nom_client',$_POST['nomprenom']);
        $stmt->bindParam(':telephone_client',$_POST['telephone']);
        $stmt->bindParam(':email_client',$_POST['email']);
        $stmt->bindParam(':adresse_client',$_POST['adresse']);
        $id = $conn->lastInsertId();
        $idsave = $id;
        $stmt->execute();
        
        echo 'Modification dans la base de donnée effectué ! :)';
    $conn->commit();
        } catch (PDOException $e) {
        // En cas d'erreur, annuler la transaction
        $conn->rollback();
        echo "Erreur : " . $e->getMessage();
    }
}else{
    echo 'Access denied, redirecting to main page';
    header('Refresh: 1;URL=index.php');

}










?>
