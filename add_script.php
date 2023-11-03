<?php
include 'pdo_login.php';
$stmt2 = $conn->query("SELECT * FROM disc");   
try {
            //$conn nous permettra d'accéder au connecteur PDO

            $conn->beginTransaction();
            // Ajouter une nouvelle catégorie
            $stmt = $conn->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture,disc_genre,disc_label,artist_id,disc_price) VALUES (:disc_title, :disc_year,:disc_picture, :disc_genre,:disc_label,:artist_id,:disc_price)");
            $stmt->bindValue(':disc_title', $_REQUEST['title']);
            $stmt->bindValue(':disc_year', $_REQUEST['year']);
            $stmt->bindValue(':disc_picture', $_REQUEST['picture']);
            $stmt->bindValue(':disc_genre', $_REQUEST['genre']);
            $stmt->bindValue(':disc_label', $_REQUEST['label']);
            $stmt->bindValue(':artist_id', $_REQUEST['artist']);
            $stmt->bindValue(':disc_price', $_REQUEST['price']);
            $stmt->execute();
            //$id_categorie = $conn->lastInsertId();

            // // Ajouter plusieurs nouveaux plats
            // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
            // $stmt->bindValue(':libelle', 'Gratin dauphinois');
            // $stmt->bindValue(':description', 'Un plat hivernal traditionnellement composé de pommes de terre cuites en rondelles, crème fraîche, lait et noix de muscade');
            // $stmt->bindValue(':prix', 13.50);
            // $stmt->bindValue(':image', 'plat1.jpg');
            // $stmt->bindValue(':active', 'Yes');
            // $stmt->bindValue(':id_categorie', $id_categorie);
            // $stmt->execute();
            // $plat_id = $conn->lastInsertId();

            // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
            // $stmt->bindValue(':libelle', 'Ratatouille');
            // $stmt->bindValue(':description', 'En véritable plat méditerranéen, la ratatouille est un ragoût mijoté de légumes du soleil et d’huile d’olive. Tomates, courgettes, aubergines, poivrons, oignons et ail composent la recette.');
            // $stmt->bindValue(':prix', 10.00);
            // $stmt->bindValue(':image', 'plat2.jpg');
            // $stmt->bindValue(':active', 'Yes');
            // $stmt->bindValue(':id_categorie', $id_categorie);
            // $stmt->execute();
            // $plat_id = $conn->lastInsertId();

            // Valider la transaction
            $conn->commit();
            echo 'Ajout dans la base de donnée effectué ! :)';
            header('Refresh: 5;URL=php-crud.php');
        } catch (PDOException $e) {
            // En cas d'erreur, annuler la transaction
            $conn->rollback();
            echo "Erreur : " . $e->getMessage();
        }

?>