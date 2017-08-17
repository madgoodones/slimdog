<?php 
$args = array(
'post_type' => 'diretores',
'posts_per_page' => -1,
);
?>

<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<div class="owl-carousel owl-slider owl-theme go-slider">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php while(have_rows("projetos")): the_row() ?>
			
			<?php if(get_sub_field("is_destaque")): ?>
				
				<a href="<?php the_permalink() ?>">
				<div class="item">
					<div class="go-slider-item" 
					style="
					background-image: url('<?php the_sub_field('imagem_do_projeto') ?>');
					
					">
					</div>
				
					<div class="inner">
						
						<div class="title" data-aos="fade-down">
							<?php the_sub_field('empresa') ?>
						</div>

						<div class="text" data-aos="fade-down">
							<?php the_sub_field('nome_do_projeto') ?>
						</div>

						<div class="subtitle" data-aos="fade-down">
							<?php the_sub_field('subtitulo_slider') ?>
						</div>
						
					</div>
				</div>
				</a>

			<?php endif ?>

		<?php endwhile ?>

	<?php endwhile; ?>
	</div>
<?php endif; ?>