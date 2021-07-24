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
    .bb-widget a:hover, .bb-post a:hover, .nav-links a:hover {
        color: 
            <?php if ( get_theme_mod( 'bb_color_link_hover' ) ) {
                echo get_theme_mod( 'bb_color_link_hover' ); 
                echo " !important;"; }  
            ?>
    }

    /* Cor do header */
    .navbar {
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
    .btn-secondary {
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
    .btn-secondary:hover {
    background-color: 
        <?php if ( get_theme_mod( 'bb_color_button_hover' ) ) {
            echo get_theme_mod( 'bb_color_button_hover' ); 
            echo " !important;"; }  ?>;
    border-color: 
        <?php if ( get_theme_mod( 'bb_color_button_hover' ) ) {
            echo get_theme_mod( 'bb_color_button_hover' ); 
            echo " !important;"; }  ?>
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