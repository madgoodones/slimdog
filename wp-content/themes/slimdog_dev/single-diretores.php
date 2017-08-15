<?php get_header(); ?>

	<div id="fullpage">
		<!-- Section 1 - Header -->
		<div class="diretor-header section" style="
		background-image: url('<?php the_field("imagem_em_destaque") ?>');
		">
			<div class="header-title">
					<?php the_title(); ?>
			</div>
		</div>
		
		<?php if (have_rows("projetos")): ?>
		<!-- Section 2+N: Projects -->
			<?php while(have_rows("projetos")): the_row() ?>

				<div class="projeto section" style="
				background-image: url('<?php the_sub_field("imagem_do_projeto") ?>');
				">
					
					<div class="projeto-title">
						<?php the_sub_field("nome_do_projeto") ?>
					</div>

				</div>

			<?php endwhile ?>
			
		<?php endif ?>
		<!-- Section 3: About -->
		<div class="section about-diretor">
			<div class="title">
				About
			</div>

			<div class="div">
                <img src="http://madknow.com.br/slimdog/wp-content/uploads/2017/08/div.png" alt="">
            </div>

			<div class="text">
				<?php the_field("about") ?>
			</div>
		</div>
		
		<!-- Section 4: Footer -->
		<div class="section fp-auto-height">
		<?php get_footer(); ?>
	</div>