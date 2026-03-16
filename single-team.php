<?php
/**
 * The Template for displaying all single team.
 *
 * @package buildora-architect-pro
 */
get_header();
get_template_part('template-parts/banner'); 
?>
<div class="container">
    <div id="single-team">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-7 col-sm-12 col-lg-8 col-xs-12">
                    <div class="inner-page-feature-box row">
                        <div class="col-lg-4 col-md-4">
                            <?php if(has_post_thumbnail()){ ?>
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?> post thumbnail">
                            <?php } ?>
                        </div>
                        <div class="col-lg-8 col-md-8 d-flex align-items-center">
                            <div class="team_inner">
                                <?php if(get_post_meta($post->ID,'meta-designation',true)) { ?>
                                    <p>
                                        <i class="fas fa-user"></i>
                                        <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?></p>
                                <?php } ?>
                                <?php if(get_post_meta($post->ID,'meta-team-email',true)) { ?>
                                    <p class="email">
                                        <i class="far fa-envelope"></i>
                                        <a href="mailto:<?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?>"><?php echo esc_html(get_post_meta($post->ID,'meta-team-email',true)); ?></a>
                                        
                                    </p>
                                <?php } if(get_post_meta($post->ID,'meta-team-phone',true)) { ?>
                                    <p class="phone">
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:<?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?>"><?php echo esc_html(get_post_meta($post->ID,'meta-team-phone',true)); ?></a>
                                    </p>
                                <?php } ?>
                                <div class="social-profiles">
                                    <?php if(get_post_meta($post->ID,'meta-team-facebookurl',true)) { ?>
                                        <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-team-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <?php }
                                    if(get_post_meta($post->ID,'meta-team-twitterurl',true)) { ?>
                                        <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-team-twitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php }
                                    if(get_post_meta($post->ID,'meta-team-linkdenurl',true)) { ?>
                                            <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-team-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <?php } 
                                        if(get_post_meta($post->ID,'meta-team-instagram',true)!= ''){ ?>
                                        <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-team-instagram',true)); ?>">
                                            <i class="fab fa-instagram align-middle" aria-hidden="true"></i>
                                        </a>
                                    <?php } if(get_post_meta($post->ID,'meta-team-pinterest',true)!= ''){ ?>
                                        <a href="<?php echo esc_html(get_post_meta($post->ID,'meta-team-pinterest',true)); ?>">
                                            <i class="fab fa-pinterest-p align-middle "></i><span class="screen-reader-text"><?php echo esc_html('pinterest', 'buildora-architect-pro' ) ; ?></span>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="single-page-content mt-3"><?php the_content();?></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-5 col-sm-12 col-lg-4 col-xs-12" id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>