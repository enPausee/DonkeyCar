<?php 

require 'connDb.php';

$pdo->exec("DROP TABLE user");
$pdo->exec("DROP TABLE brand");
$pdo->exec("DROP TABLE category");
$pdo->exec("DROP TABLE model");
$pdo->exec("DROP TABLE extra");
echo "Databases TABLES deleted successfuly ";