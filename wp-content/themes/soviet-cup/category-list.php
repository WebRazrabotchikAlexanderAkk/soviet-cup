<div id="subcategory-archive">

<?php $terms = get_terms( array(
	'taxonomy' => 'product_cat',
	'hide_empty' => true,
	'pad_counts'=> true,
	'orderby' => 'name',
	'parent' => 0
) ); ?>  

<?php if($terms) : ?>
	<div class="assortment__body">
<?php foreach($terms as $term) : ?>
	
	<div class="assortment__item"> 

	<a class="assortment__image" href="<?php echo get_term_link($term->term_id);?>"><?php woocommerce_subcategory_thumbnail( $term );  ?></a>
	<h2 class="assortment__category"><a href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a></h2>
	<!--<div class="subcategory-descripton"><p><?php //if($term->description) : ?><?php //echo $term->description; ?><?php //else: ?>Описание термина таксономии<?php //endif; ?></p></div>-->

	<?php // Создаем массив терминов детей текущего термина текущей таксономии
	$tax = $term->taxonomy;
	$children_terms = get_terms( array(
		'taxonomy' => $tax,
		'hide_empty' => false,
		'parent' => $term->term_id
	) ); ?>

	<?php if($children_terms): // если есть дочерние категории ?>
	<ul><?php foreach ($children_terms as $children_term) : ?>
	<?php $link = get_term_link($children_term); ?>

		<li><a href="<?php echo $link ?>";><?php echo $children_term->name ?></a></li>
		<!--<p class="count"><?php //echo $children_term->count ?></p>-->

	<?php endforeach; ?></ul>
	<?php endif; // конец условия - если есть дочерние термины таксономии ?>  

	</div>
	
<?php endforeach; ?>
	</div>
<?php endif; ?> 
  
</div>