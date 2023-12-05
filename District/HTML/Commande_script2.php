<?php
include ("Modif_BDD/Bdd_auth.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once '../../vendor/autoload.php';

if (isset($_POST['idplat'])==true)
{




    $stmt = $conn-> query("SELECT * FROM plat where id=".$_POST['idplat']."");
    while($row=$stmt->fetch())
    {
        $total=$row['prix']*$_POST['nombreco'];
    }
    $dateactuelle=date("Y-m-d H:i:s");
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
$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;                                   

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress(''.$_POST['email'].'', ''.$_POST['nomprenom'].''); 

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);

// On ajoute la/les pièce(s) jointe(s)
//$mail->addAttachment('/path/to/file.pdf');

// Sujet du mail
$mail->Subject = 'Commande the district #'.$idsave;

// Corps du message
$mail->Body = "Voici le récapulatif de votre commande : Nom du plat : " .$_POST['nomplat'] . " quantité commandé " . $_POST['nombreco'] . ' prix total : '.$total . ' €' . ' Nous vous contacterons au numéro renseigné : ' . $_POST['telephone'] . ' une fois la commande arrivée à l\'adresse : ' . $_POST['adresse']; 

// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
    }

        header('Refresh: 15;URL=Accueil.php');
    } catch (PDOException $e) {
        // En cas d'erreur, annuler la transaction
        $conn->rollback();
        echo "Erreur : " . $e->getMessage();
    }
    $conn->commit();
}else{
    echo 'Access denied, redirecting to main page';
    header('Refresh: 1;URL=Accueil.php');

}




?>