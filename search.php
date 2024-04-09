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
                        <h4><?php the_title(); ?></h4>
                        <!-- get_the_title(); == retourne le nom du titre en chaine -->
                        <!-- the_title(); == fait un echo du titre -->
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                        <p><a href="<?php echo get_permalink(); ?>"> La suite </a></p>
                        <?php the_category(); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if(!have_posts()): ?>
                    <p>Aucun résultat pour votre recherche.</p>
                <?php endif; ?>
            </div>
        </section>
    </div>
    <?php get_footer(); ?>
</body>
</html>