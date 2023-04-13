<?php 

    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    function theme_name_scripts() {
          // Add styles
          wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v6.0.0/css/all.css' );
          wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap' );

          wp_enqueue_style( 'normalize-css', get_template_directory_uri(  ) . '/assets/css/normalize.css' );
  
          wp_enqueue_style( 'custom', get_template_directory_uri(  ) . '/assets/css/main.css' );

          wp_enqueue_style( 'main-style', get_stylesheet_uri(), array('normalize-css', 'fonts', 'custom' ) );
  
          //Add scripts
          wp_enqueue_script('jquery');
  
          wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
        
    }

    // logo
    add_theme_support( 'custom-logo', array(
        'height'=> 100,
        'width'=> 400,
        'flex-height'=> true,
        'flex-width'=> true,
    ) ); 
    // Menu
    add_theme_support('menus');
    // register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'britlex' ),
        )
    );
?>