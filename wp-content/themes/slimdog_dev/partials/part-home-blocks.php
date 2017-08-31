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
			
			<a href="<?php the_permalink() ?>">
				<div class="home-block" style="background-image: url('<?= get_field("thumbnail") ?>');">
					<div class="title" data-aos="fade-down">
						<?php the_title(); ?>
					</div>
				</div>
			</a>

		<?php $i++ ?>
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