<?php

const DB_HOST = 'localhost';
const DB_NAME = 'convite';
const DB_USER = 'root';
const DB_PASSWORD = 'root';


try {
    $pdo = new \PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST.";", DB_USER, DB_PASSWORD,
[
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
} catch (PDOException $exception) {
    echo 'Deu um Erro: '.$exception->getMessage();
    exit;
}

$array = [
    'error' => '',
    'result' => []
];