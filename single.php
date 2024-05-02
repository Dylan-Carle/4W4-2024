<?php 
    //Modele de base index.php

    get_header();
?>
    <div id="acceuil" class="global">
        <section class="acceuil__section">
            <div class="cours__section">
            <?php 
            if(have_posts()): 
                while(have_posts()): the_post();
                //strpos();
                ?>
                <div class="carte__single">
                    <h3><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                    <p>Temperature Minimum : <?php the_field("temperature_minimum") ?></p>
                    <p>Temperature Maximum : <?php the_field("temperature_maximum") ?></p>
                    <p>Ville Avoisinante : <?php the_field("villes_avoisinantes") ?></p>
                    <p>Humidité : <?php the_field("humidite") ?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </section>
    </div>
    <!-- <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>evenement</h2>
        </section>
        <?php //get_template_part("gabarit/vague"); ?>
    </div> -->

    <?php get_footer(); ?>
</body>
</html>