<!-- Фильтр в каталоге -->
<div class="filter-catalog">
	<div class="filter-catalog__items">
		<div class="filter-catalog__item">
			<h4 class="filter-catalog__title">Цена</h4>
			<ul class="filter-catalog__price price-inputs">
				<li class="price-inputs__item">
					<label>от</label>
					<input type="text" name="price-input" class="price-inputs__input">
					<button type="reset" class="icon-close-black"></button>
				</li>
				<li class="price-inputs__item">
					<label>до</label>
					<input type="text" name="price-input" class="price-inputs__input">
					<button type="reset" class="icon-close-black"></button>
				</li>
			</ul>
		</div>
		<div class="filter-catalog__item">
			<h4 class="filter-catalog__title">Категории</h4>
			<div data-spollers class="filter-catalog__menu catalog__menu">
				<div class="catalog-menu__category">
					<button type="button" data-spoller class="catalog-menu__title">Компоты</button>
					<div class="catalog-menu__body">
						<div class="catalog-menu__body_flex">
							<ul class="catalog-menu__list">
								<li class="catalog-menu__check checkbox">
									<input id="c_1" class="checkbox__input" type="checkbox" value="1" name="form[]">
									<label for="c_1" class="checkbox__label"><span
											class="checkbox__text">Вишня</span></label>
								</li>
								<li class="catalog-menu__check checkbox">
									<input id="c_2" class="checkbox__input" type="checkbox" value="1" name="form[]">
									<label for="c_2" class="checkbox__label"><span
											class="checkbox__text">Вишня</span></label>
								</li>
								<li class="catalog-menu__check checkbox">
									<input id="c_3" class="checkbox__input" type="checkbox" value="1" name="form[]">
									<label for="c_3" class="checkbox__label"><span
											class="checkbox__text">Вишня</span></label>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="catalog-menu__category">
					<button type="button" data-spoller class="catalog-menu__title">Кисель</button>
					<div class="catalog-menu__body">
						<div class="catalog-menu__body_flex">
							<ul class="catalog-menu__list">
								<li class="catalog-menu__check options">
									<input hidden id="o_1" class="options__input" checked type="radio" value="1"
										name="option">
									<label for="o_1" class="options__label"><span class="options__text">CUP FOR
											YOU</span></label>
								</li>
								<li class="catalog-menu__check options">
									<input hidden id="o_2" class="options__input" type="radio" value="2" name="option">
									<label for="o_2" class="options__label"><span class="options__text">Советский
											стаканчик</span></label>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>