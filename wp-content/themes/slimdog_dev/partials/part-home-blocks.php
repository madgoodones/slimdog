

<?php 
$args = array(
'post_type' => 'diretores',
'posts_per_page' => -1
);
?>

<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="home-blocks">
	<?php $i = 0 ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php while ( have_rows('projetos') ) : the_row(); ?>

			<?php $img = get_sub_field('imagem_do_projeto'); ?>
	
			<div class="home-block" style="
			background: url('<?php echo $img['url'] ?>') no-repeat center center;
			background-size: cover;
			">
				<div class="title">
					<?php the_title(); ?>
				</div>
			</div>
		<?php $i++ ?>
		<?php endwhile; ?>

	<?php endwhile; ?>
	<?php if($i % 2): ?>
			<div class="home-block" style="
			background: url('http://localhost/slimdog/wp-content/uploads/2017/08/slimdog.png') no-repeat center center;
			background-size: cover;
			">
			</div>
	<?php endif; ?>
	</div>
<?php endif; ?>
<div class="clear"></div>