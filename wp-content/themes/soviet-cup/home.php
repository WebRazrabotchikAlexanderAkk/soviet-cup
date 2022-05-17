<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<main class="page">
			<!-- INTRO -->
			<section class="page__intro intro">
				<div class="intro__container">
					<div class="intro__body intro__body-ibg">
						<img src="<?php bloginfo('template_url');?>/assets/img/intro-img.jpg" alt="Фоновое изображение Натуральные напитки">
						<h1 class="intro__title">Натуральные напитки</h1>
						<div class="intro__button">
							<button type="button" class="button">Выбрать</button>
						</div>
					</div>
				</div>
			</section>
			<!-- /.INTRO -->

			<!-- ASSORTMENT -->
			<section class="page__section page__assortment assortment">
				<div class="assortment__container">
					<h2 class="page__title">Наша продукция</h2>
					<div class="assortment__body">
						<div class="assortment__item">
							<a href="/" class="assortment__image">
								<img src="<?php bloginfo('template_url');?>/assets/img/products/jelly_cherry.jpg" alt="">
							</a>
							<a href="/" class="assortment__brand">Cup for you</a>
							<a href="/" class="assortment__category">Компоты</a>
						</div>
					</div>
				</div>
			</section>
			<!-- ASSORTMENT -->

			<!-- NEW PRODUCT -->
			<section class="page__section_min page__section section">
				<div class="section__container">
					<div class="caption__title">
						<h3>Новинки</h3>
						<span></span>
					</div>
					<div class="section__body product">
						<div class="product__item">
							<div class="product__category">Категория: Компот</div>
							<div class="product__name"><span>A cup for you</span> Вишня Компот</div>
							<div class="product__image">
								<div class="product__stocks">
									<div class="product__stocks_new">Новинка</div>
								</div>
								<img src="<?php bloginfo('template_url');?>/assets/img/products/jelly_cherry.jpg" alt="">
							</div>
							<div class="product__actions">
								<div class="product__price">200 ₽</div>
								<span class="product__line"></span>
								<button type="button" class="product__cart">Купить
									<svg class="inline-svg-icon" width="20" height="20">
										<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#cart"></use>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- NEW PRODUCT -->

			<!-- BANNER -->
			<a href="/" target="_blank" class="page__banner banner banner-ibg">
				<img src="<?php bloginfo('template_url');?>/assets/img/alisa.jpg" alt="Банер Алиса Умный голосовой помощник 2000 бонусов за покупку колонки с Алисой">
			</a>
			<!-- BANNER -->

			<!-- HIT -->
			<section class="page__section_min page__section section">
				<div class="section__container">
					<div class="caption__title">
						<h3>Хиты продаж</h3>
						<span></span>
					</div>
					<div class="section__body"></div>
				</div>
			</section>
			<!-- HIT -->

			<!-- RECOMMEND -->
			<section class="page__section_min page__section section">
				<div class="section__container">
					<div class="caption__title">
						<h3>Рекомендуем</h3>
						<span></span>
					</div>
					<div class="section__body"></div>
				</div>
			</section>
			<!-- RECOMMEND -->
		</main>

<?php get_footer(); ?>