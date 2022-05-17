<footer class="footer" id="contacts">
			<div class="footer__top"></div>
			<div class="footer__container">
				<div class="footer__body">
					<div class="footer__main">
						<div class="footer__contacts contacts-footer">
							<!-- Логотип -->
							<div class="footer__logo">
					<?php the_custom_logo(); ?>
							</div>
							<div class="contacts-footer__item">
								<a href="tel:84951232323" class="contacts-footer__link icon-tel">
									<svg class="inline-svg-icon" width="20" height="20">
										<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#tel"></use>
									</svg>
									8 (495) 123 23 23</a>
							</div>
							<div class="contacts-footer__item">
								<a href="mailto:info@sitedom.ru" class="contacts-footer__link icon-mail">
									<svg class="inline-svg-icon" width="20" height="16">
										<use xlink:href="<?php bloginfo('template_url');?>/assets/img/svg-sprite.svg#mail"></use>
									</svg>
									info@sitedom.ru</a>
							</div>
						</div>
						<!-- Меню -->
						<div class="footer__menu menu-footer">
							<div class="menu-footer__item">
								<h4 class="menu-footer__name">Продукция</h4>
								<ul class="menu-footer__list">
									<li><a href="">Серия «A CUP FOR YOU»</a></li>
									<li><a href="">Серия «Советский стаканчик»</a></li>
									<li><a href="">Компоты</a></li>
									<li><a href="">Кисели</a></li>
									<li><a href="">Морсы</a></li>
									<li><a href="">Чайные напитки</a></li>
									<li><a href="">Вода</a></li>
								</ul>
							</div>
							<div class="menu-footer__item">
								<h4 class="menu-footer__name">Продукция</h4>
								<ul class="menu-footer__list">
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
								</ul>
							</div>
							<div class="menu-footer__item">
								<h4 class="menu-footer__name">Продукция</h4>
								<ul class="menu-footer__list">
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
									<li><a href="">Серия</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Копирайт -->
					<div class="footer__copyright copyright">
						<p class="copyright__copyright">© 2022 <span>Советский стаканчик</span></p>
						<a href="" class="copyright__link">Политика конфиденциальности</a>
					</div>
				</div>
			</div>
		</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>