<?php
    require('includes/envoyer_email.php');
    include('includes/header.php');

    $miniSites = [
        ['nom' => 'Fate/', 'description' => 'Je vous présente ici l\'univers de Fate, un univers que j\'afféctionne particulièrement', 'lien' => '', 'image' => 'images/fate.png'],
        ['nom' => 'Genshin Impact', 'description' => 'Voici l\'univers de Genshin Impact', 'lien' => 'lien_vers_mini_site_2', 'image' => 'images/genshin.jpg'],
        ['nom' => 'Nier Automata', 'description' => 'Nier Automata, un jeu de Square Enix', 'lien' => '', 'image' => 'images/nier.png'],
    ];
    

?>
    <section class="intro">
        <p>Je m'appelle Clément et je suis passionné par la création de sites web. Sur ce site, vous trouverez mon CV ainsi que plusieurs projets sur lesquels j'ai travaillé ou sur lesquels je travaille actuellement. J'aime utiliser diverses technologies pour diversifier mes compétences.</p>
    </section>

    <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
        <?php foreach ($miniSites as $key => $miniSite) : ?>
            <div class="carousel-item <?= ($key === 0) ? 'active' : ''; ?>">
                <a href="<?= $miniSite['lien']; ?>" target="_blank"><img src="<?= $miniSite['image']; ?>" class="d-block w-100" alt="<?= $miniSite['nom']; ?>">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $miniSite['nom']; ?></h5>
                    <p><?= $miniSite['description']; ?></p>
                </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <section class="contact">
        <h2>Contactez-moi</h2>
        <p>N'hésitez pas à me contacter en utilisant le formulaire ci-dessous. Votre message sera directement envoyé à mon adresse e-mail.</p>
        <form action="includes/envoyer_email.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>

    </section>
<?php
    include('includes/footer.php');
?>

