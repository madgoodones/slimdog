<?php 
$args = array(
'post_type' => 'slideshow',
'posts_per_page' => -1,
);
?>
<?php $the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<div class="owl-carousel owl-slider owl-theme go-slider">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="item">
		<div class="go-slider-item" style="background-image: url('<?= get_field('imagem') ?>');"></div>
		<div class="inner">
			<div class="title">
				<?= get_field('cliente') ?>
			</div>
			<div class="text">
				<?php the_title() ?>
			</div>
			<div class="subtitle">
				<small>by</small> <?= get_field('tipo') ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
</div>
<?php endif; ?>