<?php /* Template Name: Página de largura total */ ?>

<?php get_header(); ?>
  
  <div class="container">
    <div class="row" style="margin-bottom: 20px !important;">

        <div class="col-lg-12 bb-post">
            <?php
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content','full' );
                
                if ( comments_open() ) { 
                ?>
                    <hr class="bb-hr">
                <?php
                    comments_template();
                }
            }
            ?>
        </div>
        
    </div>
  </div>

<?php get_footer(); ?>