<?php
 /*Template Name: tours
 */
 
get_header(); ?>


<div class="container tourspage">
    <div class="row">
        <div class="col-md-9 no-padding "> 
            <div id="doc" data-title="<?php the_title() ;?> " class="col-lg-10   "><h1><?php the_title(); ?></h1> <div> <?php the_category();?></div> </div> 
            <div class="col-md-12 ">
               asdf asdfas df <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                the_content(); 
                ?>
             </div> 
        </div> <?php endwhile; else: ?> <p><?php _e('Sorry, this page does not exist.','gremza22'); ?></p> <?php endif; ?> 
        <div class="rightside col-md-3">  <?php dynamic_sidebar( 'right_sidebar' ); ?>  
    </div>   
    </div> 
</div> 
<?php get_footer(); ?>
