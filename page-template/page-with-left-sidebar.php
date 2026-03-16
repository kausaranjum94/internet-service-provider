<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('internet_service_provider_pro_before_page'); ?>
<section id="page-with-left-sidebar">
    <div class="container">
      <div class="middle-align">
        <div class="row">
          <div class="col-lg-4 col-md-5" id="sidebar">
            <?php dynamic_sidebar('sidebar-2'); ?>
          </div>
          <div class="col-lg-8 col-md-7 content_page">
              <?php while ( have_posts() ) : the_post(); ?>
                 <?php the_content();?>
                 <?php
                 //If comments are open or we have at least one comment, load up the comment template
                  if ( comments_open() || '0' != get_comments_number() )
                      comments_template();
                 ?>
               <?php endwhile; // end of the loop. ?>
           </div>
           <div class="clear"></div>
        </div>
      </div>
    </div>
</section>
<?php do_action('internet_service_provider_pro_after_page'); ?>

<?php get_footer(); ?>
