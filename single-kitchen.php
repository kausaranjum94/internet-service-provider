<?php
/**
 * The Template for displaying all single kitchen.
 *
 * @package internet-service-provider-pro
 */
get_header();
get_template_part('template-parts/banner'); 
?>
<div class="container">
    <div id="single-kitchen">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-7 col-sm-12 col-lg-8 col-xs-12">
                    <div class="inner-page-feature-box">
                        <?php if(has_post_thumbnail()){ ?>
                            <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?> post thumbnail">
                        <?php } ?>
                    </div>
                    <div class="single-page-content mt-3"><?php the_content();?></div>
                </div>
                <div class="col-md-5 col-sm-12 col-lg-4 col-xs-12" id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>