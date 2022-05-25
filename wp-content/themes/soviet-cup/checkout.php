<?php
/*
Template Name: checkout
 */
?>

<?php get_header();?>

<main class="page page__ohra">
	<div class="page__container">
	<!-- Хлебные крошки -->
	<?php woocommerce_breadcrumb(); ?>
	<!-- Вывод страницы Подтверждение заказа -->
	<?php echo do_shortcode('[woocommerce_checkout]'); ?>
	</div>
</main>

<?php get_footer();?>