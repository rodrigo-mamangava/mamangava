<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<section  <?php post_class(); ?> >
    
    <?php the_title('<h1>', '</h1>')?>
    
    <?php the_content()?>
    
    
    <a href="<?php echo get_post_meta( get_the_ID(), 'link', true); ?>" target="_blank" >Link para o projeto em produção</a>
    
</section>
