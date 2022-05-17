<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<title><?php bloginfo('title'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="robots" content="index,follow" />
	<meta property="og:title" content="<?php bloginfo('title'); ?>" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/intro.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:url" content="<?php bloginfo('url'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?php bloginfo('title'); ?>" />

	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
	<header class="header">
			<div class="header__container">
				<div class="header__body">
					<!-- Логотип -->
					<div class="header__logo">
					<?php the_custom_logo(); ?>
						<p class="header__logo_text">Напрямую от производителя компоты, кисели, морсы, напитки чайные, кофейно-молочные напитки</p>
					</div>
					<!-- Меню -->
					<div class="header__menu menu">
						<nav class="menu__body">
						<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
						</nav>
					</div>
					<!-- Действия -->
					<div class="header__actions actions-header">
						<?php wp_nav_menu( array( 'theme_location' => 'actions_menu' ) ); ?>
						<!-- Аккаунт -->
		
						<span class="actions-header__icon">
							<svg class="inline-svg-icon" width="20" height="20">
								<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#user"></use>
							</svg>
</span>

						<!-- Избранное -->
						<a href="" class="actions-header__icon">
							<svg class="inline-svg-icon" width="24" height="24">
								<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#favorite"></use>
							</svg>
						</a>

				
						<!-- Корзина -->
						<div class="actions-header__item cart-header">
							<div class="s-header__basket-wr woocommerce">
    <?php
    global $woocommerce; ?>
    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="actions-header__icon">
	<svg class="inline-svg-icon" width="20" height="20">
									<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#bag"></use>
								</svg>
        <span class="quantity"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    </a>
</div>
							<div class="cart-header__left">
								<p class="cart-header__name">Корзина:</p>
								<p class="cart-header__price">0₽</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>