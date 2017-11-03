<?php


  require_once( get_stylesheet_directory() . '/aq_resizer.php' );


    function load_fonts_styles() {

      /* FONT */

      wp_register_style('Lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic,300italic,300,900,900italic');

      wp_enqueue_style( 'Lato');



      /* FONT AWESOME */

      wp_register_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

      wp_enqueue_style( 'font-awesome');



      /* ANIMATE */

      wp_register_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');

      wp_enqueue_style( 'animate');


      /* UNSLIDER */

     wp_register_style('unslider', get_stylesheet_directory_uri() . '/css/unslider.css');

     wp_enqueue_style( 'unslider');      


     wp_register_style('unsliderdots', get_stylesheet_directory_uri() . '/css/unslider-dots.css');

     wp_enqueue_style( 'unsliderdots');           

      /* OWL 

        wp_register_style('animate', get_stylesheet_directory_uri() . '/css/owl.carousel.css');

        wp_enqueue_style( 'owl-css');

       */



    }



    add_action('wp_print_styles', 'load_fonts_styles');



    function remove_some_widgets(){

      unregister_sidebar('sidebar1');

      unregister_sidebar('sidebar2');

      unregister_sidebar('footer1');

      unregister_sidebar('footer2');

      unregister_sidebar('footer3');

    }

    add_action( 'widgets_init', 'remove_some_widgets', 11 );



    register_sidebar(array(

      'id' => 'copyright',

      'name' => 'Copyright',

      'before_widget' => '<div id="%1$s" class="widget col-xs-12 pull-right copyright %2$s">',

      'after_widget' => '</div>',

      'before_title' => '<h3 class="widgettitle">',

      'after_title' => '</h3>',

    ));



    register_sidebar(array(

      'id' => 'footer 1',

      'name' => 'Footer 1',

      'before_widget' => '<div id="%1$s" class="widget col-xs-12 col-sm-3 %2$s">',

      'after_widget' => '</div>',

      'before_title' => '<h3 class="widgettitle">',

      'after_title' => '</h3>',

    ));



    register_sidebar(array(

      'id' => 'footer 2',

      'name' => 'Footer 2',

      'before_widget' => '<div id="%1$s" class="widget col-xs-6 %2$s">',

      'after_widget' => '</div>',

      'before_title' => '<h3 class="widgettitle">',

      'after_title' => '</h3>',

    ));



    register_sidebar(array(

      'id' => 'footer 3',

      'name' => 'Footer 3',

      'before_widget' => '<div id="%1$s" class="widget col-xs-6 %2$s">',

      'after_widget' => '</div>',

      'before_title' => '<h3 class="widgettitle">',

      'after_title' => '</h3>',

    ));

    register_sidebar(array(

      'id' => 'gallery',

      'name' => 'Gallery',

      'before_widget' => '<div id="%1$s" class="widget col-xs-12 %2$s">',

      'after_widget' => '</div>',

      'before_title' => '<h3 class="widgettitle">',

      'after_title' => '</h3>',

    ));



    /* REGISTER JAVASCRIPT */

        wp_register_script( 'vide', get_stylesheet_directory_uri() . '/js/jquery.vide.js' , array( 'jquery' ) );

        wp_enqueue_script( 'vide', get_stylesheet_directory_uri() . '/js/jquery.vide.js', array(), '1.0.0', true );

        wp_register_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js' , array( 'jquery' ) );

        wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true );



        wp_register_script( 'jquery.imageScroll.min', get_stylesheet_directory_uri() . '/js/jquery.imageScroll.min.js' , array( 'jquery' ) );

        wp_enqueue_script( 'jquery.imageScroll.min', get_stylesheet_directory_uri() . '/js/jquery.imageScroll.min.js', array(), '1.0.0', true );

        //wp_register_script( 'owl', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js' , array( 'jquery' ) );

        //wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );

        wp_register_script( 'backstretch', get_stylesheet_directory_uri() . '/js/jquery.backstretch.min.js' , array( 'jquery' ) );
        
        wp_enqueue_script( 'backstretch', get_stylesheet_directory_uri() . '/js/jquery.backstretch.min.js', array(), '1.0.0', true );
        

        wp_register_script( 'nicescroll', get_stylesheet_directory_uri() . '/js/jquery.nicescroll.min.js' , array( 'jquery' ) );

        wp_enqueue_script( 'nicescroll', get_stylesheet_directory_uri() . '/js/jquery.nicescroll.min.js', array(), '1.0.0', true );

        wp_register_script( 'unslider', get_stylesheet_directory_uri() . '/js/unslider-min.js' , array( 'jquery' ) );

        wp_enqueue_script( 'unslider', get_stylesheet_directory_uri() . '/js/unslider-min.js', array(), '1.0.0', true );



        wp_register_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js' , array( 'jquery' ) );

        wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true );



    /* END JAVASCRIPT */





    function remove_lead( $length ) { // removed p.lead

      remove_filter( 'the_content', 'wp_bootstrap_first_paragraph' );

    }

    add_action( 'after_setup_theme', 'remove_lead' );







    add_action( 'init', 'codex_post_types_init' );



    function codex_post_types_init() {



        $labels = array(

            'name'               => _x( 'Story', 'post type general name', 'panabode-theme' ),

            'singular_name'      => _x( 'Story', 'post type singular name', 'panabode-theme' ),

            'menu_name'          => _x( 'Stories', 'admin menu', 'panabode-theme' ),

            'name_admin_bar'     => _x( 'Stories', 'add new on admin bar', 'panabode-theme' ),

            'add_new'            => _x( 'Add New', 'Story', 'panabode-theme' ),

            'add_new_item'       => __( 'Add New Story', 'panabode-theme' ),

            'new_item'           => __( 'New Story', 'panabode-theme' ),

            'edit_item'          => __( 'Edit Story', 'panabode-theme' ),

            'view_item'          => __( 'View Story', 'panabode-theme' ),

            'all_items'          => __( 'All Stories', 'panabode-theme' ),

            'search_items'       => __( 'Search Stories', 'panabode-theme' ),

            'parent_item_colon'  => __( 'Parent Stories:', 'panabode-theme' ),

            'not_found'          => __( 'No Project found.', 'panabode-theme' ),

            'not_found_in_trash' => __( 'No Project found in Trash.', 'panabode-theme' )

        );



        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'story' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => null,

            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )

        );



        register_post_type( 'story', $args );





        $labels = array(

            'name'               => _x( 'Project', 'post type general name', 'panabode-theme' ),

            'singular_name'      => _x( 'Project', 'post type singular name', 'panabode-theme' ),

            'menu_name'          => _x( 'Projects', 'admin menu', 'panabode-theme' ),

            'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'panabode-theme' ),

            'add_new'            => _x( 'Add New', 'Project', 'panabode-theme' ),

            'add_new_item'       => __( 'Add New Project', 'panabode-theme' ),

            'new_item'           => __( 'New Project', 'panabode-theme' ),

            'edit_item'          => __( 'Edit Project', 'panabode-theme' ),

            'view_item'          => __( 'View Project', 'panabode-theme' ),

            'all_items'          => __( 'All Projects', 'panabode-theme' ),

            'search_items'       => __( 'Search Projects', 'panabode-theme' ),

            'parent_item_colon'  => __( 'Parent Project:', 'panabode-theme' ),

            'not_found'          => __( 'No Project found.', 'panabode-theme' ),

            'not_found_in_trash' => __( 'No Project found in Trash.', 'panabode-theme' )

        );



        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'project' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => null,

            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )

        );



        register_post_type( 'project', $args );




        $labels = array(

            'name'               => _x( 'Homes', 'post type general name', 'panabode-theme' ),

            'singular_name'      => _x( 'Home', 'post type singular name', 'panabode-theme' ),

            'menu_name'          => _x( 'Homes', 'admin menu', 'panabode-theme' ),

            'name_admin_bar'     => _x( 'Home', 'add new on admin bar', 'panabode-theme' ),

            'add_new'            => _x( 'Add New', 'Home', 'panabode-theme' ),

            'add_new_item'       => __( 'Add New Home', 'panabode-theme' ),

            'new_item'           => __( 'New Home', 'panabode-theme' ),

            'edit_item'          => __( 'Edit Home', 'panabode-theme' ),

            'view_item'          => __( 'View Home', 'panabode-theme' ),

            'all_items'          => __( 'All Homes', 'panabode-theme' ),

            'search_items'       => __( 'Search Homes', 'panabode-theme' ),

            'parent_item_colon'  => __( 'Parent Home:', 'panabode-theme' ),

            'not_found'          => __( 'No Home found.', 'panabode-theme' ),

            'not_found_in_trash' => __( 'No Home found in Trash.', 'panabode-theme' )

        );



        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'home' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => null,

            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

        );



        register_post_type( 'home', $args );



        $labels = array(

            'name'               => _x( 'Testimonials', 'post type general name', 'panabode-theme' ),

            'singular_name'      => _x( 'Testimonial', 'post type singular name', 'panabode-theme' ),

            'menu_name'          => _x( 'Testimonials', 'admin menu', 'panabode-theme' ),

            'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'panabode-theme' ),

            'add_new'            => _x( 'Add New', 'Testimonial', 'panabode-theme' ),

            'add_new_item'       => __( 'Add New Testimonial', 'panabode-theme' ),

            'new_item'           => __( 'New Testimonial', 'panabode-theme' ),

            'edit_item'          => __( 'Edit Testimonial', 'panabode-theme' ),

            'view_item'          => __( 'View Testimonial', 'panabode-theme' ),

            'all_items'          => __( 'All Testimonials', 'panabode-theme' ),

            'search_items'       => __( 'Search Testimonials', 'panabode-theme' ),

            'parent_item_colon'  => __( 'Parent Testimonial:', 'panabode-theme' ),

            'not_found'          => __( 'No Testimonials found.', 'panabode-theme' ),

            'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'panabode-theme' )

        );



        $args = array(

            'labels'             => $labels,

            'public'             => true,

            'publicly_queryable' => true,

            'show_ui'            => true,

            'show_in_menu'       => true,

            'query_var'          => true,

            'rewrite'            => array( 'slug' => 'testimonial' ),

            'capability_type'    => 'post',

            'has_archive'        => true,

            'hierarchical'       => false,

            'menu_position'      => null,

            'supports'           => array( 'title', 'editor', 'thumbnail' )

        );



        register_post_type( 'testimonial', $args );



    }



    add_action( 'init', 'create_book_taxonomies', 0 );



    function create_book_taxonomies() {

      $labels = array(

        'name'              => _x( 'Types', 'taxonomy general name' ),

        'singular_name'     => _x( 'Type', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Types' ),

        'all_items'         => __( 'All Types' ),

        'parent_item'       => __( 'Parent Type' ),

        'parent_item_colon' => __( 'Parent Type:' ),

        'edit_item'         => __( 'Edit Type' ),

        'update_item'       => __( 'Update Type' ),

        'add_new_item'      => __( 'Add New Type' ),

        'new_item_name'     => __( 'New Type Name' ),

        'menu_name'         => __( 'Type' ),

      );

      $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'type' ),

      );

      register_taxonomy( 'type', array( 'home' ), $args );

    }



    add_action( 'init', 'create_project_taxonomies', 0 );



    function create_project_taxonomies() {

      $labels = array(

        'name'              => _x( 'Project Types', 'taxonomy general name' ),

        'singular_name'     => _x( 'Project Type', 'taxonomy singular name' ),

        'search_items'      => __( 'Search Project Types' ),

        'all_items'         => __( 'All Project Types' ),

        'parent_item'       => __( 'Parent Project Type' ),

        'parent_item_colon' => __( 'Parent Project Type:' ),

        'edit_item'         => __( 'Edit Type' ),

        'update_item'       => __( 'Update Type' ),

        'add_new_item'      => __( 'Add New Type' ),

        'new_item_name'     => __( 'New Type Name' ),

        'menu_name'         => __( 'Type' ),

      );

      $args = array(

        'hierarchical'      => true,

        'labels'            => $labels,

        'show_ui'           => true,

        'show_admin_column' => true,

        'query_var'         => true,

        'rewrite'           => array( 'slug' => 'type' ),

      );

      register_taxonomy( 'project_types', array( 'project' ), $args );

    }


function my_acf_init() {
  
  acf_update_setting('google_api_key', 'AIzaSyCqE89xtEK7U1DdElmJek5s2KnrYj_PikM');
}

add_action('acf/init', 'my_acf_init');

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}


?>
