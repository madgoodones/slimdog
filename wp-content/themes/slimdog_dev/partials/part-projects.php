<div class="iframe">
	<iframe class="page-iframe" width="100%" frameborder="0" src="" webkitallowfullscreen mozallowfullscreen allowfullscreen>
	</iframe>
	<div class="close-iframe">
		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
	</div>
</div>
<div id="fullpage">
<?php 
$args = array(
'post_type' => 'projetos',
'posts_per_page' => -1
);
?>
<?php $the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<?php $image = get_field("imagem"); ?>
	<div class="projeto section" style="background-image: url('<?= $image ?>');">
		<div class="projeto-empresa">
			<?= get_field("cliente") ?>
		</div>
		<div class="projeto-title">
			<?php the_title() ?>
		</div>
		<div class="subtitle">
			<small>by</small> <?= get_field('tipo') ?>
		</div>
		<?php $iframe = get_field('video'); ?>
		<?php preg_match('/src="(.+?)"/', $iframe, $matches); ?>
		<?php $src = $matches[1]; ?>
		<input class="video-src" type="hidden" data-src="<?php echo "$src" ?>">
	</div>
<?php endwhile ?>
<?php endif ?>