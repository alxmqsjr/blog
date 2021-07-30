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

    /* função de conversão de hex para rgb */
    <?php 
        function hexrgb( $hex ) {
            $hex = str_replace( "#", "", $hex );

            if( strlen( $hex ) == 3 ) {
                $r = hexdec( substr( $hex,0,1 ).substr( $hex,0,1 ) );
                $g = hexdec( substr( $hex,1,1 ).substr( $hex,1,1 ) );
                $b = hexdec( substr( $hex,2,1 ).substr( $hex,2,1 ) );
            } else {
                $r = hexdec( substr( $hex,0,2 ) );
                $g = hexdec( substr( $hex,2,2 ) );
                $b = hexdec( substr( $hex,4,2 ) );
            }
            $rgb = array( $r, $g, $b );

            return implode(",", $rgb);
        }
    ?>

    /* Cor do menu */
    <?php if ( get_theme_mod( 'bb_color_menu' ) ) : ?>
        .navbar-dark .navbar-nav .menu-item a { 
            color: <?php echo get_theme_mod( 'bb_color_menu' ); ?> !important;
         }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='<?php $hex = get_theme_mod( 'bb_color_menu' );  echo "rgb(" . hexrgb( $hex ) . ")"; ?>' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
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

    /* cor do simbolo svg do botão de pesquisa */
    .search-icon {
        fill:
            <?php if ( get_theme_mod( 'bb_color_btn_search' ) ) {
                echo get_theme_mod( 'bb_color_btn_search' );
                echo " !important;";
            } else { ?>
                #fff !important;
            <?php } ?>
    }

    /* Cor dos botões */
    .wp-block-search__button, .btn-secondary {
        <?php if ( get_theme_mod( 'bb_color_button' ) ) { ?>
            background-color: <?php echo get_theme_mod( 'bb_color_button' ); ?> !important;
            border-color: <?php echo get_theme_mod( 'bb_color_button' ); ?> !important;
        <?php } else { ?>
            background-color: #6c757d !important;
            border-color: #6c757d !important;
        <?php } ?>

        color:
            <?php if ( get_theme_mod( 'bb_color_btn_search' ) ) {
                echo get_theme_mod( 'bb_color_btn_search' );
                echo " !important;";
            } else { ?>
                #fff !important;
            <?php } ?>
    }

    /* Cor hover dos botões */
    .wp-block-search__button:hover, .btn-secondary:hover {
        <?php if ( get_theme_mod( 'bb_color_button_hover' ) ) { ?>
            background-color: <?php echo get_theme_mod( 'bb_color_button_hover' ); ?> !important;
            border-color: <?php echo get_theme_mod( 'bb_color_button_hover' ); ?> !important;
        <?php } else { ?>
            background-color: #343a40 !important;
            border-color: #343a40 !important;
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