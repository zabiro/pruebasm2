<footer class="py-5 bg-dark">
    <div class="row acomodoflex">
        <div class="col-md-4">
            <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('subfooterleft') ) : ?>
            <?php endif; ?>

        </div>
        <div class="col-md-4">
            <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('subfootercenter') ) : ?>
            <?php endif; ?>

        </div>
        <div class="col-md-4">
            <div class="redes-sociales">
                <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('subfooterright') ) : ?>
                <?php endif; ?>


            </div>
        </div>
    </div>
    </div>


    <!-- /.container -->
</footer>

<?php wp_footer();?>


</body>

</html>