<?php
include 'pdo_login.php';
$vari=$_GET['disc_id'];
try {
    //$conn nous permettra d'accéder au connecteur PDO

$conn->beginTransaction();
$stmt = $conn->prepare( "DELETE FROM disc WHERE disc_id=:disc_id");
$stmt->bindParam(':disc_id',$_GET['disc_id']);
$stmt->execute();
$conn->commit();

echo 'Suppression dans la base de donnée effectué ! :)';
header('Refresh: 5;URL=php-crud.php');
} catch (PDOException $e) {
// En cas d'erreur, annuler la transaction
$conn->rollback();
echo "Erreur : " . $e->getMessage();
}











?>