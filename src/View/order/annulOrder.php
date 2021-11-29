<h1><?=$this->h1?></h1>
<p>Votre réservation a bien été annulé</p>
<?php
if (isset($_POST['oui'])) {
    return $annulOrders;
}?>
