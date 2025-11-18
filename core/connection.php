<?php

try {
    $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
} catch (PDOException $e) {
    echo $e->getMessage();
    $conn = null; // Set to null on failure
}


// alias pour compatibilité avec anciens contrôleurs
$connexion = $conn;
