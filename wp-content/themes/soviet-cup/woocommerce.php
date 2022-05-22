<?php get_header();?>

<main class="page">
<div class="woocommerce">
<?php if(function_exists('woocommerce_content')) { woocommerce_content(); } ?>
</div>			
</main>

<?php get_footer();?>