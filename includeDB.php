<?php 

try {
    // On se connecte à MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=zoo;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());}

