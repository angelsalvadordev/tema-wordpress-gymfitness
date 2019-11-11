<?php get_header(); ?>
<main class="contenedor page section with-sidebar">
  <div class="main-content">
  <?php 
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
  ?>
        <h1 class="text-center primary-text"><?php the_title(); ?></h1>
        <?php 
          if(has_post_thumbnail()):
            the_post_thumbnail('blog', array('class'=>'featured-image'));
          endif;
        ?>
        <p><?php the_content(); ?></p>
        <span><?php the_author(); ?></span> -
        <span><?php the_date(); ?></span> 
  <?php 
      endwhile; 
    endif;
  ?>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>