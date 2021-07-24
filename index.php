  <?php get_header(); ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <div class="bb-space"></div>
          <?php 
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
              }
          ?>

          <div class="mb-4 pagination justify-content-center bb-col-link">
            <?php 
              the_posts_navigation( array(
                'class' => '',
                'prev_text' => '&larr;&emsp;Antigos',
                'next_text' => 'Recentes&emsp;&rarr;',
                'screen_reader_text' => ' '
              )); 
            ?>
          </div>

          <?php
            } else {
              get_template_part( 'template-parts/content','none' );
            }
          ?>

      </div>

      <?php get_sidebar(); ?>

    </div>
  </div>

  <?php get_footer(); ?>