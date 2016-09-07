<?php

/*
 * Template name: Template Land & Townhouse
 */
?>

<?php

$pageName = "como-podemos-ajudar";

$the_query = new WP_Query("pagename={$pageName}");
?>

<?php if ($the_query->have_posts()): ?>

    <?php while ($the_query->have_posts()) : ?>
        <?php $the_query->the_post(); ?>

        <section id="como-podemos-ajudar" <?php post_class(); ?>>
                        
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                                
                        <?php the_content();?>
                                                   
                    </div>
                    
                    <div class="servicos">
                    
                    <div class="col-xs-12 col-sm-4 text-center">
                        
                        <i class="fa fa-users a-5x" aria-hidden="true"></i>
                                                
                        <h3><?php echo get_field('col_01');?></h3>
                                                   
                    </div>
                    <div class="col-xs-12 col-sm-4 text-center">
                        
                        <i class="fa fa-code a-5x" aria-hidden="true"></i>
                                                
                        <h3><?php echo get_field('col_02');?></h3>
                                                   
                    </div>
                    <div class="col-xs-12 col-sm-4 text-center">
                        
                        <i class="fa fa-graduation-cap a-5x" aria-hidden="true"></i>
                                                
                        <h3><?php echo get_field('col_03');?></h3>
                                                   
                    </div>
                    </div>
                    
                </div>
                
            </div>
            

        </section>


    <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>


