<style>

    /* Links gerais */
    .bb-widget a, .bb-post a, .nav-links a {
        color: 
            <?php if ( get_theme_mod( 'bb_color_link' ) ) {
                echo get_theme_mod( 'bb_color_link' ); 
                echo " !important;"; }  
            ?>
    }

    /* hover dos links */
    .bb-widget a:hover, .bb-post a:hover, .nav-links a:hover, .card-footer a:hover {
        color: 
            <?php if ( get_theme_mod( 'bb_color_link_hover' ) ) {
                echo get_theme_mod( 'bb_color_link_hover' ); 
                echo " !important;"; }  
            ?>
    }

    /* Cor do header */
    .navbar, .sub-menu, .sub-menu li {
        background-color: 
            <?php if ( get_theme_mod( 'bb_color_header' ) ) {
                echo get_theme_mod( 'bb_color_header' ); 
                echo " !important;"; }  
            else { ?>
                #343a40 !important;
            <?php  }  ?>
    }

    /* cor dos links do menu */
    .menu-item a {
        color: 
            <?php if ( get_theme_mod( 'bb_color_menu' ) ) {
                echo get_theme_mod( 'bb_color_menu' ); 
                echo " !important;"; }  
            ?>
    }

    /* Cor do hamburguer */
    <?php if ( get_theme_mod( 'bb_color_menu' ) ) : ?>
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='<?php echo get_theme_mod( 'bb_color_menu' ); ?>' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
    <?php endif; ?>

    /* Cor da borda do hamburguer */
    <?php if ( get_theme_mod( 'bb_color_menu' ) ) : ?>
        .navbar-toggler {
            border-color: <?php echo get_theme_mod( 'bb_color_menu' ); ?> !important;
        }
    <?php endif; ?>

    /* cor hover dos links do menu */
    .menu-item a:hover {
    color: 
        <?php if ( get_theme_mod( 'bb_color_menu_hover' ) ) {
            echo get_theme_mod( 'bb_color_menu_hover' ); 
            echo " !important;"; }  
        ?>
    }

    /* Tirar os underlines */
    <?php if ( get_theme_mod( 'bb_line_check' ) ) { ?>
        a:hover { text-decoration: none !important; } 
    <?php } ?>

    /* Cor dos botões */
    .btn-secondary, .wp-block-search__button {
        background-color: 
            <?php if ( get_theme_mod( 'bb_color_button' ) ) {
                echo get_theme_mod( 'bb_color_button' ); 
                echo " !important;"; }  ?>;
        border-color: 
            <?php if ( get_theme_mod( 'bb_color_button' ) ) {
                echo get_theme_mod( 'bb_color_button' ); 
                echo " !important;"; }  ?>
    }

    /* Cor hover dos botões */
    .btn-secondary:hover, .wp-block-search__button:hover {
        background-color: 
            <?php if ( get_theme_mod( 'bb_color_button_hover' ) ) {
                echo get_theme_mod( 'bb_color_button_hover' ); 
                echo " !important;"; }  ?>;
        border-color: 
            <?php if ( get_theme_mod( 'bb_color_button_hover' ) ) {
                echo get_theme_mod( 'bb_color_button_hover' ); 
                echo " !important;"; }  ?>
    }

    .search-icon {
        fill:
            <?php if ( get_theme_mod( 'bb_color_btn_search' ) ) {
                echo get_theme_mod( 'bb_color_btn_search' );
                echo " !important;";
            } else { ?>
                #fff !important;
            <?php } ?>
    }
    .wp-block-search__button {
        color:
            <?php if ( get_theme_mod( 'bb_color_btn_search' ) ) {
                echo get_theme_mod( 'bb_color_btn_search' );
                echo " !important;";
            } else { ?>
                #fff !important;
            <?php } ?>
    }

    /* Cor do rodapé */
    body > footer {
        background-color: 
            <?php if ( get_theme_mod( 'bb_color_footer' ) ) {
                echo get_theme_mod( 'bb_color_footer' ); 
                echo " !important;"; } 
            else { ?>
                #343a40 !important;
            <?php } ?>

        color:
            <?php if ( get_theme_mod( 'bb_color_footer_txt' ) ) {
                echo get_theme_mod( 'bb_color_footer_txt' ); 
                echo " !important;"; } ?>
    }

</style>