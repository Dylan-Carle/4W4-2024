<?php 


/**
 * Gabarit pour les cartes de destination
 */

?>


<div class="carte">
    <h4><?php the_title(); ?></h4>
    <!-- get_the_title(); == retourne le nom du titre en chaine -->
    <!-- the_title(); == fait un echo du titre -->
    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
    <p><a href="<?php echo get_permalink(); ?>"> La suite </a></p>
    <?php the_category(); ?>
</div>