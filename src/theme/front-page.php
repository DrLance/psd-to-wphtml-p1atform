<?php get_header(); ?>

<?php
$rows  = get_field( 'slider' );
$index = 0;
?>
<section >
    <div class="slider-container">
        <div id="carouselFrontPage" class="carousel slide" data-ride="carousel">
			<?php if ( rows ) : ?>
                <ol class="carousel-indicators">
					<?php foreach ( $rows as $row ) : ?>
                        <li data-target="#carouselFrontPage" data-slide-to="<?php echo $index; ?>"
                            class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
						<?php $index ++; endforeach;
					$index = 0; ?>
                </ol>
			<?php endif; ?>
            <div class="carousel-inner">
				<?php foreach ( $rows as $row ) : ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">

                        <div class="img-fluid" style="
                                background: url(<?php echo wp_get_attachment_image_src( $row['background'], 'full' )[0]; ?>);
                                background-size: contain;
                                background-repeat: no-repeat;
                                height: 388px;
                                background-position: center;
                                ">
                            <div class="container h-100 d-flex align-items-end flex-column justify-content-between">
                                <div style="margin-top: 45px; float: right;">
                                    <h5><?php echo $row['header']; ?></h5>
                                    <p><?php echo $row['subheader']; ?></p>
                                </div>

                                <div class="align-self-center pl-5 ml-5 mb-5">
                                    <span><?php echo $row['description']; ?>    </span>
                                </div>
                            </div>

                        </div>
                    </div>
					<?php $index ++; endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselFrontPage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFrontPage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="container p-0" >

    <h2 class="header-text text-center">КОМПАНИЯ НА РЫНКЕ УЖЕ БОЛЕЕ 15 ЛЕТ</h2>

    <h3 class="text-center page-header-text margin-top-section">НАШИ ПРЕИМУЩЕСТВА</h3>
    <div class="d-flex align-items-baseline justify-content-between container-text flex-wrap">
        <div class="text-center">
            <img class="img-fluid mb-auto p-md-2" src="<?php echo get_template_directory_uri(); ?>/img/top.png">
            <br/>
            <span>точно выведем в ТОП</span>
        </div>
        <div class="text-center">
            <img class="img-fluid mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/experience.png">
            <br/>
            <span>опыт и компетенция</span>
        </div>
        <div class="text-center">
            <img class="img-fluid mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/good_price.png">
            <br/>
            <span>хорошие цены</span>
        </div>
        <div class="text-center">
            <img class="img-fluid mb-auto p-2" src="<?php echo get_template_directory_uri(); ?>/img/reliability.png">
            <br/>
            <span>надежность</span>
        </div>
    </div>

    <div class="d-flex align-items-baseline justify-content-around container-text mt-md-5">
        <div class="text-center">
            <img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/img/anyone_form_paid.png">
            <br/>
            <span>любые формы оплаты</span>
        </div>
        <div class="text-center">
            <img class="img-fluid mb-3 mt-3" src="<?php echo get_template_directory_uri(); ?>/img/reporting.png">
            <br/>
            <span>отчетность</span>
        </div>
        <div class="text-center">
            <img class="img-fluid mb-3" src="<?php echo get_template_directory_uri(); ?>/img/goodwill.png">
            <br/>
            <span>доброжелательность</span>
        </div>
    </div>

</section>

<section class="container section-develop p-0">
    <div class="d-flex benefits-container flex-wrap">
        <div class="develop">
            <div class="col-md-6 p-0 site">
                <span>разработка сайтов и сервисов</span>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/develop_site.png">
        </div>
        <div class="context-adv">
            <div class="col-md-3 p-0 site">
                <span>реклама в интернете</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/adv_internet.png">
        </div>
    </div>
    <div class="d-flex mt-4 benefits-container flex-wrap flex-md-nowrap">
        <div class="d-flex flex-column flex-wrap ">
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

