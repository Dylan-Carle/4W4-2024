<?php 
    //Modele de base index.php

    get_header();
?>
    <div id="acceuil" class="global">
        <section class="acceuil__section">
            <h2>Résultat de la recherche</h2>
            <div class="cours__section">
            <?php 
            if(have_posts()): 
                while(have_posts()): the_post();
                //strpos();
                ?>
                <div class="carte">
                    <?php the_post_thumbnail("medium"); ?>
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
            <h2>evenement</h2>
        </section>
        <?php //get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>