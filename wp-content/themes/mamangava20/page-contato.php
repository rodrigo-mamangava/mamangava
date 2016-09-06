<?php

/*
 * Template name: Template Land & Townhouse
 */
?>

<?php

$pageName = "contato";

$the_query = new WP_Query("pagename={$pageName}");
?>

<?php if ($the_query->have_posts()): ?>

    <?php while ($the_query->have_posts()) : ?>
        <?php $the_query->the_post(); ?>

        <section id="contato" <?php post_class(); ?>>
                        
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-xs-12 center-block text-center">
                                                
                        <?php the_content();?>
                                                   
                    </div>
                    
                </div>
                
            </div>
            

        </section>


    <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>


