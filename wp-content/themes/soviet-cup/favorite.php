<?php
/*
Template Name: favorite
 */
?>

<?php get_header(); ?>
<?php require_once 'search.php'; ?>


<main class="page">
			<!-- FAVORITE -->
			<div class="page__cart cart">
				<div class="cart__container">								
				<?php the_breadcrumb(); ?>
					<h1 class="cart__title page__title">Избранное</h1>
					<div class="cart__body">
						<!-- Избранное пусто -->
						<div class="null-cart">
							<h2 class="null-cart__title">Здесь ничего нет. Ваш список избранного пуст</h2>
							<div class="page__center">
								<a href="#" class="button button_green_two">Посмотреть товары</a>
							</div>
						</div>
						<!-- В избранном что-то есть -->
						<div class="main-cart favorite">
							<ul class="favorite__list">
								<li class="favorite__item">
									<div class="favorite__col">
										<div class="main-cart__checkbox checkbox">
											<input id="cart-product_1" class="checkbox__input" type="checkbox" value="1" name="form[]">
											<label for="cart-product_1" class="checkbox__label"></label>
										</div>
										<a href="#" class="main-cart__image">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/products/2.png" width="100" alt="">
										</a>
										<div class="main-cart__info">
											<a href="#" class="main-cart__name">A CUP FOR YOUВишня Компот</a>
										</div>
									</div>
									<div class="main-cart__quantity quantity-main-cart favorite__col">
										<div class="quantity-main-cart__body">
											<button type="button" class="quantity-main-cart__plus" aria-label="Прибавить">
												<svg class="inline-svg-icon" width="10" height="10">
													<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#plus"></use>
												</svg>
											</button>
											<input type="number" name="quantity" value="1" class="quantity-main-cart__input">
											<button type="button" class="quantity-main-cart__minus" aria-label="Уменьшить">
												<svg class="inline-svg-icon" width="10" height="2">
													<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#minus"></use>
												</svg>
											</button>
										</div>
										<button type="button" class="button button_green_two button_min"><span class="mobile">В корзину</span><span class="pc">Добавить в
												корзину</span></button>
										<div class="quantity-main-cart__price">4000 ₽</div>
									</div>
									<button type="button" class="favorite__delete" aria-label="Удалить">
										<svg class="inline-svg-icon" width="13" height="13">
											<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/svg-sprite.svg#delete"></use>
										</svg>
									</button>
								</li>
							</ul>
							<div class="favorite__actions">
								<a href="cart.html" class="button button_green_border">Перейти в
									корзину</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.FAVORITE -->
		</main>

<?php get_footer(); ?>