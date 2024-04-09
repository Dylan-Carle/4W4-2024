<?php 
    //Modele de base index.php

    get_header();
?>
   <div id="entete" class="global clr-agencement-primaire">
        <section class="entete__header">
            <h1 class="bcg-texte"><?php echo get_bloginfo("name"); ?></h1>
            <h2 class="bcg-texte"><?php echo get_bloginfo("description"); ?></span></h2>
            <button class="entete__button">Événement</button>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="acceuil" class="global">
        <section class="acceuil__section">
            <h3>Les Destinations Populaires</h3>
            <div class="cours__section">
                <?php
                if(have_posts()): 
                    while(have_posts()): the_post();
                    //strpos();
                    ?>
                    <div class="carte">
                        <h4><?php the_title(); ?></h4>
                        <!-- get_the_title(); == retourne le nom du titre en chaine -->
                        <!-- the_title(); == fait un echo du titre -->
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p><a href="<?php echo get_permalink(); ?>"> La suite </a></p>
                        <?php the_category(); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <div id="galerie" class="global diagonale">
        <section class="galerie__section">
            <h2>galerie</h2>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Les Destinations par categorie</h2>
            <div class="cours__section">
            <?php foreach(get_categories() as $categorie): ?>
                <div class="carte categorie">
                    <h4><?php echo $categorie->name; ?></h4>
                    <p><?php echo wp_trim_words($categorie->description, 10); ?></p>
                    <p><?php echo $categorie->count; ?> destinations offertes.</p>
                    <p><a href="<?php echo get_category_link($categorie->term_id); ?>"> Voir les destination </a></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php //get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>