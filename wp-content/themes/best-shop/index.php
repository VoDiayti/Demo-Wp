<?php get_header(); ?>
  <div class="content-area" id="primary">
      <div class="container">
          <div>
            
          </div>
            <div class="page-grid">
                <main id="main" class="site-main">
                    <div class="content-wrap-main">
                        <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) :
                                    the_post();
                                    get_template_part( 'template-parts/content', get_post_type() );
                                endwhile;
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                        ?>

                    </div>
                    <?php 
                        best_shop_nav(); 
                        get_template_part( 'template-parts/pagination' ); 
                    ?>
                </main><!-- #main -->
                <?php get_sidebar(); ?>
            </div>
      </div>
  </div>
<?php get_footer(); ?>