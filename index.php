<?php
    require('includes/envoyer_email.php');
    include('includes/header.php');

    $miniSites = [
        ['nom' => 'Mini-Site 1', 'description' => 'Description du mini-site 1', 'lien' => 'lien_vers_mini_site_1', 'image' => 'lien de l\'image'],
        ['nom' => 'Mini-Site 2', 'description' => 'Description du mini-site 2', 'lien' => 'lien_vers_mini_site_2', 'image' => 'lien de l\'image'],
    ];
    

?>
    <section class="intro">
        <p>Je m'appelle Clément et je suis passionné par la création de sites web. Sur ce site, vous trouverez mon CV ainsi que plusieurs projets sur lesquels j'ai travaillé ou sur lesquels je travaille actuellement. J'aime utiliser diverses technologies pour diversifier mes compétences.</p>
    </section>

    <section>
        <ul>
            <?php foreach ($miniSites as $miniSite) : ?>
                <li alt="<?php echo $miniSite['image'] ?>">
                    <a href="<?php echo $miniSite['lien']; ?>">
                        <h2><?php echo $miniSite['nom']; ?></h2>
                    </a>
                    <p><?php echo $miniSite['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

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

