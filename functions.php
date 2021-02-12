<?php
function demo_themes(){
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all');
    wp_enqueue_style('main-css', get_stylesheet_uri());


    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','demo_themes');


function demo_setup(){
    // logo support
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // theme support
    add_theme_support( 'post-thumbnails' );

    // menu part
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'demo' ),
        )
    );

}
add_action('after_setup_theme','demo_setup');


function demo_slide_init() {
    $labels = array(
        'name'                  => _x( 'Banners', 'Post Banner slide', 'Banners' ),
        'singular_name'         => _x( 'Banner', 'Post Banner slide singular', 'Banner' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'supports'           =>array('thumbnail'),
        'public'             => true,
    );
      
    register_post_type( 'Banner', $args );
}
add_action( 'init', 'demo_slide_init' );


function marquee_customize_register( $wp_customize ) {
    //1st marquee
    $wp_customize->add_section( 'marquee_section_name' , array(
        'title'      => __( 'marquee change', 'demo' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'marquee_setting' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'marquee_one', array(
        'label'      => __( 'marquee', 'demo' ),
        'type'       => 'text',
        'section'    => 'marquee_section_name',
        'settings'   => 'marquee_setting',
    ) ) );
    // 2nd marquee

    $wp_customize->add_section( '2nd_marquee' , array(
        'title'      => __( '2nd marquee change', 'demo' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( '2nd_marquee_setting' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '2nd_marquee', array(
        'label'      => __( 'marquee', 'demo' ),
        'type'       => 'text',
        'section'    => '2nd_marquee',
        'settings'   => '2nd_marquee_setting',
    ) ) );

    //header text

    $wp_customize->add_section( 'headr_text' , array(
        'title'      => __( 'Header text change', 'demo' ),
        'priority'   => 20,
    ) );
    $wp_customize->add_setting( 'header_text_setting' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text', array(
        'label'      => __( 'Header Text', 'demo' ),
        'type'       => 'text',
        'section'    => 'headr_text',
        'settings'   => 'header_text_setting',
    ) ) );

    

    // e-seba banner
    $wp_customize->add_section( 'custom_eseba_section_name' , array(
        'title'      => __( 'E-seba Photo', 'razib' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_setting( 'custom_eseba_settings' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'e_seba_control', array(
        'label' => 'Upload Logo',
        'priority' => 20,
        'section' => 'custom_eseba_section_name',
        'settings' => 'custom_eseba_settings',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                    )
    )));

    //footer photo
    $wp_customize->add_section( 'footer_image' , array(
        'title'      => __( 'Footer Photo', 'razib' ),
        'priority'   => 1,
    ) );

    $wp_customize->add_setting( 'footer_settings' , array(
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_control', array(
        'label' => 'Upload footer photo',
        'priority' => 20,
        'section' => 'footer_image',
        'settings' => 'footer_settings',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Logo',
                    'remove' => 'Remove Logo',
                    'change' => 'Change Logo',
                    )
    )));


 }
 add_action( 'customize_register', 'marquee_customize_register' );

 // widgets support
function demo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'demo' ),
            'id'            => 'sidebar-1',
			
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'demo' ),
            'id'            => 'footer-1',
			
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-text', 'demo' ),
            'id'            => 'footer-text',
			
		)
    );

    register_sidebar(
		array(
			'name'          => esc_html__( 'Gallery', 'demo' ),
            'id'            => 'gallery-1',
			
		)
    );
    
}
add_action( 'widgets_init', 'demo_widgets_init' );
