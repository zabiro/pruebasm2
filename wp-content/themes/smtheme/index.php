<?php
/**
* Plantilla para todas las páginas
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<main class="main-content">
    <div class="row bannerprincipal">
        <div class="col-12">
            <h2>
                Actualidad
            </h2>
            <h1>
                Digital
            </h1>
            <h3>
                Tendencias, investigación y análisis del mundo del marketing y la tecnología, desarrollados por nuestros
                especialistas.
            </h3>
            <div class="divisorverde">

            </div>

            <img class="mx-auto" src="http://localhost/pruebasm/wp-content/uploads/2022/07/line-next.png" alt="">

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Title -->
            <h1 class="mt-4"><?php the_title(); ?></h1>
            <!-- Author -->
            <p class="lead">
                Por
                <?php the_author(); ?>
            </p>
            <!-- Date/Time -->
            <p>Publicado <?php the_date();?> </p>
            <!-- Preview Image -->
            <?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
            <!-- Post Content -->
            <?php the_content(); ?>
            <hr>
            <?php endwhile; else : ?>
            <p>Lo siento, no hemos encontrado ningún post.</p>
            <?php endif; ?>

            <nav aria-label="Pagination">
                <nav class="sm-paginacion">
                    <?php echo paginate_links(); ?>
                </nav>
            </nav>
        </div>

        <aside class="col-12 col-sm-6 col-md-3">
            <?php get_sidebar(); ?>
        </aside>

    </div>

    <div class="row">
        <div class="col-12">

            <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('contacto') ) : ?>
            <?php endif; ?>
        </div>


    </div>

</main>


<a class="flotante-ws" href="https://wa.me/573175049753/?text=Hola%20me%20interesa" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php get_footer();



	