<div class="col-md-4 bb-col-link">

    <?php do_action( 'before_sidebar' ); ?>

    <?php if (! dynamic_sidebar( 'bb-sidebar' ) ) : ?>

        <div class="card my-4">
            <h5 class="card-header"><?php esc_html_e( 'Pesquisar', 'bb' ); ?></h5>
            <?php get_search_form(); ?>
        </div>

        <div class="card my-4 bb-archive">
            <h5 class="card-header"><?php esc_html_e( 'Arquivos', 'bb' ); ?></h5>
            <ul>
                <?php
                    $archives_args = array( 'type' => 'monthly' );
                    wp_get_archives( $archives_args );
                ?>
            </ul>
        </div>

    <?php endif; ?>


</div>