<?php get_header(); ?>
    <section class="main">
        <div class="container">
            <h1 class="main__title"><?php the_field('main__title'); ?><span class="main__title-active"><?php the_field('main__title-active'); ?></span></h1>
            <div class="main__inner">
                <div class="main__wrapper">
                    <p class="main__text">
                    <?php the_field('main__text'); ?>
                    </p>
                    <button class="main__btn">Free Consultation</button>
                </div>
                <img class="main__img" src="<?php the_field('main__img'); ?>" alt="photo">
            </div>
        </div>
    </section>
    <section  id="gallery" class="gallery">
        <div class="container">
            <h2 class="gallery__title">Build professional valuable room for you</h2>
            <div class="popup-gallery">
                <a href="<?php echo IMG_DIR;?>/gallery/img-1.png" title="The Cleaner">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-1.png" alt=""></a>
                <a href="<?php echo IMG_DIR;?>/gallery/img-2.png" title="Winter Dance">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-2.png" alt=""></a>
                <a href="<?php echo IMG_DIR;?>/gallery/img-3.png" title="The Uninvited Guest">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-3.png" alt=""></a>
                <a href="<?php echo IMG_DIR;?>/gallery/img-4.png" title="Oh no, not again!">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-4.png" alt=""></a>
                <a href="<?php echo IMG_DIR;?>/gallery/img-5.png" title="Swan Lake">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-5.png" alt=""></a>
                <a href="<?php echo IMG_DIR;?>/gallery/img-6.png" title="The Shake">
                    <img class="gallery__img" src="<?php echo IMG_DIR;?>/gallery/img-6.png" alt=""></a>
            </div>
        </div>
    </section>

    <section id="needs" class="needs">
        <div class="container">
            <h2 class="needs__title">Build your needs with Archmove</h2>
            <div class="needs__inner">
                <img class="needs__img" src="<?php echo IMG_DIR;?>/needs/img.png" alt="">
                <div class="needs__wrapper">

                    <?php foreach(getFeatures() as $feature): ?>

                    <div class="needs__feature feature">
                        <img class="feature__img" src="<?php echo $feature['img']?>" alt="">
                        <div class="feature__wrapper">
                            <h3 class="feature__title"><?php echo $feature['title']?></h3>
                            <p class="feature__text"><?php echo $feature['text']?></p>
                            <i><?php echo $feature['add_description']?></i>
                        </div>
                    </div>

                    <?php endforeach; ?>

                    <button class="needs__btn">CONSULTATION</button>
                </div>
            </div>
        </div>
    </section>
    <div id="reviews" class="reviews">
        <div class="container">
            <h2 class="reviews__title">Sound Too Good To Be True?</h2>
            <div class="reviews__block">
                <div class="swiper swiper-container mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <p class="reviews__text">We just wanted to thank you for this fantastic website! We are so
                                grateful for being able to advertise our Petite cabin and receive feedback from people
                                from
                                all over the U.S. and even further.</p>
                            <div class="reviews__wrap">
                                <p class="reviews__author"><span class="reviews__author-profil">Adam Morph</span> — CEO
                                    A
                                    lfatech</p>
                                <div class="reviews__btn-wrapper">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p class="reviews__text">We just wanted to thank you for this fantastic website! We are so
                                grateful for being able to advertise our Petite cabin and receive feedback from people
                                from
                                all over the U.S. and even further.</p>
                            <div class="reviews__wrap">
                                <p class="reviews__author"><span class="reviews__author-profil">Adam Morph</span> — CEO
                                    A
                                    lfatech</p>
                                <div class="reviews__btn-wrapper">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p class="reviews__text">We just wanted to thank you for this fantastic website! We are so
                                grateful for being able to advertise our Petite cabin and receive feedback from people
                                from
                                all over the U.S. and even further.</p>
                            <div class="reviews__wrap">
                                <p class="reviews__author"><span class="reviews__author-profil">Adam Morph</span> — CEO
                                    A
                                    lfatech</p>
                                <div class="reviews__btn-wrapper">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <section id="realization" class="realization">
        <div class="container">
            <div class="realization__inner">
                <img class="realization__img" src="<?php echo IMG_DIR;?>/realization/img.png" alt="">
                <div class="realization__wrapper">
                    <h2 class="realization__title">Realize your dream project with <span
                            class="realization__title-active">Archmove</span></h2>
                    <button class="realization__btn">FREE CONSULTATION</button>
                </div>
            </div>

        </div>
    </section>
    <section id="partners" class="partners">
        <div class="container">
            <h2 class="partners__title">Our Partners</h2>
            <ul class="partners__list">
                <li class="partners__item"><img class="partners__img" src="<?php echo IMG_DIR;?>/partners/logo-1.png"
                        alt="partners">
                </li>
                <li class="partners__item"><img class="partners__img" src="<?php echo IMG_DIR;?>/partners/logo-2.png"
                        alt="partners">
                </li>
                <li class="partners__item"><img class="partners__img" src="<?php echo IMG_DIR;?>/partners/logo-3.png"
                        alt="partners">
                </li>
                <li class="partners__item"><img class="partners__img" src="<?php echo IMG_DIR;?>/partners/logo-4.png"
                        alt="partners">
                </li>
                <li class="partners__item"><img class="partners__img" src="<?php echo IMG_DIR;?>/partners/logo-5.png"
                        alt="partners">
                </li>
            </ul>
        </div>
    </section>
    <?php get_footer(); ?>