<?php 
    //Modele de base index.php

    get_header();
?>
    <h2>single.php</h2>
    <div id="acceuil" class="global">
        <section class="acceuil__section">
            <h2>acceuil</h2>
            <p>Bacon ipsum dolor amet corned beef pork belly prosciutto sausage turducken fatback short ribs filet mignon venison ball tip hamburger. Hamburger cow turkey cupim, fatback pork loin brisket corned beef ground round. Shoulder kevin drumstick, spare ribs ground round chicken meatloaf porchetta t-bone pig pastrami cow fatback leberkas bresaola. Flank tri-tip andouille t-bone.</p>
            <h6><a href="https://unity.com/" target="_blank">Site de Unity</a></h6>
            <div class="cours__section">
            <?php 
            if(have_posts()): 
                while(have_posts()): the_post();
                //strpos();
                ?>
                <div class="carte">
                    <h3><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
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