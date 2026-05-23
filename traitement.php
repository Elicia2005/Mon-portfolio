<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // On récupère les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $type = htmlspecialchars($_POST['type_personne']);
    $pays = htmlspecialchars($_POST['pays']);
   
    // Ton adresse email
    $to = "ciamakombi@gmail.com";
    $subject = "Nouvel enregistrement client";
   
    // Le contenu du message
    $message = "Vous avez un nouveau client :\n\n";
    $message .= "Nom complet : " . $nom . "\n";
    $message .= "Type de personne : " . $type . "\n";
    $message .= "Pays/Ville : " . $pays . "\n";
   
    // Les en-têtes de l'email
    $headers = "From: webmaster@monsite.com";
   
    // Envoi de l'email
    if(mail($to, $subject, $message, $headers)) {
        echo "<h1>Merci !</h1><p>Votre enregistrement a bien été envoyé. Vous allez recevoir un email.</p>";
    } else {
        echo "<h1>Erreur</h1><p>Désolé, une erreur technique a empêché l'envoi de l'email.</p>";
    }
} else {
    echo "Accès non autorisé.";
}
?>