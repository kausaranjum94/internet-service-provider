<?php
/**
 * The Template for displaying all single posts.
 *
 * @package internet-service-provider-pro
 */
	get_header();
	get_template_part( 'template-parts/banner' );

	$terms = get_the_terms( get_the_ID(), 'category' );
		$posts_category_var = array();
		foreach ( $terms as $term ) {
		$posts_category_var[] = $term->name;
		}
		$posts_category_name = join( ", ", $posts_category_var );

		$current_user = wp_get_current_user();

        $date_svg = file_get_contents(get_template_directory_uri().'/assets/images/date.svg');
        $admin_svg = file_get_contents(get_template_directory_uri().'/assets/images/admin.svg');
        $catgory_svg = file_get_contents(get_template_directory_uri().'/assets/images/category.svg');

?>

<?php	while ( have_posts() ) : the_post(); ?>
<section id="single-post">
    <div class="container">
        <div class="row">
            <div class="single-post-img">
                <?php if ( has_post_thumbnail() ) { ?>
                <div class="single-post-img">
                    <?php the_post_thumbnail();?>
                </div>
                <?php } ?>
            </div>
            
            <div class="post-content-wrap">
                <div class="post-meta py-3">
                    <div class="d-flex justify-content-between align-items-center post-meta-inner">
                        <div class="single-post-author">
                            <?php if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_author',true) == "1" ) { ?>
                            <div
                                class="entry-autho gap-2 d-flex align-items-center justify-content-lg-start justify-content-md-start justify-content-center ">
                                <img class="single-author-image"
                                    src="<?php echo esc_url( get_avatar_url( $current_user->ID ) ); ?>">
                                <p class="author-name mb-0 ">
                                    <?php the_author(); ?>
                                </p>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="single-post-date">
                            <?php if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_date',true) == "1" ) { ?>
                                <div class="entry-date meta-heading">
                                    <?php echo get_the_date( 'F j , Y' ); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="single-post-comment">
                            <?php if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_comments',true) == "1" ) { ?>
                            <div class="entry-comments">
                                <a href="#comments">
                                    <a href="#comments" class="meta-heading">
                                        <?php
                                                                $get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
                                                                    echo $get_comments_number . ' Comments'; ?>
                                    </a>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    
                    </div>
                </div>
                <div class="single-blog-content">
                    <?php the_content(); ?>
                </div>
                  <div class="post-meta-wrap d-flex align-items-center justify-content-between">

                    <?php 
                    if ( 
                        get_theme_mod('internet_service_provider_pro_post_general_settings_category_setting', true) == "1" 
                        && !empty($posts_category_name) 
                    ) { 
                    ?>
                        <div class="single-post-category">
                            <p class="mb-0 meta-heading">
                                <span>
                                    <?php echo esc_html($posts_category_name); ?>
                                </span>
                            </p>
                        </div>
                    <?php 
                    } 
                    ?>


                    <div class="single-post-icons">
                        <?php if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_share',true) ) {
                            if ( function_exists('internet_service_provider_pro_social_share') ) {
                                internet_service_provider_pro_social_share();
                            }
                        } ?>
                    </div>
                </div>
                <div class="single-post-comment mt-4 mb-5">
                    <?php
                        if ( comments_open() || '0' != get_comments_number() ) {
                                comments_template();
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-8 col-md-8">
                <?php if(get_theme_mod('internet_service_provider_pro_recent_blog_heading')!=''){ ?>
                <h2 class="main-head  text-center">
                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_recent_blog_heading')); ?></h2>
                <?php } ?>
                <?php if(get_theme_mod('internet_service_provider_pro_recent_blog_paragraph')!=''){ ?>
                <p class="theme-para  mb-md-0  mb-2  text-center">
                    <?php echo esc_html(get_theme_mod('internet_service_provider_pro_recent_blog_paragraph')); ?></p>
                <?php } ?>
            </div>
            <div class="recent-blogs mt-3 pt-3">
                <?php if(get_theme_mod('internet_service_provider_pro_single_post_page_related_post_heading')!=''){ ?>
                    <h3 class="mb-md-3 mb-lg-5 text-center">
                        <?php echo esc_html(get_theme_mod('internet_service_provider_pro_single_post_page_related_post_heading')); ?>
                    </h3>
                <?php } ?>
                <div class="row">
                    <?php
                        $args = array(
                        'post_type' => 'post',
                        'tax_query' => array(
                                array(
                                        'taxonomy' => 'category',
                                        'field'    => 'term_id',
                                        'terms'    => wp_get_post_terms( get_the_ID(), 'category', array( 'fields' => 'ids' ) ),
                                )
                        ),
                        'posts_per_page' => 3,
                        'post__not_in'   => array( get_the_ID() )
                    );
                    $new = new WP_Query($args);
                    $loop_index = 0; $i=1;
                        while ( $new->have_posts() ){
                        $new->the_post();

                        $post_id = get_the_ID();

                        $assigned_category = get_the_terms( $post_id, 'category' );

                        $assigned_category_name = '';$category_link = '#';
                        if (!empty($assigned_category)) {
                            $assigned_category_name = $assigned_category[0]->name;
                            $category_link = get_category_link( $assigned_category[0]->term_id );
                        }

                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                            <div class="news-box" data-aos="zoom-in-up" data-aos-duration="2000">
                                <div class="news-box-block">
                                    <div class="post-image-block">
                                    <?php
                                        if(has_post_thumbnail()){
                                        the_post_thumbnail(); 
                                        }
                                    ?>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-content-inner">
                                            <h5 class="p-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                            <div class="meta-details d-flex align-items-center">
                                                <div class="entry-date meta-heading">
                                                    <?php the_author(); ?>
                                                </div>
                                                <span class="seperator"></span>
                                                <?php if ( get_theme_mod('internet_service_provider_pro_post_general_settings_post_date',true) == "1" ) { ?>
                                                    <div class="entry-date meta-heading">
                                                        <?php echo get_the_date( 'F j , Y' ); ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="news-text">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; }
                        wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer();