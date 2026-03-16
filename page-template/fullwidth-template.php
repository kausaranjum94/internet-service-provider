<?php
/**
 * Template Name: Full Width Template
*/
get_header(); 
get_template_part( 'template-parts/banner' );?>
<div id="fullwidth-template">
  <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
