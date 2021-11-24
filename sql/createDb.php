<?php

// connexion
require 'connDb.php';

//Create user
$pdo->exec("CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('ADMIN','USER') DEFAULT 'USER',
  `birth_date` date NOT NULL,
  `image` varchar(255) DEFAULT 'placeholder.png',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'Tables : USER, ';

//Create brand
$pdo->exec("CREATE TABLE `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'placeholder.png',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'BRAND, ';

// Create category
$pdo->exec("CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'CATEGORY, ';

// Create model
$pdo->exec("CREATE TABLE `model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gear_box` enum('AUTOMATIC','MANUAL') DEFAULT 'MANUAL',
  `fuel` enum('ELECTRIC','DIESEL','ESSENCE','HYBRID') DEFAULT 'ESSENCE',
  `number_seat` int NOT NULL,
  `number_door` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'MODEL, ';

// Create extra
$pdo->exec("CREATE TABLE `extra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `daily_price` float DEFAULT '0',
  `image` varchar(255) DEFAULT 'placeholder.png',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'EXTRA, ';

// Create vehicle
$pdo->exec("CREATE TABLE `vehicle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_id` int NOT NULL,
  `model_id` int NOT NULL,
  `category_id` int NOT NULL,
  `required_age` int NOT NULL,
  `daily_price` float NOT NULL,
  `image` varchar(255) DEFAULT '150.png',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vehicle_brand` (`brand_id`),
  KEY `fk_vehicle_category` (`category_id`),
  KEY `fk_vehicle_model` (`model_id`),
  CONSTRAINT `fk_vehicle_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  CONSTRAINT `fk_vehicle_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `fk_vehicle_model` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'VEHICLE, ';

// Create order
$pdo->exec("CREATE TABLE `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_location` date NOT NULL,
  `end_location` date NOT NULL,
  `price` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime NULL,
  `user_id` int NOT NULL,
  `vehicle_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_user` (`user_id`),
  KEY `fk_order_vehicle` (`vehicle_id`),
  CONSTRAINT `fk_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_order_vehicle` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'ORDER, ';

// Create order_extra
$pdo->exec("CREATE TABLE `order_extra` (
  `orders_id` int NOT NULL,
  `extra_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`orders_id`,`extra_id`),
  KEY `fk_orders_has_extra_extra1_idx` (`extra_id`),
  KEY `fk_orders_has_extra_orders1_idx` (`orders_id`),
  CONSTRAINT `fk_orders_has_extra_extra1` FOREIGN KEY (`extra_id`) REFERENCES `extra` (`id`),
  CONSTRAINT `fk_orders_has_extra_orders1` FOREIGN KEY (`orders_id`) REFERENCES `order` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

echo 'ORDER_EXTRA, ';
