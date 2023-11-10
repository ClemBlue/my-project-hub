<?php
require '../includes/header.php';
require '../database/requeteSql.php';

$cv_id = 1;
$cv_data = getCvById($pdo, $cv_id);
$formation_data = getFormationByCvId($pdo, $cv_id);
$experience_data = getExperiencesProByCvId($pdo, $cv_id);
$competence_data = getCompenteceByCvId($pdo, $cv_id);
?>

<h2>Qui suis je ?</h2>
<p>Vous trouverez ici mon CV</p>

<section class="info">
    <p><?php print($cv_data['nom'] . ' ' . $cv_data['prenom']); ?></p>
    <p>Je suis un développeur web débutant passionné par la création d'expériences visuelles sur le web, avec un intérêt marqué, mais non exclusif, pour les jeux vidéo, les bandes dessinées et les mangas.</p>
    <p><?php print($cv_data['telephone']); ?></p>
    <p><?php print($cv_data['courriel']); ?></p>
    <p><?php print($cv_data['adresse']); ?></p>
    <a href="<?= print($cv_data['github']); ?>"><p>Mon Github</p></a>
    <a href="<?= print($cv_data['linkedin']); ?>"><p>Mon Linkedin</p></a>
</section>

<section class="competences">
    <?php foreach ($competence_data as $competence) {
       print($competence['nom']); 
    }?>
</section>

<section class="formations">
    <?php foreach ($formation_data as $formation) {
       print($formation['diplome']); 
    }?>
</section>

<section class="experiences">
    <?php foreach ($experience_data as $experience) {
       print($experience['poste']); 
    }?>
</section>

<?php
require '../includes/footer.php';
?>