<?php

namespace App\Service;

use App\Core\Db;
use App\Model\UserModel;
use PDO;

class DataBase
{
  public static function createUser(string $firstName, $lastName, $email, $password, $phone, $birthDate)
  {
  }
  
  public static function is_already_use($field, $value, $table)
  {
    $db = Db::getInstance();

    $stmt = $db->prepare("SELECT id FROM $table WHERE $field = :value");
    $stmt->bindValue(':value', $value, \PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    $stmt->closeCursor();
    return $count;
  }

  public static function getMinDaily_Price()
  {
    $db = Db::getInstance();
    $stmt = $db->prepare("SELECT MIN(daily_price) as min_daily_price FROM vehicle");
    $stmt->execute();
    return $stmt->fetch()->min_daily_price;
  }

  public static function getMaxDaily_Price()
  {
    $db = Db::getInstance();
    $stmt = $db->prepare("SELECT MAX(daily_price) as max_daily_price FROM vehicle");
    $stmt->execute();
    return $stmt->fetch()->max_daily_price;
  }

  public static function searchVehicle(array $categoryList, float $dailyPrice, int $brand_id, int $model_id)
  {
    $db = Db::getInstance();
    $sql = "
    SELECT v.id, v.year_driver_license_needed, v.daily_price, v.image,v.created_at, v.is_available, b.name AS marque,m.name AS model,c.name AS category
    FROM vehicle AS v
    LEFT JOIN brand AS b ON v.brand_id=b.id
    LEFT JOIN model AS m ON v.model_id=m.id
    LEFT JOIN category AS c ON v.category_id=c.id
    WHERE v.is_available= 1 AND v.daily_price <= :daily_price";

    if ($brand_id != 0) {
      $sql .= " AND brand_id = :brand_id ";
    }


    if ($model_id != 0) {
      $sql .= " AND model_id = :model_id";
    }

    $stmt = $db->prepare($sql);

    $stmt->bindValue(':daily_price', $dailyPrice, PDO::PARAM_STR);
    if ($brand_id != 0) {
      $stmt->bindValue(':brand_id', $brand_id, PDO::PARAM_INT);
    }
    if ($model_id != 0) {
      $stmt->bindValue(':model_id', $model_id, PDO::PARAM_INT);
    }
    $stmt->execute();
    return $stmt->fetchAll();

  }
}
