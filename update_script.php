<?php
include 'pdo_login.php';
$stmt2 = $conn->query("SELECT * FROM disc");
$vari=$_REQUEST['secret'];
if ($_REQUEST['picture']=='')
{
    $stmt1 = $conn->query("SELECT * from disc");
    while ($row = $stmt1->fetch())
    {
     if ($row['disc_id']==$vari)
     {

     $_REQUEST['picture']=$row['disc_picture'];
             
    }
    }
}
try {
            //$conn nous permettra d'accéder au connecteur PDO

            $conn->beginTransaction();
            // Ajouter une nouvelle catégorie
            $stmt = $conn->prepare("UPDATE disc SET disc_title=:title, disc_year=:yyear, disc_genre=:genre, disc_price=:price, artist_id=:artist, disc_picture=:picture   WHERE disc_id=:disc_id ");
            $stmt->bindParam(':disc_id',$_REQUEST['secret']);
            $stmt->bindParam(':title', $_REQUEST['title']);
            $stmt->bindParam(':yyear',$_REQUEST['year']);
            $stmt->bindParam(':genre',$_REQUEST['genre']);
            $stmt->bindParam(':price',$_REQUEST['price']);
            $stmt->bindParam(':picture',$_REQUEST['picture']);
            $stmt->bindParam(':artist',$_REQUEST['artist']);
            $stmt->execute();
            $conn->commit();
            echo 'Modification dans la base de donnée effectué ! :)';
            header('Refresh: 5;URL=php-crud.php');
        } catch (PDOException $e) {
            // En cas d'erreur, annuler la transaction
            $conn->rollback();
            echo "Erreur : " . $e->getMessage();
        }

?>