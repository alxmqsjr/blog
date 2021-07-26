<?php

function bb_customize_register( $wp_customize ) {

    //Cor dos links
    $wp_customize->add_setting( 'bb_color_link', array( 'default' => '#007bff' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_link', array(
        'label' => __( 'Cor dos links:', 'bb' ), 
        'description' => __( 'Isto afetará todos os links do site' ),
        'section' => 'colors',
        'settings' => 'bb_color_link'
    ) ) );

    //Cor hover dos links
    $wp_customize->add_setting( 'bb_color_link_hover', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_link_hover', array(
        'label' => __( 'Cor hover dos links:', 'bb' ), 
        'description' => __( 'Quando passa o mouse pelos links' ),
        'section' => 'colors',
        'settings' => 'bb_color_link_hover'
    ) ) );

    // Desativa underline
    $wp_customize->add_setting( 'bb_line_check', array( 'default' => '' ));
    $wp_customize->add_control( 'bb_line_check', array(
        'label' => __( 'Não quero hover com links sublinhados', 'bb' ), 
        'section' => 'colors', 
        'type' => 'checkbox',
        'input_attrs' => array ( 'style' => 'margin-bottom:30px;' )
    ) );

    //Cor do header
    $wp_customize->add_setting( 'bb_color_header', array( 'default' => '#343a40' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_header', array(
        'label' => __( 'Cor da barra do topo', 'bb' ),
        'section' => 'colors',
        'setting' => 'bb_color_header'
    ) ) );

    //Cor do menu
    $wp_customize->add_setting( 'bb_color_menu', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_menu', array(
        'label' => __( 'Cor dos links do menu', 'bb' ),
        'section' => 'colors',
        'setting' => 'bb_color_menu'
    ) ) );

    //Cor do hover menu
    $wp_customize->add_setting( 'bb_color_menu_hover', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_menu_hover', array(
        'label' => __( 'Cor hover dos links do menu', 'bb' ),
        'description' => __( 'Quando passa o mouse pelos links' ),        
        'section' => 'colors',
        'setting' => 'bb_color_menu_hover'
    ) ) );

    //cor dos botões
    $wp_customize->add_setting( 'bb_color_button', array( 'default' => '#6c757d' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_button', array(
        'label' => __( 'Cor dos botões' ),
        'section' => 'colors',
        'setting' => 'bb_color_button'
    ) ) );

    //cor  hover dos botões
    $wp_customize->add_setting( 'bb_color_button_hover', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_button_hover', array(
        'label' => __( 'Cor hover dos botões' ),
        'description' => __( 'Quando passa o mouse pelos links' ),
        'section' => 'colors',
        'setting' => 'bb_color_button_hover'
    ) ) );

    // Mudar a cor do ícone do botão de pesquisa
    $wp_customize->add_setting( 'bb_color_btn_search', array( 'default' => '' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_btn_search', array(
        'label' => __( 'Cor do simbolo no botão de pesquisa' ),
        'description' => __( 'Muda a cor do texto e/ou da lupa do botão de pesquisa, dependendo da configuração' ),
        'section' => 'colors',
        'setting' => 'bb_color_btn_search'
    ) ) );

    //Cor de fundo do rodapé
    $wp_customize->add_setting( 'bb_color_footer', array( 'default' => '#343a40' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_footer', array(
        'label' => __( 'Cor de fundo do rodapé' ),
        'section' => 'colors',
        'setting' => 'bb_color_footer'
    ) ) );

    //Cor do texto do rodapé    
    $wp_customize->add_setting( 'bb_color_footer_txt', array( 'default' => '#fff' ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bb_color_footer_txt', array(
        'label' => __( 'Cor de texto do rodapé' ),
        'section' => 'colors',
        'setting' => 'bb_color_footer_txt'
    ) ) );

    
    // Menu
    //Adicionando seção ao painel Menu do Wordpress
    $wp_customize->add_section( 'bb_nav_menus', array(
        'title' => __( 'Configurações do menu', 'bb' ),
        'panel' => 'nav_menus'
    ) );

    //Checagem de menu fixo
    $wp_customize->add_setting( 'bb_fixed_check', array( 'default' => '' ) );
    $wp_customize->add_control( 'bb_fixed_check', array(
        'label' => __( 'Deixar o menu fixo', 'bb' ), 
        'section' => 'bb_nav_menus', 
        'type' => 'checkbox',
        'input_attrs' => array ( 'style' => 'margin-bottom:30px;' )
    ) );



    //Rodapé
    $wp_customize->add_setting( 'bb_footer_txt', array( 'default' => 'Seu website' ) );
    $wp_customize->add_control( 'bb_footer_txt', array( 
        'label' => __( 'Texto do rodapé', 'bb' ),
        'type' => 'text',
        'section' => 'title_tagline',
        'input_attrs' => array ( 'style' => 'margin-bottom:30px;' )
     ) );
     
}
add_action( 'customize_register', 'bb_customize_register' );