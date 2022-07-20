<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg  ">
        <div class="container">


            <?php
 //Verificar que exista compatibilidad con logos personaliazados
 if( function_exists( 'the_custom_logo' ) ) {
    //Verificar que esté configurado el logo en el personalizador de WordPress
    if(has_custom_logo()) {
        //Si está configurado, mostrarki
        the_custom_logo();
    }
    // Sino, mostrar el logo predeterminado.
    else {
        echo get_template_directory_uri().'https://cdn.smdigital.com.co/agency/uploads/2021/07/27110616/logo-smdigital.png';
    }
  }
        ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <?php

$menusmdigital = array(
    'menu'            => 'menu-principal',
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarResponsive',
    'menu_class'      => 'navbar-nav ml-auto',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'item_spacing'    => 'preserve',
    'depth'           => 0,
    'walker'          => '',
    'theme_location'  => '',
);
wp_nav_menu($menusmdigital);
?>

        </div>
    </nav>
    <?php wp_body_open(); ?>