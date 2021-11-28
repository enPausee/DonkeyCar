<?php

$adresse = $_POST['adresse'];
$userMail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

if (isset($_POST['personne'])) {

    $userFirstName = $_POST['firstname'];
    $userLastName = $_POST['lastname'];
    $personneMail = "Bonjour mme ou mr " . $userLastName . " " . $userFirstName . ".
    Merci de nous avoir écrit au sujet de: " . $sujet . ".
    Votre message était le suivant: " . $message . ".
    Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".
    En esperant vous revoir rapidement, nous vous prions d'accepter nos plus sincéres salutations.
    Signé : La direction de DonkeyCar.";
    if (mail($userMail, $sujet, $personneMail)) {
        echo "Email envoyé avec succès à " . $userLastName . " " . $userFirstName . " à l'adresse mail suivante : " . $userMail . "!";

    } else {
        echo "Échec de l'envoi de l'email . Nous sommes désolé pour le désagrement.";

    }
} elseif (isset($_POST['societe'])) {
    $raisonSociale = $_POST['raison'];
    $headers = "From: smectaz57@gmail.com";
    $societeMail = "Bonjour société " . $raisonSociale . ".
    Merci de nous avoir écrit au sujet de: " . $sujet . ".
    Votre message était le suivant:" . $message . ".
    Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".
    En esperant vous revoir rapidement, nous vous prions d'accepter nos plus sincéres salutations.
    Signé : La direction de DonkeyCar.";
    if (mail($userMail, $sujet, $societeMail)) {
        echo "Email envoyé avec succès à " . $raisonSociale . " à l'adresse mail suivante : " . $userMail . "!";
    } else {
        echo "Échec de l'envoi de l'email . Nous sommes désolé pour le désagrement.";
    }
}?>




