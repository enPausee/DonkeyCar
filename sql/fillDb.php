<?php 

require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE user");
$pdo->exec("TRUNCATE TABLE brand");
$pdo->exec("TRUNCATE TABLE model");
$pdo->exec("TRUNCATE TABLE category");
$pdo->exec("TRUNCATE TABLE extra");
$pdo->exec("TRUNCATE TABLE vehicle");
$pdo->exec("TRUNCATE TABLE orders");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
echo "Databases TABLES cleaned successfuly ";

// BRAND
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"peugeot")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"renault")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"fiat")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"mercedes")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"bmw")');
echo "INSERT DATAS BRAND, ";

// MODEL
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"berline")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"monospace")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"cabriolet")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"crossover")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"4x4")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"break")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"pick up")');
echo "MODEL,";