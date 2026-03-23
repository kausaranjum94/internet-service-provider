<?php
/**
 * The Template for displaying all single team.
 *
 * @package internet-service-provider-pro
 */
get_header();
get_template_part('template-parts/banner'); 
?>
<div class="container">
    <?php
        /**
         * Template for displaying single Service posts
         * Works for CPT: services
         */

        get_header();

        if(have_posts()):
            while(have_posts()): the_post();
                $price_text        = get_post_meta(get_the_ID(), '_price_text', true);
                $price             = get_post_meta(get_the_ID(), '_price', true);
                $short_description = get_post_meta(get_the_ID(), '_short_description', true);
                $bg                = get_post_meta(get_the_ID(), '_background_style', true);
                $images            = get_post_meta(get_the_ID(), '_customer_images', true);
                $images_array      = !empty($images) ? explode(',', $images) : array();
                $icon_class        = get_post_meta(get_the_ID(), '_link_icon_class', true);
                $icon_url          = get_post_meta(get_the_ID(), '_link_icon_url', true);
        ?>
        <div class="single-service-page">
            <div class="service-hero <?php echo esc_attr($bg); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <div class="service-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div class="service-header">
                    <h1 class="service-title"><?php the_title(); ?></h1>
                    <?php if(!empty($price_text) || !empty($price)): ?>
                        <div class="service-pricing">
                            <?php if(!empty($price_text)): ?>
                                <span class="start-now"><?php echo esc_html($price_text); ?></span>
                            <?php endif; ?>
                            <?php if(!empty($price)): ?>
                                <span class="start-now-pricing"><?php echo esc_html($price); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(!empty($icon_class) && !empty($icon_url)): ?>
                        <a class="service-link-icon" href="<?php echo esc_url($icon_url); ?>">
                            <i class="<?php echo esc_attr($icon_class); ?>"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="service-content">
                <?php if(!empty($short_description)): ?>
                    <p class="service-description"><?php echo esc_html($short_description); ?></p>
                <?php endif; ?>

                <div class="customer-image-box">
                    <div class="customer-image">
                        <?php 
                        $count = 0;
                        foreach($images_array as $id){
                            if($count >= 3) break;
                            echo wp_get_attachment_image((int) $id, 'thumbnail');
                            $count++;
                        }
                        ?>
                        <?php if(count($images_array) > 3): ?>
                            <span class="more-customer"><i class="fa-solid fa-plus"></i></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="service-body">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        endif; ?>
</div>
<?php get_footer(); ?>