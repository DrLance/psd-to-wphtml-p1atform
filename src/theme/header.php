<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="d-flex justify-content-md-between mt-lg-4">
            <div>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo 🌈">
                </a>
            </div>
            <div class="d-flex align-items-md-center flex-md-column text-center">
                <a class="tel-text" href="#">+7 495 000 00 00</a>
                <button class="button mt-1">ЗАКАЗАТЬ</button>
            </div>
        </div>
    </div>

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

</header>

