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

    public function getVehicle($category,$brand, $model,$dateDebut,$dateFin)
    {
        $db = Db::getInstance();

        $stmt = $db->prepare("SELECT * FROM vehicle");
   //     $stmt->bindValue(':value', $value, \PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $stmt->closeCursor();
        return $count;
        
        /*
        [] => 1
    [brand] => 1
    [model] => 1
    [dateDebut] => 2021-11-08
    [dateFin] => 2021-11-20
    */
    }
}
