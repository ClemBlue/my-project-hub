<?php
require('db_config.php'); // Inclure le fichier qui charge les données sensibles

try {
    // Établir la connexion à la base de données en utilisant les informations de db_config.php
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, $db_options);

    // Définir le jeu de caractères de la connexion
    $pdo->exec("SET NAMES 'utf8'");

    // Gérer les erreurs de connexion
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'échec de la connexion, afficher l'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
