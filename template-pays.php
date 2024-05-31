<?php
/**
 * Template name: Pays
 *
 */
?>
<?php get_header(); ?>
<main class="pays__main">
    <div class="intro_pays">
        <?php
        if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content();?>  
        <?php endif;?>
        <?php get_template_part("gabarit/vague") ?>
    </div>
    <div>
        <?php echo do_shortcode('[pays]'); ?>
        <?php get_template_part("gabarit/vague") ?>
    </div>
</main>
<?php
get_footer();