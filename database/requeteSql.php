<?php
include '../database/db_connection.php';

/**
 * Récupère les données d'un CV en fonction de son ID
 * 
 * @param PDO $pdo L'objet PDO représentant la connexion à la base de données.
 * @param int $cv_id L'ID du CV à récupérer.
 * 
 * @return array|false Un tableau associatif contenant les données du CV ou false en cas d'échec.
 */
function getCvById($pdo, $cv_id) {
    $query = "SELECT * FROM cv WHERE id = :cv_id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cv_id', $cv_id);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

/**
 * Récupère les expériences professionnelles associées à un CV en fonction de son ID.
 *
 * @param PDO $pdo L'objet PDO représentant la connexion à la base de données.
 * @param int $cv_id L'ID du CV pour lequel récupérer les expériences professionnelles.
 *
 * @return array Un tableau associatif contenant les expériences professionnelles du CV.
 */
function getExperiencesProByCvId($pdo, $cv_id) {
    $query = "SELECT * FROM experience_pro WHERE cv_id = :cv_id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cv_id', $cv_id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Récupère les formations associées à un CV en fonction de son ID.
 *
 * @param PDO $pdo L'objet PDO représentant la connexion à la base de données.
 * @param int $cv_id L'ID du CV pour lequel récupérer les formations.
 *
 * @return array Un tableau associatif contenant les formations du CV.
 */
function getFormationByCvId($pdo, $cv_id) {
    $query = "SELECT * FROM formation WHERE cv_id = :cv_id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cv_id', $cv_id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Récupère les compétences associées à un CV en fonction de son ID.
 *
 * @param PDO $pdo L'objet PDO représentant la connexion à la base de données.
 * @param int $cv_id L'ID du CV pour lequel récupérer les compétences.
 *
 * @return array Un tableau associatif contenant les compétences du CV.
 */
function getCompenteceByCvId($pdo, $cv_id) {
    $query = "SELECT * FROM competences WHERE cv_id = :cv_id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':cv_id', $cv_id);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}