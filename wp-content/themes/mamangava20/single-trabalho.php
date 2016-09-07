<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mamangava20
 */
get_header('single');
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'single');

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </div>
    </div>
</div>


<?php
get_footer();
