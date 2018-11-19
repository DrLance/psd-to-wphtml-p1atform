<?php get_header(); ?>

<article class="page margin-top-55">
    <h1 class="align-self-center page-header-text"><?php the_title(); ?></h1>
	<?php the_content(); ?>

    <div class="contacts-container container-970 margin-top-55 d-flex flex-row justify-content-between">
        <div>
            <div class="d-flex flex-column info-container">
                <p>Адрес:</p>
                <span>г.Тула, пр-т Ленина, 87/3</span>
                <span>г.Москва, ул. Ярославская, д. 8, корп. 7</span>
                <span>г. Санкт-Петербург, ул. Политехническая, д. 29<br>(м. Политехническая)</span>
            </div>
            <div class="d-flex flex-column info-container">
                <p>Телефон:</p>
                <a href="tel:74950000000"><span>+7 495 000 00 00</span></a>
            </div>
            <div class="d-flex flex-column info-container mt-5">
                <p>Email:</p>
                <a href="mailto:info@p1atform.ru"><span>info@p1atform.ru</span></a>
            </div>
        </div>
        <div class="contacts-form">
	        <?php echo do_shortcode( '[contact-form-7 id="47"]' ); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>
