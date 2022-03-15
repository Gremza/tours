<?php
get_header(); ?>  
<div class="row">	
	<?php echo do_shortcode( '[searchandfilter submit_label="Search" fields="tours_type,tours_destination,tours_valid" order_dir=",desc,desc,desc" order_by=",id,id,id" types=",select,select,select" ]	' ); ?>
	
<div class="container archivepage"> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class'	=> "img-responsive")); ?></a>
    </div> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h2 class="titull">  <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h2>
    </div> 
  </div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, this page does not exist.','gr_tours'); ?></p>
	 
          
<?php endif; ?> 
</div> 
</div> 
<div class="row">	
<div class="container  "> 
	</div> 
</div> 
<?php get_footer(); ?>