<?php get_header(); ?>

<section class="margin-top-55">
	<h2 class="text-center page-header-text ">акции</h2>

    <div class="list-akcii-container">
        <div class="item margin-top-55">
            <div class="sub-item container-970">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/akcii/develop_site.png' ?>" />
                <h4>разработка сайта</h4>
                <span class="span-list">-индивидуальный подход<br>-грамотное ведение проектов<br>-работа со всеми языками программирования</span>
                <p class="order-develop">При заказе разработки -</p>
                <p class="adaptive">адаптивная верстка в <span>ПОДАРОК</span></p>
            </div>

        </div>
        <div class="item margin-top-55">
            <div class="sub-item container-970">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/akcii/seo_site.png' ?>" />
                <p class="order-seo">При оплате 3-х месяцев</p>
                <h4 class="h4-seo">seo<span>-продвижения</span></h4>
                <p class="seo-year">до конца года 4 месяц <span>БЕСПЛАТНО</span></p>
            </div>
        </div>
        <div class="item margin-top-55">

            <div class="sub-item container-970">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/akcii/discount_10.png' ?>" />
                <h4 class="discount-header">скидка 10%</h4>
                <p class="discount-description">при комплексной настройке</p>

                <p class="discount-footer">Яндекс Директа и Google Analytics</p>
            </div>

        </div>
    </div>
</section>

<div style="margin-top: 328px;"></div>

<?php get_template_part( 'partials/content', 'clients' ); ?>

<div style="margin-bottom: 114px;"></div>

<?php get_footer(); ?>
