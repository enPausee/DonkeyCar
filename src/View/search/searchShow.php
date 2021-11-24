<p>htdgrebetjgjtj</p>


<?php
echo "
<pre>";
print_r(var_dump($_POST));
echo "</pre>";

$category = intval($_POST['category']);
$brand = intval($_POST['brand']);
$model = intval($_POST['model']);
$dateExplode = explode(" ", $_POST['dateLocation']);
$dateDebut = $dateExplode[0];
$dateFin = $dateExplode[2];

echo (var_dump($category));
echo (var_dump($model));
echo (var_dump($brand));
echo (var_dump($dateDebut));
echo (var_dump($dateFin));