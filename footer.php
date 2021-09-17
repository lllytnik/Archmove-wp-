<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
            <?php wp_nav_menu( [
                'theme_location'  => 'botoom_menu',
                'container'       => null,
                'menu_class'      => 'nav__list',
                'menu_id'      => 'nav',
            ] ); ?>
                <!-- <nav class="footer__nav nav">

                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link" href="#">Design Gallery</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">List of Architect</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">Articles</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">Articles</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">Privacy Policy</a></li>
                    </ul>

                </nav> -->
                <div class="footer__logo logo">
                    <a class="logo__link" href="#">
                        <img class="logo__img" src="<?php echo IMG_DIR;?>/logo/logo.svg" alt="logo">
                    </a>
                </div>
            </div>

        </div>

    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="./assets/libs/jquery.magnific-popup.js"></script>
    <script src="./assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>

</html>