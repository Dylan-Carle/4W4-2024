<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme 4w4</title>

    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/sass/style.css'; ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div id="menu" class="global">
        <header class="entete__menu">
            <!-- Permet de mettre un logo custom a l'aide du customizer -->
            <?php echo get_custom_logo(); ?> 
            <input type="checkbox" id="chk_burger">
            <label id="burger" for="chk_burger">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </label>
            <?php wp_nav_menu(array("container"=>"nav")); ?>
            <?php //get_search_form(); ?>
            <hr>
        </header>
    </div>
