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

<section class="container p-0">

    <h2 class="header-text text-center">КОМПАНИЯ НА РЫНКЕ УЖЕ БОЛЕЕ 15 ЛЕТ</h2>

    <h3 class="text-center page-header-text">НАШИ ПРЕИМУЩЕСТВА</h3>
    <div class="d-flex align-items-baseline justify-content-between container-text">
        <div class="text-center">
            <img class="mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/top.png">
            <br/>
            <span>точно выведем в ТОП</span>
        </div>
        <div class="text-center">
            <img class="mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/experience.png">
            <br/>
            <span>опыт и компетенция</span>
        </div>
        <div class="text-center">
            <img class="mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/good_price.png">
            <br/>
            <span>хорошие цены</span>
        </div>
        <div class="text-center">
            <img class="mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/reliability.png">
            <br/>
            <span>надежность</span>
        </div>
    </div>

    <div class="row d-flex align-items-baseline justify-content-around container-text mt-5">
        <div class="text-center">
            <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/anyone_form_paid.png">
            <br/>
            <span>любые формы оплаты</span>
        </div>
        <div class="text-center">
            <img class="mb-3 mt-3" src="<?php echo get_template_directory_uri(); ?>/img/reporting.png">
            <br/>
            <span>отчетность</span>
        </div>
        <div class="text-center">
            <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/goodwill.png">
            <br/>
            <span>доброжелательность</span>
        </div>
    </div>

</section>

<section class="container section-develop p-0">
    <div class="d-flex benefits-container">
        <div class="develop">
            <div class="col-md-6 p-0 site">
                <span>разработка сайтов и сервисов</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/develop_site.png">
        </div>
        <div class="context-adv">
            <div class="col-md-3 p-0 site">
                <span>реклама в интернете</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/adv_internet.png">
        </div>
    </div>
    <div class="d-flex mt-4 benefits-container">
        <div class="d-flex flex-column ">
            <div class="audit">
                <div class="col-md-4 p-0 site">
                    <span>аудиты сайта</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/audit.png">
            </div>
            <div class="seo">
                <div class="col-md-3 p-0 site">
                    <span>продвижение сайта</span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/seo.png">
            </div>
        </div>
        <div class="support">
            <div class="col-md-6 p-0 site">
                <span>техническая поддержка</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support.png">
        </div>
        <div class="adv">
            <div class="col-md-3 p-0 site">
                <span>контекстная реклама</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/adv_context.png">
        </div>
    </div>
</section>

<section>
    <h3 class="text-center page-header-text">НАШИ УСЛУГИ</h3>

    <div class="d-flex w-100 container-service flex-column">
        <div class="container p-0">
            <div class="d-flex">
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/develop_site_service.png">
                    <h4>создание сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Проекты любой сложности</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Интеграция стороних сервисов</a>
                    </div>
                    <div class="w-75 mb-auto w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Современная система управления</a>
                    </div>

                    <div class="align-self-end footer-service d-flex align-items-center justify-content-center">
                        <span>От 50 000 руб.</span>
                    </div>

                </div>
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/seo_service.png">
                    <h4>продвижение сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Различные схемы продвижения</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Комплексный подход к проекту</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Оптимальные сроки достижения результата</a>
                    </div>
                    <div class="w-75 mb-auto  w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Прозрачность всех работ</a>
                    </div>


                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 15 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center mr-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/seo_social_service.png">
                    <h4>продвижение в соцсетях</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Охват всех популярных сетей</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Поддержка внимания к бренду</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Улучшения лояльности клиентов</a>
                    </div>
                    <div class="w-75 w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Привлечения трафика на сайт</a>
                    </div>


                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 15 000 руб.</span>
                    </div>

                </div>

            </div>
            <div class="d-flex">
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/adv_internet_service.png">
                    <h4>реклама в интернете</h4>

                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Яндекс.Директ</a>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Google Adwords</a>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Яндекс.Маркет</a>
                    </div>
                    <div class="w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Медийная (банерная) реклама</a>
                    </div>

                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 5 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/firm_style_service.png">
                    <h4>фирменный стиль</h4>

                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Логотип</a>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Фирменный бланк</a>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Конверт</a>
                    </div>

                    <div class="w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Визитка</a>
                    </div>

                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 10 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center mr-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support_site_service.png">
                    <h4>поддержка сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Хостинг</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Системной администрирование</a>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Контент-менеджмент</a>
                    </div>
                    <div class="w-75 w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <a href="#">Копирайтинг</a>
                    </div>
                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 2 000 руб.</span>
                    </div>
                </div>

            </div>
        </div>
        <button class="align-self-end align-self-center button mt-auto mb-auto">оставить заявку</button>
    </div>
</section>
<section class="d-flex flex-column cases-container">

    <h3 class="align-self-center page-header-text">КЕЙСЫ</h3>


</section>


<?php get_footer(); ?>
