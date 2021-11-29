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
echo "Databases TABLES cleaned successfuly. ";

// BRAND
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"peugeot")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"renault")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"fiat")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"mercedes")');
$pdo->exec('INSERT INTO brand (id, name) VALUES (null,"bmw")');
echo "INSERTING DATAS: BRAND, ";

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
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"compacte")');
$pdo->exec('INSERT INTO category (id, name) VALUES (null,"SUV")');

echo "CATEGORY, ";

// MODEL
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"307","automatic","diesel",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"308",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"5008","automatic","diesel",7,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"talisman","automatic","diesel",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"megane",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"tipo","automatic","electric",5,3)');
$pdo->exec('INSERT INTO model (id, name, fuel, number_seat, number_door) VALUES (null,"panda","diesel",5,3)');
$pdo->exec('INSERT INTO model (id, name, fuel, number_seat, number_door) VALUES (null,"500","electric",5,3)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"tipo",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"classe A",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"amg sl",2,3)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"classe C","automatic","hybrid",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"classe B","automatic","essence",5,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"x5","manual","hybrid",5,2)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"série5",6,5)');
$pdo->exec('INSERT INTO model (id, name, gear_box, fuel, number_seat, number_door) VALUES (null,"série1","automatic","hybrid",5,5)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"x6",7,2)');
$pdo->exec('INSERT INTO model (id, name, number_seat, number_door) VALUES (null,"série 6 gran turismo",3,4)');

echo "MODEL, ";

//VEHICLE
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (1,1,10,1,25,null,"peugeot307.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (1,2,1,1,50,null,"peugeot308.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (1,3,11,1,50,null,"peugeot5008.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (2,4,1,1,40,null,"talisman.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (2,5,10,1,35,null,"megane.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (3,6,10,1,20,null,"tipo.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (3,7,3,1,15,null,"fiatpanda.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (3,8,3,1,25,null,"fiat500.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (3,9,10,1,20,null,"tipo-2.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (4,10,3,1,45,null,"classe-a.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (4,11,9,1,80,null,"amg-sl.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (4,12,1,1,55,null,"classe-c.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (4,13,3,1,45,null,"classe-b.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (5,14,11,1,80,null,"bmwx5.jpg")');
$pdo->exec('INSERT INTO vehicle(brand_id,model_id,category_id,year_driver_license_needed,daily_price,deleted_at,image) VALUES (5,15,1,1,80,null,"bmwserie5.jpg")');
echo "VEHICLE, ";

//EXTRA
$pdo->exec('INSERT INTO extra(name,daily_price) VALUES ("siège bébé",15)');
$pdo->exec('INSERT INTO extra(name,daily_price) VALUES ("gps",30)');
$pdo->exec('INSERT INTO extra(name,daily_price) VALUES ("climatisation",20)');
$pdo->exec('INSERT INTO extra(name,daily_price) VALUES ("porte-vélos",25)');
echo "EXTRA, ";

//order
$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-11-22 17:45:12', '2021-11-26 18:35:00', 100, 1, 1)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-11-27 17:45:12', '2021-11-30 18:35:00', 80, 1, 6)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-12-09 17:45:12', '2021-12-11 18:35:00', 50, 1, 3)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-11-09 17:45:12', '2021-11-11 18:35:00', 30, 2, 7)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-11-28 17:45:12', '2021-11-30 18:35:00', 75, 2, 8)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
$pdo->exec("INSERT INTO `order` (start_location, end_location, price, user_id, vehicle_id) VALUES ('2021-12-09 17:45:12', '2021-12-12 18:35:00', 240, 2, 14)");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

echo "ORDER. Databases Filled";