<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>



<div class="col-xs-12 col-sm-6">
    <div class="card-trabalho"> 
        <a href="<?php echo get_post_permalink(); ?>">
            <div>
               
                <?php the_title('<h2>', '</h2>') ?>
                
                <?php the_post_thumbnail('thumb-trabalhos'); ?>

                <?php the_excerpt(); ?>
            </div>
        </a>
    </div>

</div>




