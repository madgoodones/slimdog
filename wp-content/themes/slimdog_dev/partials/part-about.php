

<?php 
$args = array(
    'post_type' => 'sobre',
    'posts_per_page' => -1
    );
    ?>

    <?php $the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>

     <div class="owl-carousel owl-theme about">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php while ( have_rows('sobre') ) : the_row(); ?>

                <div class="item">

                    <div class="inner">
                        <div class="title">
                            <?php the_title(); ?>
                        </div>

                        <div class="subtitle">
                            <?php the_sub_field('subtitulo') ?>
                        </div>

                        <div class="div">
                            <img src="http://madknow.com.br/slimdog/wp-content/uploads/2017/08/div.png" alt="">
                        </div>

                        <div class="text">
                            <?php the_sub_field('texto') ?>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>

        <?php endwhile; ?>

    </div>

<?php endif; ?>