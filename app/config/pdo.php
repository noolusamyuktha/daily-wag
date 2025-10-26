<?php
$host_name= 'db';
$db_name = 'dailyway_db';
$user = 'dailyway_user';
$pass = 'dailyway_pass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host_name; dbname=$db_name; charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
