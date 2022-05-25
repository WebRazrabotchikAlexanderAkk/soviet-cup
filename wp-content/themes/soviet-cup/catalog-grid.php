
<!-- функция вывода шапки -->
<?php get_header(); ?>
<!-- Поиск -->
<?php require_once 'search.php'; ?>

<main class="page">
	<div class="page__catalog catalog">
		<div class="catalog__container">
			<!-- Хлебные крошки -->
			<?php the_breadcrumb(); ?>

			<!-- Заголовок категории -->
			<h1 class="page__title catalog__title">Компоты A CUP FOR YOU</h1>
			<!-- Сколько товаров в категории -->
			<span class="catalog__quantity-products">
				<?php $category_uid = get_queried_object();
				echo get_category($category_uid->term_id)->category_count;?>
				</span>

				<!-- Структура каталога -->
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
								<button type="button" class="catalog__button btn_grid active" aria-label="Сортировать колонками">
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
				<!-- Контейнер каталога -->
				<div class="catalog__wrapper">						
					<div class="catalog__body">
						<div class="catalog__product product catalog__product_grid">				
							<!-- Продукт карточка 1 -->
							<?php require_once 'product-1.php'; ?>						
						</div>
							<div class="catalog__more">
								<button type="button" class="button grey-border">Загрузить еще</button>
							</div>	
							<!-- Пагинация -->
							<?php require_once 'pagging.php'; ?>
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