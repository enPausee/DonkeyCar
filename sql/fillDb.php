<?php

require 'connDb.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("TRUNCATE TABLE user");
$pdo->exec("TRUNCATE TABLE brand");
$pdo->exec("TRUNCATE TABLE model");
$pdo->exec("TRUNCATE TABLE category");
$pdo->exec("TRUNCATE TABLE extra");
$pdo->exec("TRUNCATE TABLE vehicle");
$pdo->exec("TRUNCATE TABLE `order`");
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
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"peugeot 307","automatic","diesel",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"peugeot 308",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"peugeot 5008","automatic","diesel",7,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"renault talisman","automatic","diesel",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"renault megane",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"fiat tipo","automatic","electric",5,3)');
$pdo->exec('INSERT INTO model (id, name, fuel, number_seat, number_door) VALUES (null,"fiat panda","diesel",5,3)');
$pdo->exec('INSERT INTO model (id, name, fuel, number_seat, number_door) VALUES (null,"fiat 500","electric",5,3)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"fiat tipo",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"mercedes classe A",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"mercedes amg sl",2,3)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"mercedes classe C","automatic","hybrid",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"mercedes classe B","automatic","essence",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"bmw x5","manual","hybrid",5,2)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"bmw série5",6,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"bmw série1","automatic","hybrid",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"bmw x6",7,2)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"bmw série 6 gran turismo",3,4)');

echo "MODEL,";

//VEHICLE
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,required_age,daily_price,deleted_at) VALUES (2,4,1,18,80,null)');
echo "VEHICLE,";