<section class="margin-top-section">
    <h3 class="text-center page-header-text">НАШИ УСЛУГИ</h3>

    <div class="d-flex w-100 container-service flex-column flex-wrap">
        <div class="container p-0">
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/develop_site_service.png">
                    <h4>создание сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Проекты любой сложности</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Интеграция стороних сервисов</span>
                    </div>
                    <div class="w-75 mb-auto w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Современная система управления</span>
                    </div>

                    <div class="align-self-end footer-service d-flex align-items-center justify-content-center">
                        <span>От 50 000 руб.</span>
                    </div>

                </div>
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/seo_service.png">
                    <h4>продвижение сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Различные схемы продвижения</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Комплексный подход к проекту</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Оптимальные сроки достижения результата</span>
                    </div>
                    <div class="w-75 mb-auto  w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Прозрачность всех работ</span>
                    </div>


                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 15 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center mr-md-0">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/seo_social_service.png">
                    <h4>продвижение в соцсетях</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Охват всех популярных сетей</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Поддержка внимания к бренду</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Улучшения лояльности клиентов</span>
                    </div>
                    <div class="w-75 w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Привлечения трафика на сайт</span>
                    </div>


                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 15 000 руб.</span>
                    </div>

                </div>

            </div>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/adv_internet_service.png">
                    <h4>реклама в интернете</h4>

                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Яндекс.Директ</span>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Google Adwords</span>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Яндекс.Маркет</span>
                    </div>
                    <div class="w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Медийная (банерная) реклама</span>
                    </div>

                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 5 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/firm_style_service.png">
                    <h4>фирменный стиль</h4>

                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Логотип</span>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Фирменный бланк</span>
                    </div>
                    <div class="w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Конверт</span>
                    </div>

                    <div class="w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Визитка</span>
                    </div>

                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 10 000 руб.</span>
                    </div>
                </div>
                <div class="ourservice-container d-flex flex-column align-items-center mr-md-0">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/support_site_service.png">
                    <h4>поддержка сайтов</h4>

                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Хостинг</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Системной администрирование</span>
                    </div>
                    <div class="w-75 w-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Контент-менеджмент</span>
                    </div>
                    <div class="w-75 w-block mb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png">
                        <span>Копирайтинг</span>
                    </div>
                    <div class="footer-service d-flex align-items-center justify-content-center">
                        <span>От 2 000 руб.</span>
                    </div>
                </div>

            </div>
        </div>
        <button class="align-self-end align-self-center button">оставить заявку</button>
    </div>
</section>

<?php get_template_part( 'partials/content', 'cases' ); ?>

<section class="contact-form-contaier margin-top-section">

    <div class="container p-0">
        <div class="row pt-md-5">
            <div class="col-md-5">
                <h4>
                    заполните форму, и мы свяжемся с вами в течении часа
                </h4>
            </div>
            <div class="offset-1 col-md-6">
				<?php echo do_shortcode( '[contact-form-7 id="15" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </div>

</section>

<?php $reviews = get_posts(array('post_type' => 'reviews', 'numberposts' => -1)); $index = 0; ?>

<section class="margin-top-section container-reviews">
    <div class="container shadow-reviews">
        <h3 class="align-self-center page-header-text mt-md-3 mb-md-5">отзывы</h3>
        <div id="carouselReviewsPage" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row">
                <?php foreach ($reviews as $review) : ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="row">
                        <div class="col-md-5 text-center">
                            <img src="<?php echo get_the_post_thumbnail_url( $review, 'full' ); ?>" alt="">
                        </div>
                        <div class="col-md-7">
                            <h5><?php echo $review->post_title; ?></h5>
                            <span><?php echo $review->post_excerpt; ?></span>
                            <p><?php echo $review->post_content; ?></p>
                        </div>
                    </div>
                </div>
                <?php $index++; endforeach; $index = 0; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselReviewsPage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselReviewsPage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<?php get_template_part( 'partials/content', 'clients' ); ?>

<section class="margin-top-section" style="margin-bottom: 49px">
    <h3 class="align-self-center page-header-text mt-md-3 mb-md-5">наши представительства</h3>

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <p>г. Тула, пр-т Ленина, 87/3</p>
            </div>
            <div class="col-md-4 text-center ">
                <p>г. Москва,<br> ул. Ярославская, д. 8, <br>корпус 7</p>
            </div>
            <div class="col-md-4 text-center">
                <p>г. Санкт-Петербург,<br>Политихническая 29,<br>(м. Политехническая)</p>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
