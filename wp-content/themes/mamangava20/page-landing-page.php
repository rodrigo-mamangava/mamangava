<?php

/*
 * Template name: Template Land & Townhouse
 */
?>

<?php

$pageName = "landing-page";

$the_query = new WP_Query("pagename={$pageName}");
?>

<?php if ($the_query->have_posts()): ?>

    <?php while ($the_query->have_posts()) : ?>
        <?php $the_query->the_post(); ?>

        <section id="landing-page" <?php post_class(); ?>>
                        
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-4 col-sm-offset-2">
                                                
                        <img class="" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        
                                                   
                    </div>
                    <div class="col-xs-12 col-sm-4 descricao">
                                                
                        <?php the_content();?>
                                                   
                    </div>
                    <div class="col-xs-12 text-center seta">
                                                
                        <a href="#como-podemos-ajudar">
                            <img src="<?php echo get_template_directory_uri() ?>/image/seta_baixo.png">
                        </a>                         
                    </div>
                    
                </div>
                
            </div>
            

        </section>


    <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>


