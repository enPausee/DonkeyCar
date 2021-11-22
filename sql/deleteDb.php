<?php

require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("DROP TABLE user");
$pdo->exec("DROP TABLE brand");
$pdo->exec("DROP TABLE category");
$pdo->exec("DROP TABLE model");
$pdo->exec("DROP TABLE extra");
$pdo->exec("DROP TABLE vehicle");
$pdo->exec("DROP TABLE orders");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
echo "Databases TABLES deleted successfuly ";
