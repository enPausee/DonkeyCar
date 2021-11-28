<?php

$adresse = $_POST['adresse'];
$userMail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

if (isset($_POST['personne'])) {
  $userFirstName = $_POST['firstname'];
  $userLastName = $_POST['lastname'];

  echo "merci mme ou mr " . $userLastName . " " . $userFirstName . " de nous avoir écrit au sujet de " . $sujet . ". <br> Votre message était le suivant: <br>" . $message . ". <br> Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".<br> Bonne journée a vous <br>";
} ?>



<?php if (isset($_POST['societe'])) {
  $raisonSociale = $_POST['raison'];

  echo "Bonjour société " . $raisonSociale . " de nous avoir écrit au sujet de " . $sujet . ". <br> Votre message était le suivant: <br>" . $message . ". <br> Nous vous répondrons dès que possible à votre adresse mail: " . $userMail . " ou par courrier à l'adresse suivante: " . $adresse . ".<br> Bonne journée a vous<br>";
} ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
