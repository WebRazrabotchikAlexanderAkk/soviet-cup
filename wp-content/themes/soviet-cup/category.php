<!-- функция вывода шапки -->
<?php get_header(); ?>
<?php require_once 'search.php'; ?>

<!-- основной контейнер -->
<main class="page">
	<div class="page__catalog catalog">
		<div class="catalog__container">
			<?php the_breadcrumb(); ?>

			<!-- Заголовок категории -->
			<h1 class="catalog__title">Компоты A CUP FOR YOU</h1>
			<span class="catalog__quantity-products">
				<?php $category_uid = get_queried_object();
				echo get_category($category_uid->term_id)->category_count;?>
				</span>

			<!-- Фильтр -->
			<div class="catalog__filter">
				<!-- Сортировка -->
						<div class="catalog__filter_item">
							<button type="button" class="catalog__select icon-small-up">Сортировка</button>
							<ul class="catalog__select_list">
								<li class="catalog__select_item "><span class="icon-arrow-top">По возрастанию
										цены</span></li>
								<li class="catalog__select_item "><span class="icon-arrow-down">По убыванию цены</span>
								</li>
								<li class="catalog__select_item "><span class="icon-calendar-top">По возрастанию
										даты</span></li>
								<li class="catalog__select_item "><span class="icon-calendar-down">По убыванию
										даты</span></li>
							</ul>
						</div>
						<!-- Сортировать колонками -->
						<div class="catalog__filter_item">
							<button type="button" class="catalog__button btn_grid" aria-label="Сортировать колонками">
								<svg class="inline-svg-icon" width="20" height="20">
									<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#grid-45"></use>
								</svg>
							</button>
						</div>
						<!-- Сортировать списком -->
						<div class="catalog__filter_item">
							<button type="button" class="catalog__button btn_list" aria-label="Сортировать списком">
								<svg class="inline-svg-icon" width="20" height="20">
									<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#bullet-list"></use>
								</svg>
							</button>
						</div>
					</div>
			
					<!-- Каталог -->
					<div class="catalog__wrapper">
						
					<?php require_once 'catalog-filter.php'; ?>

					<div class="catalog__body">
					<!-- определение категории и количество записей категория id 8 showposts - количество записей-->
					<?php $the_query = new WP_Query('cat=23&showposts=20'); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

						<div class="catalog__product product catalog__product_grid">
							<article class="product__item product-option-1">
							<a href="" class="product__category">Категория: <?php single_cat_title(); ?></a>
							<!-- заголовок записи -->
							<a href="" class="product__name"><?php the_title(); ?></a>
							<a href="<?php the_permalink() ?>" class="product__image">
								<!-- Новинка -->
								<div class="product__stocks">
									<div class="product__stocks_new">Новинка</div>
								</div>
								<!-- миниатюра записи -->
								<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail'); ?>
							</a>
							<div class="product__actions">
								<div class="product__price">
									<div class="product__price_new">200 ₽</div>
								</div>
								<span class="product__line"></span>
								<button type="button" class="product__cart">Купить
									<svg class="inline-svg-icon" width="20" height="20">
										<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#cart"></use>
									</svg>
								</button>
							</div>
						</article>
					</div>

							<div class="catalog__more">
								<button type="button" class="button grey-border">Загрузить еще</button>
							</div>
							
							
							<?php endwhile;	?>

							<!-- Пагинация -->
							<?php require_once 'pagging.php'; ?>	

						 <!-- <?php // wp_pagenavi(); ?> функция постраничной навигации  -->
						
									
						<!-- функция для правильной работы условных тегов -->
						<?php wp_reset_query(); ?>

						</div>
					</div>

					<div class="catalog__text">
						<p>Аполлоновское начало, согласно традиционным представлениям, однократно. Канон биографии, в
							первом приближении, изящно дает архетип, однако само по себе состояние игры всегда
							амбивалентно. Литургическая драма аккумулирует глубокий импрессионизм. Действительно,
							флегматик иллюстрирует конструктивный постмодернизм.
							Флегматик, так или иначе, конвенционален. Фабула, по определению, изящно диссонирует
							бессознательный фабульный каркас. Развивая эту тему, художественная жизнь имеет механизм
							эвокации. Иносказательность образа, в том числе, имитирует суггестивный хорал. Фабульный
							каркас образует незначительный психологический параллелизм, подобный исследовательский
							подход к проблемам художественной типологии можно обнаружить у К.Фосслера.</p>
					</div>
				</div>
			</div>
		</main>

<!-- функция вывода футера -->
<?php get_footer(); ?>