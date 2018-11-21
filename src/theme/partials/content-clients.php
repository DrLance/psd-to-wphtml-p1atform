<?php
$index   = 0;
$clients = get_posts(
	array(
		'post_type'   => 'clients',
		'numberposts' => - 1
	)

); ?>

<section class="margin-top-section">
    <h3 class="align-self-center page-header-text mt-md-3">наши клиенты</h3>
    <div class="container">
        <div id="carouselOurClientsPage" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
					<?php foreach ( $clients as $client ) : ?>
                        <img class="ml-md-5 mt-md-5" src="<?php echo get_the_post_thumbnail_url( $client, 'full' ); ?>"
                             alt="<?php echo $client->post_title; ?>">
						<?php $index ++; endforeach;
					$index = 0; ?>
                </div>

            </div>
        </div>
    </div>
</section>