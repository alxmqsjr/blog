<h1 class="mt-4"><?php the_title(); ?></h1>

<p>
    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
</p>

<hr>

<p class="bb-date"><?php esc_html_e( 'Publicado em ' ); ?><?php echo get_the_date( 'j F, Y' ); ?></p>

<hr>

<?php 
    if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded' ) ); 
    ?>
    <hr>
<?php } ?>

<span class="bb-content">
    <?php the_content(); ?>
</span>

<hr class="bb-hr">
