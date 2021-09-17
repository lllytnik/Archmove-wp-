<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__wrapper">
            <div class="header__logo logo">
                <a class="logo__link" href="<?php bloginfo('url'); ?>">
                    <img class="logo__img" src="<?php echo IMG_DIR;?>/logo/logo.svg" alt="logo">
                </a>
            </div>
            
            <nav id="nav" class="header__nav nav">
                <?php wp_nav_menu( [
                                'theme_location'  => 'top_menu',
                                'container'       => null,
                                'menu_class'      => 'nav__list',
                                'menu_id'      => 'nav',
                            ] ); ?>

                <!-- ul class="nav__list">
                    <li class="nav__item"><a class="nav__link" href="#gallery">Design Gallery</a></li>
                    <li class="nav__item"><a class="nav__link" href="#needs">List of Architect</a></li>
                    <li class="nav__item"><a class="nav__link" href="#reviews">Articles</a></li>
                    <li class="nav__item"><a class="nav__link" href="#partners">How it Works</a></li>
                </ul> -->
            </nav>
        </div>


        <ul class="header__list">
            <li class="header__item"><img class="header__img" src="<?php echo IMG_DIR;?>/header/searh.svg" alt="search"></li>
            <li class="header__item"><button class="header__btn">Sign In</button></li>
            <li class="header__item"><button class="header__btn">Sign Up</button></li>
        </ul>
    </header>