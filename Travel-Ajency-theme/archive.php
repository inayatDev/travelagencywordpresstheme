<?php get_header();?>
 <div class ="all_post_archive">
<?php
rewind_posts();
if (have_posts()) :
    while(have_posts()) : the_post();?>
        
        <div><?php the_post_thumbnail('thumbnail'); ?>
       <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
        </div>
       
    <?php endwhile;?>
<?php endif;?>
 </div>
<?php get_footer();?>