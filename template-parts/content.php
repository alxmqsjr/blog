<div class="card mb-4">

    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'large', array( 'class' => 'card-img-top' ) ); ?>
    </a>

    <div class="card-body">
        <h2 class="card-title"><?php the_title(); ?></h2>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a class="btn btn-secondary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Leia mais &rarr;', 'bb' ); ?></a>
    </div>

    <div class="card-footer text-muted">
        <?php esc_html_e( 'Publicado em ', 'bb' ); ?><?php echo get_the_date( 'j F Y' ); ?> <?php esc_html_e( 'por ', 'bb' );  ?>
        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
    </div>

</div>