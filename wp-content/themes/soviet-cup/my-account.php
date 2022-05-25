<?php
/*
Template Name:my-account
 */
?>

<?php get_header();?>

<main class="page">
			<!-- Account -->
			<div class="page__cart cart">
				<div class="cart__container">
					<div class="cart__body">

<?php
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_account_navigation' ); ?>

<div class="woocommerce-MyAccount-content">
	<?php
		do_action( 'woocommerce_account_content' );
	?>
</div>
			<!-- /.Account -->
</main>

<!-- <nav class="woocommerce-MyAccount-navigation">
	<ul>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
				<a href="http://soviet-cup/my-account/">Панель управления</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
				<a href="http://soviet-cup/my-account/orders/">Заказы</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
				<a href="http://soviet-cup/my-account/downloads/">Загрузки</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
				<a href="http://soviet-cup/my-account/edit-address/">Адрес</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
				<a href="http://soviet-cup/my-account/edit-account/">Детали профиля</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
				<a href="http://soviet-cup/my-account/customer-logout/?_wpnonce=dea246c778">Выйти</a>
			</li>
			</ul>
</nav>


<div class="woocommerce-MyAccount-content">
	<div class="woocommerce-notices-wrapper"></div>
<p>
	Добро пожаловать, <strong>nuorfdlirfsss</strong> (не <strong>nuorfdlirfsss</strong>? <a href="http://soviet-cup/my-account/customer-logout/?_wpnonce=dea246c778">Выйти</a>)</p>

<p>
	Из главной страницы аккаунта вы можете посмотреть ваши <a href="http://soviet-cup/my-account/orders/">недавние заказы</a>, настроить <a href="http://soviet-cup/my-account/edit-address/">платежный адрес и адрес доставки</a>, а также <a href="http://soviet-cup/my-account/edit-account/">изменить пароль и основную информацию</a>.</p>

</div>
-->

<?php get_footer();?>