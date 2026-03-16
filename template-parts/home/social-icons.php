<?php
/**
 *   The Template for displaying Social Icons.
 */
 if( get_theme_mod('internet_service_provider_pro_headertwitter') != '' || get_theme_mod('internet_service_provider_pro_headerinstagram') != '' || get_theme_mod('internet_service_provider_pro_headerfacebook') != '' || get_theme_mod('internet_service_provider_pro_headeryoutube') != '' || get_theme_mod('internet_service_provider_pro_headerpinterest') != '' || get_theme_mod('internet_service_provider_pro_headerlinkedin') != '' || get_theme_mod('internet_service_provider_pro_headertumblric') != '' || get_theme_mod('internet_service_provider_pro_headerflickr') != '' || get_theme_mod('internet_service_provider_pro_headervk') != ''){ ?>
<div class="top_social">
    <div class="socialbox">
        <?php if( get_theme_mod('internet_service_provider_pro_headerfacebook') != '' ){ ?>
        <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headerfacebook' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headerfacebook_icon', 'fab fa-facebook-f')); ?>"
                aria-hidden="true"></i></a>
        <?php } ?>
         <?php if( get_theme_mod('internet_service_provider_pro_headerinstagram') != '' ){ ?>
        <a class="insta" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headerinstagram' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headerinstagram_icon', 'fab fa-instagram')); ?> "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headertwitter') != '' ){ ?>
        <a class="twitter" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headertwitter' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headertwitter_icon', 'fab fa-twitter')); ?> "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headeryoutube') != '' ){ ?>
        <a class="youtube"
            href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headeryoutube','https://www.youtube.com' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headeryoutube_icon', 'fab fa-youtube')); ?> "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headerlinkedin') != '' ){ ?>
        <a class="linkedin" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headerlinkedin' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headerlinkedin_icon', 'fab fa-linkedin-in')); ?> "
                aria-hidden="true"></i></a>
        <?php } ?>
       
        <?php if( get_theme_mod('internet_service_provider_pro_headerpinterest') != '' ){ ?>
        <a class="pintrest" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headerpinterest' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headerpinterest_icon', 'fab fa-pinterest-p')); ?>  "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headertumblric') != '' ){ ?>
        <a class="tumbler" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headertumblric' ) ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headertumblr_icon', 'fab fa-tumblr')); ?> "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headerflickr') != '' ){ ?>
        <a class="flicker" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headerflickr') ); ?>"
            target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headerflickr_icon', 'fab fa-flickr')); ?>  "
                aria-hidden="true"></i></a>
        <?php } ?>
        <?php if( get_theme_mod('internet_service_provider_pro_headervk') != '' ){ ?>
        <a class="vk" href="<?php echo esc_url( get_theme_mod( 'internet_service_provider_pro_headervk') ); ?>" target="_blank"><i
                class="<?php echo esc_html(get_theme_mod('internet_service_provider_pro_headervk_icon', 'fab fa-vk')); ?>  "
                aria-hidden="true"></i></a>
        <?php } ?>
    </div>
</div>
<?php } ?>