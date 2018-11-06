<?php get_header(); ?>


<div class="menu-container">
    <div class="container">
		<?php wp_nav_menu( array(
			'theme_location' => '',
			'menu'           => '',
			'container'      => false,
			'container_id'   => '',
			'menu_class'     => 'row',
			'menu_id'        => '',
			'echo'           => true,
			'fallback_cb'    => 'wp_page_menu',
			'after'          => '<span>|</span>',
			'link_before'    => '',
			'link_after'     => '',
			'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
			'depth'          => 0,
			'walker'         => '',
		) ); ?>
    </div>
</div>

<div class="slider-container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://lorempixel.com/400/150" alt="Первый слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://lorempixel.com/400/100" alt="Второй слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://lorempixel.com/400/100" alt="Третий слайд">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<section class="container">

    <h2 class="header-text text-center">КОМПАНИЯ НА РЫНКЕ УЖЕ БОЛЕЕ 15 ЛЕТ</h2>

    <h3 class="text-center page-header-text">НАШИ ПРЕИМУЩЕСТВА</h3>
    <div class="d-flex align-items-end justify-content-end mt-lg-5 container-text">
        <div class="col-md-3 text-center">
            <img class="mb-2" src="<?php echo get_template_directory_uri(); ?>/img/top.png">
            <br/>
            <span>точно выведем в ТОП</span>
        </div>
        <div class="col-md-3 text-center">
            <img class="mb-2 mt-3" src="<?php echo get_template_directory_uri(); ?>/img/experience.png">
            <br/>
            <span>опыт и компетенция</span>
        </div>
        <div class="col-md-3 text-center">
            <img class="mb-md-4" src="<?php echo get_template_directory_uri(); ?>/img/good_price.png">
            <br/>
            <span>хорошие цены</span>
        </div>
        <div class="col-md-3 text-center">
            <img class="mb-1" src="<?php echo get_template_directory_uri(); ?>/img/reliability.png">
            <br/>
            <span>надежность</span>
        </div>
    </div>

    <div class="row d-flex align-items-baseline container-text mt-5">
        <div class="col-md-4 text-center">
            <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/anyone_form_paid.png">
            <br/>
            <span>любые формы оплаты</span>
        </div>
        <div class="col-md-4 text-center">
            <img class="mb-3 mt-3" src="<?php echo get_template_directory_uri(); ?>/img/reporting.png">
            <br/>
            <span>отчетность</span>
        </div>
        <div class="col-md-4 text-center">
            <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/goodwill.png">
            <br/>
            <span>доброжелательность</span>
        </div>
    </div>

</section>

<section class="container section-develop">
    <div class="d-flex justify-content-between">
        <div class="background-block-develop">
            <div class="col-md-6 p-0 site">
                <span>разработка сайтов и сервисов</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/develop_site.png">
        </div>
        <div class="background-block-develop">
            <div class="col-md-3 p-0 site">
                <span>реклама в интернете</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/adv_internet.png">
        </div>
    </div>
    <div class="d-flex justify-content-between mt-4">
        <div class="d-flex flex-column">
            <div class="background-block-audit">
                <div class="col-md-6 p-0 site">
                    <span>аудиты сайта</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/audit.png">
            </div>
            <div class="background-block-seo">
                <div class="col-md-3 p-0 site">
                    <span>продвижение сайта</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/seo.png">
            </div>
        </div>
        <div class="background-block-support">
            <div class="col-md-6 p-0 site">
                <span>техническая поддержка</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support.png">
        </div>
        <div class="background-block-adv">
            <div class="col-md-3 p-0 site">
                <span>контекстная реклама</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/adv_context.png">
        </div>
    </div>
</section>

<section>
    <h3 class="text-center page-header-text">НАШИ УСЛУГИ</h3>

    <div class="d-flex w-100 container-service">

    </div>
</section>


<?php get_footer(); ?>
