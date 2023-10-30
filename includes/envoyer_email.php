<?php

// Définition de la fonction envoyer_email
function envoyer_email($destinataire, $sujet, $contenu, $expediteur) {

    // Serveur SMTP de MailHog (environnement local)
    $serveur_smtp = 'localhost';
    $port_smtp = 1025; // Port par défaut de MailHog

    // Adresse e-mail de l'expéditeur
    $expediteur = $expediteur;

    // En-têtes de l'e-mail
    $headers = "From: $expediteur\r\n";
    $headers .= "Reply-To: $expediteur\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Envoyer l'e-mail
    $resultat = mail($destinataire, $sujet, $contenu, $headers);

    // Vérifier le résultat de l'envoi
    return $resultat;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if ($nom && $email && $message) {
        // Adresses e-mail de l'expéditeur et du destinataire
        $expediteur = $email;
        $destinataire = 'clement.blin76@gmail.com';

        // Sujet de l'e-mail
        $sujet = 'Nouveau message de ' . $nom;

        // Corps de l'e-mail
        $contenu = "Nom: $nom\n";
        $contenu .= "Email: $email\n\n";
        $contenu .= "Message:\n$message";

        // En-têtes de l'e-mail
        $headers = "From: $expediteur";

        // Envoyer l'e-mail
        $resultat = envoyer_email($destinataire, $sujet, $contenu, $expediteur);

        // Vérifier le résultat de l'envoi
        if ($resultat) {
            echo 'E-mail envoyé avec succès !';
        } else {
            echo 'L\'envoi de l\'e-mail a échoué.';
        }
    } else {
        echo 'Données invalides ou manquantes.';
    }
}
?>
