<?php
  /*
  * Template part for the custom filters
  *
  */
?>

<div class="accordion shop-page-filters" id="accordionExample1">
  <!-- search start -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
        <?php echo esc_html('Search', 'internet-service-provider-pro'); ?>
      </button>
    </h2>
    <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        <label class="mb-2 position-relative ct-search">
          <input class="category-filter-search" type="text" name="products_search" placeholder="Search..."/>

        </label>
      </div>
    </div>
  </div>
  <!-- search end -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <?php echo esc_html('Filter', 'internet-service-provider-pro'); ?>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        <label>
          <div class="shop-filter">
          <div class="product-filter-parent-container">
            <div class="d-flex justify-content-between range-div mb-2">
              <span id="product-amount-start"></span>
              <span id="product-amount-end"></span>
              <span id="product-amount-final"></span>
            </div>
            <div id="product-price-slider"></div>

          </div>
        </div>
        </label>
      </div>
    </div>
  </div>

  <!-- categories start  -->
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
        <?php echo esc_html('Categories', 'internet-service-provider-pro'); ?>
      </button>
    </h2>
    <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        <?php

          $terms = get_terms( array(
            'post_type' => 'product',
            'taxonomy' => 'product_cat',
            'hide_empty' => true,

          ));
        ?>
        <ul class="shop-page-produts-category list-unstyled">
          <?php
          foreach ($terms as $term_value) {
            //remove uncategorized from loop
            if( $term_value->slug == 'uncategorized' ){
              continue;
            } ?>

            <li class="">
              <label class="d-flex gap-3 mb-3">
                <input class="category-filter-checkbox" type="checkbox" name="products_categories" value="<?php echo $term_value->term_id; ?>" />
                <span class="align-self-center"><?php echo $term_value->name; ?></span>
              </label>

            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- categories for end  -->

</div>
