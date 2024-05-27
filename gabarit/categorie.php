
<!-- Gabarit pour les cartes des categories -->
<?php foreach(get_categories() as $categorie): ?>
    <?php if($categorie->name != "Galerie") : ?>
        <div class="carte categorie">
            <h4><?php echo $categorie->name; ?></h4>
            <p><?php echo wp_trim_words($categorie->description, 10); ?></p>
            <p><?php echo $categorie->count; ?> destinations offertes.</p>
            <p><a href="<?php echo get_category_link($categorie->term_id); ?>"> Voir les destination </a></p>
        </div>
    <?php endif ?>
<?php endforeach; ?>