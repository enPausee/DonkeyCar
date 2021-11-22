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

// CATEGORY
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"berline")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"monospace")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"citadine")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"cabriolet")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"crossover")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"4x4")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"break")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"pick up")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"roadster")');
echo "CATEGORY,";

// MODEL
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"peugeot 301")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"peugeot 308")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"peugeot 5008")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"renault talisman")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"renault megane")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"fiat tipo")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"fiat panda")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"fiat 500")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"fiat tipo")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"mercedes classe A")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"mercedes amg sl")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"mercedes classe C hibryde")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"mercedes classe B")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"bmw x5")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"bmw série5")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"bmw série1")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"bmw x6")');
$pdo->exec('INSERT INTO model (id, name) VALUES (null,"bmw série 6 gran turismo")');

echo "MODEL,";
