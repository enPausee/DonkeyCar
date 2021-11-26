<?php
namespace App\View\footer;

$userFirstName = $_POST['firstname'];
$userLastName = $_POST['lastname'];
$userMail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

var_dump($_POST);
if (isset($_POST['personne'])) {
    echo "merci mme ou mr " . $userLastName . " " . $userFirstName . " de nous avoir écrit au sujet de " . $sujet . ". <br> Votre était le suivant: <br>" . $message . ". <br> Nous vous répondrons dès que possible à votre adresse mail " . $userMail . ".<br> Bonne journée a vous";}

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