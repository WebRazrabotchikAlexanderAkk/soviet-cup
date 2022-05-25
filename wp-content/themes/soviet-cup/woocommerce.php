<?php get_header();?>
<?php require_once 'search.php'; ?>

<main class="page page__ohra">
	<div class="page__container">
	<!-- Хлебные крошки -->
	<?php woocommerce_breadcrumb(); ?>
			<div class="woocommerce">
				<?php if(function_exists('woocommerce_content')) { woocommerce_content(); } ?>
			</div>
	</div>
</main>

<?php get_footer();?>