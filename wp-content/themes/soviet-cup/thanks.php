<?php
/*
Template Name: thanks
 */
?>

<?php get_header(); ?>
<?php require_once 'search.php'; ?>

<main class="page">
			<!-- THANKS -->
			<div class="page__thanks thanks">
				<div class="thanks__container">				
				<?php the_breadcrumb(); ?>
					<h1 class="page__title">Оплата</h1>
					<div class="thanks__body">
						<div class="thanks__icon">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/icons/check-circle.svg" width="60" alt="">
						</div>
						<h2 class="thanks__title">Спасибо за покупку!</h2>
						<div class="thanks__subtitle">Покупка прошла успешно. Пожалуйста проверьте свой email, мы
							выслали вам детали о покупке</div>
						<div class="page__center">
							<a href="#" class="button button_green_two">Продолжить покупки</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /.THANKS -->
		</main>

<?php get_footer(); ?>