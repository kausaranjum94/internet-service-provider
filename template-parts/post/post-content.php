<?php
  $content_type = get_theme_mod( 'internet_service_provider_pro_post_content_blog','Excerpt Content');
  $excerpt_length="";
  if($content_type == "Excerpt Content"){
    $excerpt_length=get_theme_mod( 'internet_service_provider_pro_excerpt_length',15);
  }
  $date_svg = file_get_contents(get_template_directory_uri().'/assets/images/date.svg');
  $admin_svg = file_get_contents(get_template_directory_uri().'/assets/images/admin.svg');
  $catgory_svg = file_get_contents(get_template_directory_uri().'/assets/images/category.svg');

  $post_id = get_the_ID();

  $assigned_category = get_the_terms( $post_id, 'category' );

 $assigned_category_name = '';$category_link = '#';
 if (!empty($assigned_category)) {
   $assigned_category_name = $assigned_category[0]->name;
   $category_link = get_category_link( $assigned_category[0]->term_id );
  }
?>
<div class="col-xl-6 col-lg-6 col-md-6 mb-4">
    <div class="news-box <?php echo esc_attr($amp_class); ?>" data-aos="zoom-in-up" data-aos-duration="2000">
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