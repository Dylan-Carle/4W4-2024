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
                    //strpos 
                        $ma_categorie = "carte";
                        if(in_category("galerie")){
                            $ma_categorie = "galerie";
                        }
                        get_template_part("gabarit/categorie", $ma_categorie);
                    ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>

    <div id="galerie" class="global diagonale">
        <section class="galerie__section">
            <h2>galerie</h2>
            <?php echo do_shortcode('[em_destination]'); ?>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Les Destinations par categorie</h2>
            <div class="cours__section">
                <?php get_template_part("gabarit/categorie"); ?>
            </div>
        </section>
        <?php //get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>