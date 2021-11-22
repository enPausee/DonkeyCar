<?php

// connexion
require 'connDb.php';

// Create user
$pdo->exec("CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('ADMIN', 'USER') NULL DEFAULT 'USER',
    birth_date date NOT NULL,
    image VARCHAR(255) NULL DEFAULT '150\.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Tables : USER, ';

// Create brand
$pdo->exec("CREATE TABLE brand(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    image VARCHAR(255) NULL DEFAULT '150\.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'BRAND, ';

// Create category
$pdo->exec("CREATE TABLE category(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'CATEGORY, ';

// Create model
$pdo->exec("CREATE TABLE model(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'MODEL, ';

// Create extra
$pdo->exec("CREATE TABLE extra(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(255) NOT NULL,
    daily_price FLOAT DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    image VARCHAR(255) NULL DEFAULT '150\.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'PRICE, ';

// Create vehicle
$pdo->exec("CREATE TABLE vehicle(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    brand_id INT NOT NULL,
    model_id INT NOT NULL,
    category_id INT NOT NULL,
    gear_box ENUM('AUTOMATIC', 'MANUAL') NULL DEFAULT 'MANUAL',
    fuel ENUM('ELECTRIC', 'DIESEL','ESSENCE') NULL DEFAULT 'ESSENCE',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    required_age int NOT NULL,
    daily_price float NOT NULL,
    number_seat int NOT NULL,
    number_door int NOT NULL,
    image VARCHAR(255) NULL DEFAULT '150\.png',
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

// Create orders
$pdo->exec("CREATE TABLE orders(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    actif TINYINT(1) NOT NULL DEFAULT 0,
    start_date date NOT NULL,
    end_date date NOT NULL,
    daily_price float NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
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