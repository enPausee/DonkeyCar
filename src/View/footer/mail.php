<?php
namespace App\View\footer;

$adresse = $_POST['adresse'];
$userMail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

if (isset($_POST['personne'])) {
    $userFirstName = $_POST['firstname'];
    $userLastName = $_POST['lastname'];

    echo "merci mme ou mr " . $userLastName . " " . $userFirstName . " de nous avoir écrit au sujet de " . $sujet . ". <br> Votre message était le suivant: <br>" . $message . ". <br> Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".<br> Bonne journée a vous";}

if (isset($_POST['societe'])) {
    $raisonSociale = $_POST['raison'];

    echo "Bonjour société " . $raisonSociale . " de nous avoir écrit au sujet de " . $sujet . ". <br> Votre message était le suivant: <br>" . $message . ". <br> Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".<br> Bonne journée a vous";}

/*if (isset($_POST['personne'])) {
$dest = "smectaz57@gmail.com";
$sujet = "Email de test";
$corp = "Salut ceci est un email de test envoyer par un script PHP";
$headers = "From: metal77400@gmail.com";
if (mail($dest, $sujet, $corp, $headers)) {
return "Email envoyé avec succès à $dest ...";
} else {
return "Échec de l'envoi de l'email...";
}*/