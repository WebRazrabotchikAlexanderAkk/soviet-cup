<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


global $product;
?>


<div class="product__group">
	<div class="product__row">
		<!-- Отзывы -->
		<?php
	if ( ! wc_review_ratings_enabled() ) {
	return;
}
$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
 ?>
	<div class="product__rating">
		<?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
		<?php if ( comments_open() ) : ?>
			<?php //phpcs:disable ?>
			<a href="#reviews" class="woocommerce-review-link product__reviews" rel="nofollow"><?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span class="product__reviews">' . esc_html( $review_count ) . '</span>' ); ?></a>
			<?php // phpcs:enable ?>
		<?php endif ?>
	</div>

		<!-- Счетчик просмотров -->
		<div class="product__views icon-visibility">
		<?php echo getPostViews(get_the_ID()); ?>
		</div>

		<div class="product__actions">
			<!-- Шорткод В избранное -->
			<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
		</div>
	</div>
</div>