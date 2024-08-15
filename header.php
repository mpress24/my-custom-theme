<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    
        <div class="header-content">
            <a href="<?= get_home_url(); ?>" class="logo">
                <div class="logo-image"></div>
            </a>
            <nav>
                <a href="<?= get_home_url(); ?>">Главная<div class="background"></div></a>
                <a href="">Новости<div class="background"></div></a>
                <a href="">Скины<div class="background"></div></a>
                <a href="">Медиа<div class="background"></div></a>
            </nav>
            <div class="second-menu">
                <?php wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </div>           
            <a href="" class="question">
                <div class="question-image"></div>
            </a>
        </div> 
    </header>
