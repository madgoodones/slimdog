<?php get_header(); ?>

<div class="iframe">
	<iframe class="page-iframe" width="100%" frameborder="0" src="" webkitallowfullscreen mozallowfullscreen allowfullscreen>
	</iframe>

	<div class="close-iframe">
		<i class="fa fa-times fa-2x" aria-hidden="true"></i>
	</div>
</div>

	<div id="fullpage">
		<!-- Section 1 - Header -->
		<?php $a = get_field("imagem_em_destaque"); ?>
		<?php if (strlen($a) > 0): ?>

			<div class="diretor-header section" style="
			background-image: url('<?php the_field("imagem_em_destaque") ?>');
			">
		<?php else: ?>

			<div class="diretor-header section" style="
			background-image: url('<?php echo get_template_directory_uri() ?>/dist/img/placeholder.jpg');
			">
			
		<?php endif ?>
			<div class="header-title">
					<?php the_title(); ?>
			</div>

		</div>
		
		<?php if (have_rows("projetos")): ?>
		<!-- Section 2+N: Projects -->
			<?php while(have_rows("projetos")): the_row() ?>
				
				<?php $b = get_sub_field("imagem_do_projeto"); ?>

				<?php if (strlen($b) > 0): ?>

					<div class="projeto section" style="
					background-image: url('<?php the_sub_field("imagem_do_projeto") ?>');
					">

				<?php else: ?>

					<div class="projeto section" style="
					background-image: url('<?php echo get_template_directory_uri() ?>/dist/img/placeholder.jpg');
					">
					
				<?php endif ?>
					
					<div class="projeto-empresa">
						<?php the_sub_field("empresa") ?>
					</div>
					<div class="projeto-title">
						<?php the_sub_field("nome_do_projeto") ?>
					</div>

					<?php $iframe = get_sub_field('video_do_projeto'); ?>
					<?php preg_match('/src="(.+?)"/', $iframe, $matches); ?>
					<?php $src = $matches[1]; ?>
					<input class="video-src" type="hidden" data-src="<?php echo "$src" ?>">

				</div>

			<?php endwhile ?>
			
		<?php endif ?>
		<!-- Section 3: About -->
		<div class="section about-diretor">
			<div class="title">
				About
			</div>

			<div class="div">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/div.png" alt="">
            </div>

			<div class="text">
				<?php the_field("about") ?>
			</div>
		</div>
		
		<!-- Section 4: Footer -->
		<div class="section fp-auto-height">
		<?php get_footer(); ?>
	</div>