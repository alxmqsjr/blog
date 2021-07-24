<h1 class="mt-4"><?php the_title(); ?></h1>

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