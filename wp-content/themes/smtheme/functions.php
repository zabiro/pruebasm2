<?php

//Tamaño de imagen 
add_image_size( 'destacada', 750, 300,true );

// Etiqueta de titulo 
add_theme_support( 'title-tag' );



function sm_cssjs() {
  
    wp_enqueue_style( 'sm-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'sm-bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'sm-stylemin', get_template_directory_uri() . '/css/styles.min.css' );
    wp_enqueue_style( 'sm-fontawesome', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_script( 'sm-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min', array( 'jquery' ), '', true );
    wp_enqueue_script( 'sm-js', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'sm-fontawesome', get_template_directory_uri() . '/js/all.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'sm_cssjs' );



// Removes some links from the header
// function sm_remove_headlinks() {
//     remove_action( 'wp_head', 'wp_generator' );
//     remove_action( 'wp_head', 'rsd_link' );
//     remove_action( 'wp_head', 'wlwmanifest_link' );
//     remove_action( 'wp_head', 'start_post_rel_link' );
//     remove_action( 'wp_head', 'index_rel_link' );
//     remove_action( 'wp_head', 'wp_shortlink_wp_head' );
//     remove_action( 'wp_head', 'adjacent_posts_rel_link' );
//     remove_action( 'wp_head', 'parent_post_rel_link' );
//     remove_action( 'wp_head', 'feed_links_extra', 3 );
//     remove_action( 'wp_head', 'feed_links', 2 );
//     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
//     remove_action( 'wp_print_styles', 'print_emoji_styles' );
// }
// add_action( 'init', 'sm_remove_headlinks' );


// logo

add_theme_support( 'custom-logo', array(
    //ALTO
    'height'      => 50,
    //ANCHO
    'width'       => 250,
    //PERMITIR FLEXIBILIDAD EN EL TAMAÑO
	'flex-height' => true,
    'flex-width'  => true,
    //
	'header-text' => array( 'site-title', 'site-description' ),
) );    

// menu
add_action( 'after_setup_theme', 'sm_registrar_menu' );
function sm_registrar_menu() {
    register_nav_menu( 'menu-principal', 'Menu Principal' );
}

// li para filtros del menu por uso del bs
add_filter('nav_menu_css_class' , 'sm_nav_class' , 10 , 2);
 
function sm_nav_class($classes, $item){
    $classes[] = 'nav-link';
    return $classes;
}

//REGISTRAR EL SIDEBAR
add_action( 'widgets_init', 'sm_registrar_sidebar' );
 
function sm_registrar_sidebar() {
    register_sidebar( array(
        'name' =>'Sidebar',
        'id' => 'sidebar-sm',
        'description' => 'Barra lateral del tema sm.',
        //DIVs del sidebar en documento HTML
        'before_widget' => '<div id="%1$s" class="col-12  %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>
        <div class="card-body">',
    ) );

    register_sidebar(array('name'=>'contacto'));
    register_sidebar(array('name'=>'subfooterleft'));
    register_sidebar(array('name'=>'subfootercenter'));
    register_sidebar(array('name'=>'subfooterright'));

}

?>

<?php

// Creating the widget
class wpb_widget extends WP_Widget {
 
    function __construct() {
    parent::__construct(
     
    // Base ID of your widget
    'wpb_widget', 
     
    // Widget name will appear in UI
    __('WPBeginner Widget', 'wpb_widget_domain'), 
     
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
    );
    }
     
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
     
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
     
    // This is where you run the code and display the output
    echo __( 'Hello, World!', 'wpb_widget_domain' );
    echo $args['after_widget'];
    }
     
    // Widget Backend
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
<p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
        name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
    }
     
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
    // Register and load the widget
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );

 
?>