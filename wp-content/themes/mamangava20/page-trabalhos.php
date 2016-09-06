<?php
/*
 * Template name: Template Trabalhos
 */
?>

<?php
$args = array(
    'post_type' => array('trabalho'),
    'posts_per_page' => 9999,
    'order' => 'DESC',
    'orderby' => 'date',
);
?>

<section id="trabalhos" <?php post_class(); ?>>

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="row">

                    <?php
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();

                            get_template_part('template-parts/content', 'trabalho');


                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>



                </div>
            </div>

        </div>

    </div>


</section>



