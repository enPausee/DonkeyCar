<?php 

// connexion
require 'connDb.php';

// Create users
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