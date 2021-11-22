<?php

// connexion
require 'connDb.php';

// Create user
$pdo->exec("CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    createdAccount TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('ADMIN', 'USER') NULL DEFAULT 'USER',
    birthDate date NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Tables : USER, ';

// Create brand
$pdo->exec("CREATE TABLE brand(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'BRAND, ';

// Create category
$pdo->exec("CREATE TABLE category(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'CATEGORY, ';

// Create model
$pdo->exec("CREATE TABLE model(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'MODEL, ';

// Create extra
$pdo->exec("CREATE TABLE extra(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    price FLOAT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'PRICE, ';

// Create vehicle
$pdo->exec("CREATE TABLE vehicle(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    brand_id INT NOT NULL,
    model_id INT NOT NULL,
    category_id INT NOT NULL,
    gearBox ENUM('AUTOMATIC', 'MANUAL') NULL DEFAULT 'MANUAL',
    fuel ENUM('ELECTRIC', 'DIESEL','ESSENCE') NULL DEFAULT 'ESSENCE',
    requiredAge int NOT NULL,
    dailyPrice float NOT NULL,
    numberSeat int NOT NULL,
    numberDoor int NOT NULL,
    CONSTRAINT fk_vehicle_brand 
        FOREIGN KEY (brand_id) 
        REFERENCES brand(id),
    CONSTRAINT fk_vehicle_category
        FOREIGN KEY (category_id) 
        REFERENCES category(id),
    CONSTRAINT fk_vehicle_model
        FOREIGN KEY (model_id) 
        REFERENCES model(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'VEHICLE, ';

// Create extra
$pdo->exec("CREATE TABLE orders(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    actif TINYINT(1) NOT NULL DEFAULT 0,
    startDate date NOT NULL,
    endDate date NOT NULL,
    user_id INT NOT NULL,
    CONSTRAINT fk_order_user
        FOREIGN KEY (user_id) 
        REFERENCES user(id),
    vehicle_id INT NOT NULL,
    CONSTRAINT fk_order_vehicle
        FOREIGN KEY (vehicle_id) 
        REFERENCES vehicle(id),
    extra_id INT NOT NULL,
    CONSTRAINT fk_order_extra
        FOREIGN KEY (extra_id) 
        REFERENCES extra(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'ORDERS were created successfully';
