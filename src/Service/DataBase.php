<?php

namespace App\Service;

use App\Core\Db;
use App\Model\UserModel;

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
    $stmt = $db->prepare("SELECT MIN(daily_price) as min_daily_price FROM extra");
    $stmt->execute();
    return $stmt->fetch()->min_daily_price;
  }

  public static function getMaxDaily_Price()
  {
    $db = Db::getInstance();
    $stmt = $db->prepare("SELECT MAX(daily_price) as max_daily_price FROM extra");
    $stmt->execute();
    return $stmt->fetch()->max_daily_price;
  }
}
