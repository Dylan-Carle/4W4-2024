<?php 
    //Modele de base index.php

    get_header();
?>
    <div id="acceuil" class="global erreur">
        <div class="introuvable">
            <section class="acceuil__section">
                <h2>Erreur 404</h2>
                <p>Malheureusement, la destination que vous chercher n'existe pas.</p>
                <p>Vous pouvez retourner à la page d'acceuil en cliquant sur le lien ci-dessous.</p>
                <div class="entete__button"><a href="<?php echo get_bloginfo("url")?>">Page d'acceuil</a></div>
            </section>
            <img src="http://localhost/4w4/wp-content/uploads/2024/04/404.jpg" alt=":(">
        </div>
        <div class="recherche_introuvable">
            <?php get_search_form(); ?>
        </div>
        <div class="lesCats">
                <?php foreach(get_categories() as $categorie): ?>
                    <h5><a href="<?php echo get_category_link($categorie->term_id); ?>"> <?php echo $categorie->name; ?> </a></h5>
                <?php endforeach; ?>
            </div>
    </div>
<?php 
    get_footer();
?>
</body>
</html>