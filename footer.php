<div id="footer" class="global">
        <footer class="footer__section">
            <div class="div_footer">
                <h3>Rien trouvé ?</h3>
                <?php get_search_form(); ?>
                <?php get_template_part("gabarit/gabarit-sociaux") ?>
            </div>
            <div class="div_footer">
                <h3>Liens intéressants</h3>
                <?php wp_nav_menu(array("menu"=>"footer")); ?>
            </div>
            <div class="div_footer">
                <h3>En savoir plus...</h3>
                <div class="lesBoutons">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><button class="youtube" type="button">Cliquer sur moi.</button></a>
                    <a href="https://github.com/Dylan-Carle" target="_blank"><button class="github" type="button">Mon GitHub</button></a>
                </div>
            </div>
            <!-- <blockquote>
                <p>"Time heals what reason cannot"</p>
                <footer>-Seneca the Younger</footer>
            </blockquote> -->
        </footer>
        <p>@Dylan Carle - TIM Maisonneuve 2024</p>
    </div>
    
    <?php wp_footer(); ?>