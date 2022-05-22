
		<!-- SEARCH -->
		<div class="page__search search">
			<div class="search__container">
				<div class="search__body">
					<form action="#" class="search__form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<button type="button" class="search__button icon-search">
						</button>
						<input type="search"  id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" value="<?php echo get_search_query(); ?>" name="s"  placeholder="Компот, Кисель, Чай" class="search__input" />
						<button type="submit" class="button button_yellow"  value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?></button>
						<input type="hidden" name="post_type" value="product" />
					</form>
				</div>
			</div>
		</div>
		<!-- /.SEARCH -->