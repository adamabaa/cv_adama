<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Démarrage de la session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["name"];
    $prenom = $_POST["surname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $destinataire = "aba47979@gmail.com";

    // Création d'une instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aba47979@gmail.com';
        $mail->Password = 'yrkt mizp uajy zump';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Paramètres du message
        $mail->setFrom('aba47979@gmail.com', 'Adama BA');
        $mail->addAddress($destinataire);
        $mail->Subject = 'Nouveau message du formulaire de contact';
        $mail->Body = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nMessage: $message";

        // Envoi de l'e-mail
        if ($mail->send()) {
            // Stockage des données dans la session
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $email;
            $_SESSION['message'] = $message;

            // Redirection vers confirmation.php
            header('Location: confirmation.php');
            exit();
        } else {
            echo "Erreur lors de l'envoi de l'e-mail. Erreur : {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        echo "Une erreur s'est produite lors de l'envoi du message. Erreur : {$e->getMessage()}";
    }
} else {
    echo "Accès non autorisé.";
}
?>
