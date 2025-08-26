<?php

try {
    // Définition des constantes une seule fois
    if (!defined('DB_SERVERNAME')) {
        define('DB_SERVERNAME','127.0.0.1');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define( 'DB_DATABASE','blog');
    }
    
    $pdo = new PDO("mysql:host=" .DB_SERVERNAME . ";dbname=" .DB_DATABASE . ";charset=utf8", DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<div style='background-color:#3c763d; color:white;'>Connexion à la base de donnée réussie</div>";
    
} catch(PDOException $e) {
    echo "<div style='color:red;'>La connexion à la base de données a échoué :</div> " . $e->getMessage();
}

?>