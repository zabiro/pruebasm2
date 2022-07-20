<?php
/**
* Plantilla para todas las páginas
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();?>

<main class="main-content">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- Preview Image -->
            <?php the_post_thumbnail('destacada',array( 'class' => 'img-fluid rounded' )); ?>
            <!-- Post Content -->
            <?php the_content(); ?>
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
            <h2 class="titulosh2"><span id="linea-green"> Contáctanos </span></h2>
        </div>



    </div>

</main>


<a class="flotante-ws" href="https://wa.me/573175049753/?text=Hola%20me%20interesa" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<?php get_footer();