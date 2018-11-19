<?php get_header(); ?>

<?php

$news = get_posts( array(
	'post_type'   => 'reviews',
	'numberposts' => 4
) );

?>

<article class="page margin-top-55">
    <h1 class="align-self-center page-header-text"><?php the_title(); ?></h1>
    <div class="reviews-container margin-top-55 container-970 d-flex flex-row flex-wrap justify-content-between">

		<?php foreach ($news as $item) : ?>

            <div class="news-item d-flex flex-column">
	            <?php echo get_the_post_thumbnail($item->ID); ?>
                <h6><?php echo $item->post_title; ?></h6>
                <span><?php echo $item->post_excerpt; ?></span>
                <p><?php echo $item->post_content; ?></p>
            </div>

		<?php endforeach; ?>
        <div class="container d-flex align-items-center justify-content-center">
            <button class="button-cases">загрузить еще</button>
        </div>
    </div>

</article>

<?php get_footer(); ?>
