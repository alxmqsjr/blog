<?php get_header(); ?>
  
  <div class="container">
    <div class="row">

      <div class="col-lg-8 bb-post">
        <?php
        while ( have_posts() ) {
          the_post();
          get_template_part( 'template-parts/content','single' );

          if ( comments_open() ) {
              comments_template();
          }
        }
        ?>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>

<?php get_footer(); ?>