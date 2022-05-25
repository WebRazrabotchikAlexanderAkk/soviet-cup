<?php
/*
Template Name: cart
 */
?>

<?php get_header();?>
<?php require_once 'search.php';?>

<main class="page">
			<!-- CART -->
			<div class="page__cart cart">
				<div class="cart__container">
	<!-- Хлебные крошки -->
	<?php woocommerce_breadcrumb(); ?>
					<h1 class="cart__title page__title">Корзина</h1>
					<div class="cart__body">
					<?php


defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');?>

<form class="woocommerce-cart-form main-cart__form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table');?>

	<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents main-cart__left" cellspacing="0">
		
			<?php do_action('woocommerce_before_cart_contents');?>

			<?php
			foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
				$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
				$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

				if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
					$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
					?>
					<div class="woocommerce-cart-form__cart-item main-cart__item main-cart__item<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

					<div class="main-cart__checkbox checkbox">
												<input id="cart-product_1" class="checkbox__input" type="checkbox" value="1" name="form[]">
												<label for="cart-product_1" class="checkbox__label"></label>
											</div>

						<div class="product-thumbnail main-cart__image">
							<?php
		$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

        if (!$product_permalink) {
            echo $thumbnail; // PHPCS: XSS ok.
        } else {
            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
        }
        ?>
						</div>

						<div class="main-cart__description">
							<div class="main-cart__info">
								<div class="product-name main-cart__name" data-title="<?php esc_attr_e('Product', 'woocommerce');?>">
								<?php
										if (!$product_permalink) {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
									} else {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
									}

									do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);
									?>
								</div>

								<div class="product-price main-cart__price" data-title="<?php esc_attr_e('Price', 'woocommerce');?>">
								<?php
								// Meta data.
								echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.
									echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
								?>
								</div>

						</div>
						
						<div class="product-quantity main-cart__quantity quantity-main-cart" data-title="<?php esc_attr_e('Quantity', 'woocommerce');?>">
						<?php
			if ($_product->is_sold_individually()) {
						$product_quantity = sprintf('1 <input name="cart[%s][qty]" value="1" class="quantity-main-cart__input"/>', $cart_item_key);
					} else {
						$product_quantity = woocommerce_quantity_input(
							array(
								'input_name' => "cart[{$cart_item_key}][qty]",
								'input_value' => $cart_item['quantity'],
								'max_value' => $_product->get_max_purchase_quantity(),
								'min_value' => '0',
								'product_name' => $_product->get_name(),
							),
							$_product,
							false
						);
					}

					echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
					?>

									<div class="product-subtotal quantity-main-cart__price" data-title="<?php esc_attr_e('Subtotal', 'woocommerce');?>">
										<?php
			echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
        ?>
</div>
									
						</div>

						</div>
							<div class="product-remove main-cart__delete">
								<?php
									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.0379 9.85045C12.0379 9.59933 11.9375 9.34821 11.7567 9.16741L8.80357 6.21429L11.7567 3.26116C11.9375 3.08036 12.0379 2.82924 12.0379 2.57812C12.0379 2.32701 11.9375 2.07589 11.7567 1.89509L10.3906 0.529017C10.2098 0.348214 9.95871 0.247767 9.70759 0.247767C9.45647 0.247767 9.20536 0.348214 9.02455 0.529017L6.07143 3.48214L3.1183 0.529017C2.9375 0.348214 2.68638 0.247767 2.43527 0.247767C2.18415 0.247767 1.93304 0.348214 1.75223 0.529017L0.386161 1.89509C0.205357 2.07589 0.104911 2.32701 0.104911 2.57812C0.104911 2.82924 0.205357 3.08036 0.386161 3.26116L3.33929 6.21429L0.386161 9.16741C0.205357 9.34821 0.104911 9.59933 0.104911 9.85045C0.104911 10.1016 0.205357 10.3527 0.386161 10.5335L1.75223 11.8996C1.93304 12.0804 2.18415 12.1808 2.43527 12.1808C2.68638 12.1808 2.9375 12.0804 3.1183 11.8996L6.07143 8.94643L9.02455 11.8996C9.20536 12.0804 9.45647 12.1808 9.70759 12.1808C9.95871 12.1808 10.2098 12.0804 10.3906 11.8996L11.7567 10.5335C11.9375 10.3527 12.0379 10.1016 12.0379 9.85045Z" fill="#FF2742" fill-opacity="0.797979"/>
										</svg></a>',
										esc_url(wc_get_cart_remove_url($cart_item_key)),
										esc_html__('Remove this item', 'woocommerce'),
										esc_attr($product_id),
										esc_attr($_product->get_sku())
									),
									$cart_item_key
								);
								?>
							</div>
						</div>
		<div class="main-cart__actions">
					<?php if (wc_coupons_enabled()) {?>
						<div class="coupon main-cart__coupon">
							<input type="text" name="coupon_code" class="input-text main-cart__input" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce');?>" /> <button type="submit" class="button button_green" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce');?>"><?php esc_attr_e('Apply coupon', 'woocommerce');?></button>
							<?php do_action('woocommerce_cart_coupon');?>
						</div>
					<?php }?>
					<button type="submit" class="button button_grey_border" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>


					<?php do_action('woocommerce_cart_actions');?>

					<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce');?>
			</div>
		</div>
						
					<?php
		}
		}
		?>

<?php do_action('woocommerce_after_cart_table');?>
		<div class="cart-collaterals main-cart__right result ">
			<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action('woocommerce_cart_collaterals');
		?>
		</div>
			<?php do_action('woocommerce_after_cart_contents');?>
			<?php do_action('woocommerce_before_cart_collaterals');?>
			<?php do_action('woocommerce_after_cart');?>
			<?php do_action('woocommerce_cart_contents');?>
		
	</div>
			
		</form>

					</div>
				</div>
			</div>
			<!-- /.CART -->

			<?php require_once 'viewed.php';?>
</main>

<?php get_footer();?>