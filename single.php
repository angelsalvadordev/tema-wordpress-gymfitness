<?php 
get_header();
if ( have_posts() ) : 
  while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <span><?php the_author(); ?></span> -
    <span><?php the_date(); ?></span>
<?php 
  endwhile; 
endif;
get_footer();  
?>