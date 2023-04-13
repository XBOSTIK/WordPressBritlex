<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>
    <link rel="icon" type="image/png" 
    sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
    <?php wp_head(); ?>
</head>
<body>
    
    
    <header class="header">
        <div class="container header__wrapper">
            <div class="logo header__logo">
                <?= the_custom_logo(); ?>
            </div>

            <div class="header__wrapper-inner">
                <?php 
                    wp_nav_menu( [
                        'theme_location'  => '',
                        'menu'            => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'nav',
                        'container_id'    => '',
                        'menu_class'      => 'nav__list',
                        'menu_id'         => '',
                        'echo'            => true,
                    ] );
                ?>

                <button class="header__btn"><?= CFS()->get('header_btn_text');?></button>
                <div class="close-menu">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
        </div>
    </header>