<?php
namespace App\Core;

use Exception;
use PDO;
use PDOException;
require_once dirname(__DIR__). '/../src/Core/_connect.php';

class Db extends PDO 
{
    //Instance unique de la classe
    private static $instance;
    
    private function __construct()
    {
        $_dsn = 'mysql:dbname=' . DB_NAME .';host=' . DB_HOST;

        try {
            parent::__construct($_dsn, DB_USER, DB_PSWD);
            
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
 
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}