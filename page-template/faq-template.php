<?php
/**
 * Template Name: Faq Template
*/
get_header(); 
get_template_part( 'template-parts/banner' );?>
<div id="faq" class="faq_page_template pt-0">
	<div class="container">
    <div class="faq-content ">
      <div class="row position-relative" data-aos="fade-up" data-aos-duration="2000">
        <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) { ?>
        <div class="accordion row mt-3" id="accordionfaq" data-aos="zoom-in" data-aos-duration="2000">
          <?php
            $args = array(
              'post_type' => 'faq',
              'post_status' => 'publish',
              'order' => 'ASC',
            );
            $faq_query = new WP_Query($args);

            $left_column = [];
            $right_column = [];

            if ($faq_query->have_posts()) {
              $i = 1;
              while ($faq_query->have_posts()) {
                $faq_query->the_post();
                $faq_data = array(
                  'id' => $i,
                  'title' => get_the_title(),
                  'content' => get_the_content(),
                  'is_open' => ($i == 2) ? true : false, // Only FAQ #2 open by default
                );
                if ($i <= 6) {
                  $left_column[] = $faq_data;
                } else {
                  $right_column[] = $faq_data;
                }
                $i++;
              }
              wp_reset_postdata();
            }
            ?>

            <div class="row">
              <!-- Left Column -->
              <div class="col-lg-6 col-md-6">
                <div class="accordion" id="accordionLeft">
                  <?php foreach ($left_column as $faq): ?>
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="heading<?php echo esc_attr($faq['id']); ?>">
                        <button class="accordion-button <?php echo $faq['is_open'] ? '' : 'collapsed'; ?>" type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse<?php echo esc_attr($faq['id']); ?>"
                          aria-expanded="<?php echo $faq['is_open'] ? 'true' : 'false'; ?>"
                          aria-controls="collapse<?php echo esc_attr($faq['id']); ?>">
                          <?php echo esc_html($faq['title']); ?>
                        </button>
                      </h4>
                      <div id="collapse<?php echo esc_attr($faq['id']); ?>"
                        class="accordion-collapse collapse <?php echo $faq['is_open'] ? 'show' : ''; ?>"
                        data-bs-parent="#accordionLeft">
                        <div class="accordion-body">
                          <?php echo wp_kses_post($faq['content']); ?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Right Column -->
              <div class="col-lg-6 col-md-6">
                <div class="accordion" id="accordionRight">
                  <?php foreach ($right_column as $faq): ?>
                    <div class="accordion-item">
                      <h4 class="accordion-header" id="heading<?php echo esc_attr($faq['id']); ?>">
                        <button class="accordion-button collapsed" type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapse<?php echo esc_attr($faq['id']); ?>"
                          aria-expanded="false"
                          aria-controls="collapse<?php echo esc_attr($faq['id']); ?>">
                          <?php echo esc_html($faq['title']); ?>
                        </button>
                      </h4>
                      <div id="collapse<?php echo esc_attr($faq['id']); ?>"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionRight">
                        <div class="accordion-body">
                          <?php echo wp_kses_post($faq['content']); ?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>


        </div>
      <?php } else { ?>
      <h4 class="post-type-msg text-center"><?php echo esc_html('Please install Internet Service Provider Pro Posttype and add your Faq to enable this section','internet-service-provider-pro')?></h4>
      <?php }?>

      </div>
     
    </div>
  </div>
</div>
<?php get_footer(); ?>
