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
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/intro.png" width="200" />
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
						<div class="menu__toggle">
							<span>Закрыть</span>
							<button type="button" class="menu__icon icon-menu"><span></span></button>
						</div>
						<nav class="menu__body">
							<ul class="menu__list">
								<li class="menu__item"><a class="menu__link" href="<?php bloginfo('url'); ?>">Главная</a></li>
								<li class="menu__item">
									<p class="menu__link catalog__parent">Продукция</p>
									<!-- Catalog -->
									<div class="menu__catalog catalog-menu">
										<div data-spollers="480,max" class="catalog-menu__content">
											<div class="catalog-menu__item">
												<button type="button" data-spoller class="catalog-menu__title">Компоты</button>
												<div class="catalog-menu__body">
													<div class="catalog-menu__body_flex">
														<ul class="catalog-menu__list">
															<li><a class="catalog-menu__link" href="http://soviet-cup/category/catalog/compotes/">Малина</a></li>
															<li><a class="catalog-menu__link" href="http://soviet-cup/catalog-list/">Смородина</a></li>
															<li><a class="catalog-menu__link" href="http://soviet-cup/catalog-grid/">Вишня</a></li>
														</ul>
														<div class="catalog-menu__image">
															<img src="<?php bloginfo('template_url'); ?>/assets/img/products/1.png" width="200" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="catalog-menu__item">
												<button type="button" data-spoller class="catalog-menu__title">Кисели</button>
												<div class="catalog-menu__body">
													<div class="catalog-menu__body_flex">
														<ul class="catalog-menu__list">
															<li><a class="catalog-menu__link" href="http://soviet-cup/category/catalog/compotes/">Смородина</a></li>
														</ul>
														<div class="catalog-menu__image">
															<img src="<?php bloginfo('template_url'); ?>/assets/img/products/2.png" width="200" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="catalog-menu__item">
												<button type="button" data-spoller class="catalog-menu__title">Чайные напитки</button>
												<div class="catalog-menu__body">
													<div class="catalog-menu__body_flex">
														<ul class="catalog-menu__list">
															<li><a class="catalog-menu__link" href="http://soviet-cup/category/catalog/compotes/">Смородина</a></li>
														</ul>
														<div class="catalog-menu__image">
															<img src="<?php bloginfo('template_url'); ?>/assets/img/products/3.png" width="200" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="catalog-menu__item">
												<a href="" class="catalog-menu__title">Политика возврата</a>
												<a href="" type="button" class="catalog-menu__title">Контакты</a>
												<div class="catalog-menu__body">
													<div class="catalog-menu__body_flex">
														<ul class="catalog-menu__list">
														</ul>
														<div class="catalog-menu__image">
															<img src="<?php bloginfo('template_url'); ?>/assets/img/products/4.png" width="200" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="menu__item"><a class="menu__link" href="#">Акции</a></li>
								<li class="menu__item"><a class="menu__link" href="#">Доставка</a></li>
								<li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>
					<!-- Действия -->
					<div class="header__actions actions-header" data-da=".header__menu,991.98,0">
						<!-- Аккаунт -->
						<a href="me-accaunt.html" class="actions-header__icon">
							<svg class="inline-svg-icon" width="20" height="20">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#user"></use>
							</svg>
						</a>

						<!-- Избранное -->
						<a href="favorite.html" class="actions-header__icon">
							<svg class="inline-svg-icon" width="20" height="20">
								<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#favorite"></use>
							</svg>
						</a>

						<!-- Корзина -->
						<div class="actions-header__item cart-header">
							<a href="cart.html" class="actions-header__icon">
								<svg class="inline-svg-icon" width="20" height="20">
									<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#bag"></use>
								</svg>
								<span class="quantity">2</span>
							</a>
							<div class="cart-header__left">
								<p class="cart-header__name">Корзина:</p>
								<p class="cart-header__price">210 900 ₽</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>