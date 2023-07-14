<?php
$host = "localhost";
$dbname = "metpen_cuaca";
$user   = "root";
$pass   = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$hostToRoot = 'http://localhost/UNIKOM/MetodePenelitian/AplikasiCuaca/';
$title = 'MetPen | Aplikasi Cuaca';
$version = 'Beta Build 1.0';

session_start();
