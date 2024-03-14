<?php 
    //Modele de base index.php

    get_header();
?>
    <h1>Front-page.php</h1>
   <div id="entete" class="global">
        <section class="entete__header">
            <h1 class="bcg-texte">Theme du cours 4w4</h1>
            <h2 class="bcg-texte">4W4 - Conception d'interface <span> et développement Web</span></h2>
            <h3 class="bcg-texte">TIM - Collège Maisonneuve</h3>
            <button class="entete__button">Événement</button>
            <h5>le (a) est dans l'image</h5>
            <a href="https://github.com/Dylan-Carle" target="_blank"><img id="luffy" src="<?php echo get_template_directory_uri() . '/images/luffy.jpg'; ?>" alt="luffy"></a>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="acceuil" class="global">
        <section class="acceuil__section">
            <h2>acceuil</h2>
            <p>Bacon ipsum dolor amet corned beef pork belly prosciutto sausage turducken fatback short ribs filet mignon venison ball tip hamburger. Hamburger cow turkey cupim, fatback pork loin brisket corned beef ground round. Shoulder kevin drumstick, spare ribs ground round chicken meatloaf porchetta t-bone pig pastrami cow fatback leberkas bresaola. Flank tri-tip andouille t-bone.</p>
            <h6><a href="https://unity.com/" target="_blank">Site de Unity</a></h6>
            <div class="cours__section">
            <?php 
            if(have_posts()): 
                while(have_posts()): the_post();
                $titre = get_the_title();
                $signe = substr($titre, 0, 7);
                $tempsPos = strpos($titre, "(");
                $temps = substr($titre, $tempsPos, 6);
                $titre = substr($titre, 8);
                //strpos();
                ?>
                <div class="carte">
                    <h4><?php echo $signe ?></h5>
                    <h3><?php echo trim($titre, $temps)?></h4>
                    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                    <h6><?php echo $temps ?></h6>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </section>
    </div>

    <div id="galerie" class="global diagonale">
        <section class="galerie__section">
            <h2>galerie</h2>
            <video width="639px" height="360px" autoplay muted loop id="dvd">
                <source src="<?php echo get_template_directory_uri() . '/videos/dvd.mp4'; ?>" type="video/mp4">
            </video>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>evenement</h2>
        </section>
        <?php get_template_part("gabarit/vague"); ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>