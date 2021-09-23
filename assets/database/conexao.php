<?php

try{
    $pdo = new PDO('pgsql:host=localhost; port=5432; dbname=bancophp;', 'postgres', '123456', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}catch(PDOException $e){
    die($e->getMessage());
}