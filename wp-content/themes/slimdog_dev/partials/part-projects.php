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
			
			<a href="<?php the_permalink() ?>">
				<div class="home-block" style="
				background-image: url('<?php the_sub_field("imagem_do_projeto") ?>');
				">
					<div class="title" data-aos="fade-down">
						<?php the_sub_field("nome_do_projeto") ?>
					</div>
				</div>
			</a>

		<?php $i++ ?>
		<?php endwhile; ?>

	<?php endwhile; ?>
	<?php if($i % 2): ?>
			<div class="home-block" style="
			background: url('<?php echo get_template_directory_uri() ?>/dist/img/slimdog.png') no-repeat center center;
			background-size: cover;
			">
			</div>
	<?php endif; ?>
	</div>
<?php endif; ?>
<div class="clear"></div>