<?php
const DB_HOST = 'localhost';
const DB_NAME = 'donkey_car_db';
const DB_USER = 'root';
const DB_PSWD = '';

$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES      => false
];

try{
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PSWD, $options);
    echo 'Database connexion established - ';
} catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
}