<?php
/**
 * License Expiry Timer for VW Online Review Pro Theme
 * 
 * Simple admin notice system for license expiry within 3 days
 * Uses existing whizzie.php constants
 * 
 * @package vw_online_review_pro
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Check if license is expiring soon (within 3 days)
 */
function vw_online_review_pro_check_license_expiry() {
        
    // Get license key from whizzie.php constants
    $license_key = ThemeWhizzie::get_the_theme_key();
    
    if (empty($license_key)) {
        return false;
    }
    
    // Check if constant is defined
    if (!defined('SHOPIFY_THEME_LICENCE_ENDPOINT')) {
        return false;
    }

    $body = wp_json_encode( array(
        'license_key'  => $license_key
    ) );
    
    $url = SHOPIFY_THEME_LICENCE_ENDPOINT . 'licenseByKey';
    // Make API request to VW Themes
    $response = wp_remote_post( $url, array(
        'body' => $body,
        'headers' => array(
            'Content-Type' => 'application/json'
        ),
        'timeout' => 3000,
        'sslverify' => false
    ));
    
    if (is_wp_error($response)) {
        return false;
    }
    
    $response_code = wp_remote_retrieve_response_code($response);
    $response_body = wp_remote_retrieve_body($response);
    
    if ($response_code !== 200) {
        return false;
    }
    
    $data = json_decode($response_body, true);
    
    if (json_last_error() !== JSON_ERROR_NONE || !isset($data['status']) || !$data['status']) {
        return false;
    }
    
    return $data['data'];
}

/**
 * Get days remaining until license expires
 */
function vw_online_review_pro_get_days_remaining() {
    $license_data = vw_online_review_pro_check_license_expiry();
    
    if (!$license_data || !isset($license_data['daysRemaining'])) {
        return null;
    }
    
    return intval($license_data['daysRemaining']);
}

/**
 * Update show expiry notice meta key
 */
function vw_online_review_pro_set_login_flag($user_login, $user) {
    update_user_meta($user->ID, 'vw_online_review_pro_show_popup', true);
    update_option('vw_online_review_pro_expiry_notice_dismissed', false);
}
add_action('wp_login', 'vw_online_review_pro_set_login_flag', 10, 2);

/**
 * Check if we should show expiry notice
 */
function vw_online_review_pro_should_show_expiry_notice() {
        
    // Check if notice was dismissed
    if (get_option('vw_online_review_pro_expiry_notice_dismissed', false)) {
        return false;
    }
    
    // Check if license is valid
    if (ThemeWhizzie::get_the_validation_status() !== 'true') {
        return false;
    }

    $user_id = get_current_user_id();
    if (!$user_id) {
        return false;
    }

    // Show popup only once after login
    $should_show = get_user_meta($user_id, 'vw_online_review_pro_show_popup', true);

    if (!$should_show) {
        return false;
    }
    
    // Check if license expires within 3 days
    $days_remaining = vw_online_review_pro_get_days_remaining();
    return $days_remaining !== null && $days_remaining <= 3 && $days_remaining > 0;
}

/**
 * Display license expiry notice
 */
function vw_online_review_pro_display_expiry_notice() {
    if (!vw_online_review_pro_should_show_expiry_notice()) {
        return;
    }
    
    $license_data = vw_online_review_pro_check_license_expiry();
    if (!$license_data) {
        return;
    }
    
    $days_remaining = intval($license_data['daysRemaining']);
    $product_title = isset($license_data['productTitle']) ? esc_html($license_data['productTitle']) : 'VW Online Review Pro';
    $add_to_cart_link = isset($license_data['addToCartLink']) ? esc_url($license_data['addToCartLink']) : 'https://www.vwthemes.com';
    
    // Calculate hours, minutes, seconds for the current day
    $current_time = current_time('timestamp');
    $end_of_day = strtotime('tomorrow', $current_time) - 1;
    $time_left_today = $end_of_day - $current_time;
    
    $hours = floor($time_left_today / 3600);
    $minutes = floor(($time_left_today % 3600) / 60);
    $seconds = $time_left_today % 60;
    
    ?>
    <div class="vw-license-expiry-popup" style="display: none;">
        <div class="popup-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/license-banner.png)">
            <div class="close-btn vw-close-popup"><span class="dashicons dashicons-no-alt"></span></div>
            <h3>⚠️ Your License is About to Expire!</h3>
            <div class="counter-wrap">
                <div class="counter-inner">
                    <div class="counter-no-inner">
                        <div class="counter-no"><div class="dotl"></div><span id="countdown-days"><?php echo str_pad($days_remaining, 2, '0', STR_PAD_LEFT); ?></span><div class="dotr"></div></div>  
                    </div>
                    <h6>Days</h6>
                </div>       
                <div class="counter-inner">
                    <div class="counter-no-inner">
                        <div class="counter-no"><div class="dotl"></div><span id="countdown-hours"><?php echo str_pad($hours, 2, '0', STR_PAD_LEFT); ?></span><div class="dotr"></div></div> 
                    </div>
                    <h6>Hours</h6>
                </div>
                 <div class="counter-inner">
                    <div class="counter-no-inner">
                        <div class="counter-no"><div class="dotl"></div><span id="countdown-minutes"><?php echo str_pad($minutes, 2, '0', STR_PAD_LEFT); ?></span><div class="dotr"></div></div> 
                    </div>
                    <h6>Minutes</h6>
                </div>
                <div class="counter-inner">
                    <div class="counter-no-inner">
                        <div class="counter-no"><div class="dotl"></div><span id="countdown-seconds"><?php echo str_pad($seconds, 2, '0', STR_PAD_LEFT); ?></span><div class="dotr"></div></div> 
                    </div>
                    <h6>Seconds</h6>
                </div>
            </div>
            <div>
                <p>Your <?php echo $product_title; ?> license will expire soon.</p>
                <p>Renew now to keep getting updates, security fixes, and premium support.</p>
            </div>
            <div class="btn-wrap">
                <a class="popup-btn" href="<?php echo $add_to_cart_link; ?>" target="_blank">Renew Now</a>
                <a class="popup-btn vw-dismiss-popup" href="javascript:void(0);">Remind Me Later</a>
            </div>
        </div>
    </div>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    .vw-license-expiry-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .popup-wrap h3{
        font: normal normal bold 38px / 46px Roboto;
        letter-spacing: 0px;
        color: #FFFFFF;
        margin-bottom: 0;
        margin-top: 0;
    }
    .btn-wrap{
        display: flex;
        gap: 20px;
    }
    .popup-btn{
        background: #FBFBFB;
        text-decoration: none;
        font: 500 19px / 24px Roboto;
        letter-spacing: 0px;
        color: #203142;
        padding: 10px;
        border-radius: 1px;
        border: 1px solid transparent;
        box-shadow: 0px 0px 15px #0000008A;
        cursor: pointer;
    }
    .popup-wrap{
        width: 40%;
        margin: auto;
        padding: 45px 20px 30px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        align-items: center;
        gap: 30px;
        position: relative;
        background-repeat: no-repeat;
        background-size: 100% 100%;
         box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .popup-wrap p{
        font:400 18px / 24px Roboto;
        letter-spacing: 0px;
        color: #FFFFFF;
        margin: 0;
    }
    .close-btn{
        font-family: 'Roboto';
        background: #FBFBFB;
        width: 30px;
        height: 25px;
        font-size: 25px;
        padding: 5px;
        box-shadow: 0px 0px 15px #0000008A;
        border-radius: 1px;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .close-btn:hover{
        background:#27A644;
        color: #fff;
    }
    .close-btn .dashicons{
        width: 30px;
        height: 30px;
        font-size: 30px;
    }
    .popup-btn:hover{
        background: #27A644;
        border-color: #FFFFFF;
        color: #fff;
    }
    .counter-wrap{
        display: flex;
         gap: 30px;
    }
    .counter-no-inner{
        display: flex;
        gap: 10px;
        position: relative;
    }
    .counter-inner:nth-child(1) .counter-no-inner::after,.counter-inner:nth-child(1) .counter-no-inner::before,
    .counter-inner:nth-child(2) .counter-no-inner::after,.counter-inner:nth-child(2) .counter-no-inner::before,
    .counter-inner:nth-child(3) .counter-no-inner::after,.counter-inner:nth-child(3) .counter-no-inner::before{
        content: '';
        position: absolute;
        height: 10px;
        width: 10px;
        right: -20px;
        background: transparent linear-gradient(135deg, #C4C4C4 0%, #FFFFFF 100%) 0% 0% no-repeat padding-box;
    }
    .counter-inner:nth-child(1) .counter-no-inner::after,.counter-inner:nth-child(2) .counter-no-inner::after,
    .counter-inner:nth-child(3) .counter-no-inner::after{
       top: 25px;
    }
    .counter-inner:nth-child(1) .counter-no-inner::before,.counter-inner:nth-child(2) .counter-no-inner::before,
    .counter-inner:nth-child(3) .counter-no-inner::before{
          bottom: 25px; 
    }
    .counter-no-inner h6{
        margin: 0;
    }
    .counter-no{
        background: transparent linear-gradient(180deg, #C4C4C4 0%, #FFFFFF 100%) 0% 0% no-repeat padding-box;
        border: 1px solid #203142;
        border-radius: 7px;
        width: max-content;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        font: 500 68px / 82px "Bebas Neue", sans-serif;
        color: #203142;
        padding: 6px;
    }
    .counter-inner h6{
        font: 500 18px / 19px Roboto;
        color: #fff;
        margin: 10px 0;
    }
    .counter-no{
        position: relative;
    }
    .counter-no::after{
        content: '';
        position: absolute;
        width: 100%;
        height: 1px;
        background: #203142;
    }
    .dotl,.dotr{
        height: 10px;
        width: 2px;
        background: #203142;
        position: absolute;
    }
    .dotl{
        left: 0;
    }
    .dotr{
        right: 0;
    }
    @media (max-width: 1199px) {
        .counter-no{
            font: 500 50px / 82px "Bebas Neue", sans-serif;
        }
        .popup-wrap {
            width: 60%;
        }
    }
    @media (max-width: 991px) {
        .popup-wrap {
            width: 90%;
            padding: 30px 15px 20px 15px;
        }
        .counter-wrap {
            gap: 15px;
        }
        .counter-no {
            width: 40px;
            height: 60px;
            font-size: 35px;
        }
        .popup-wrap h3 {
            font-size: 28px;
            line-height: 34px;
        }
        .counter-inner:nth-child(1) .counter-no-inner::after, .counter-inner:nth-child(1) .counter-no-inner::before, .counter-inner:nth-child(2) .counter-no-inner::after, .counter-inner:nth-child(2) .counter-no-inner::before, .counter-inner:nth-child(3) .counter-no-inner::after, .counter-inner:nth-child(3) .counter-no-inner::before{
            height: 7px;
            width: 7px;
            right: -11px;
        }
        .close-btn{
            width: 20px;
            height: 20px;
        }
    }
    @media (max-width: 575px) {
        .counter-no-inner{
            justify-content:center;
        }
        .counter-no {
            font-size: 35px;
        }

    }
    </style>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Show popup after 2 seconds
        setTimeout(function() {
            $('.vw-license-expiry-popup').fadeIn(500);
        }, 2000);
        
        // Live countdown timer
        function updateCountdown() {
            var now = new Date();
            var endOfDay = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1) - 1;
            var timeLeft = endOfDay - now;
            
            if (timeLeft <= 0) {
                // Day has ended, refresh page to get new countdown
                location.reload();
                return;
            }
            
            var hours = Math.floor(timeLeft / (1000 * 60 * 60));
            var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            
            $('#countdown-hours').text(String(hours).padStart(2, '0'));
            $('#countdown-minutes').text(String(minutes).padStart(2, '0'));
            $('#countdown-seconds').text(String(seconds).padStart(2, '0'));
        }
        
        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown(); // Initial update
        
        // Handle close button
        $('.vw-close-popup').on('click', function() {
            $('.vw-license-expiry-popup').fadeOut(500);
        });
        
        // Handle dismiss button
        $('.vw-dismiss-popup').on('click', function() {
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'vw_dismiss_expiry_notice',
                    notice: 'license-expiry',
                    nonce: '<?php echo wp_create_nonce('vw_expiry_notice_nonce'); ?>'
                },
                success: function(response) {
                    if (response.success) {
                        $('.vw-license-expiry-popup').fadeOut(500);
                    }
                }
            });
        });
        
        // Close popup when clicking outside
        $('.vw-license-expiry-popup').on('click', function(e) {
            if ($(e.target).closest('.popup-wrap').length === 0) {
                $(this).fadeOut(500);
            }
        });
        
        // Close popup with Escape key
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) { // Escape key
                $('.vw-license-expiry-popup').fadeOut(500);
            }
        });
    });
    </script>
    <?php
}

/**
 * AJAX handler for dismissing expiry notice
 */
function vw_online_review_pro_ajax_dismiss_expiry_notice() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'vw_expiry_notice_nonce')) {
        wp_die('Security check failed');
    }
    
    // Set dismissed flag
    update_option('vw_online_review_pro_expiry_notice_dismissed', true);
    
    wp_send_json_success('Notice dismissed');
}
add_action('wp_ajax_vw_dismiss_expiry_notice', 'vw_online_review_pro_ajax_dismiss_expiry_notice');

/**
 * Add admin notice hook
 */
add_action('admin_notices', 'vw_online_review_pro_display_expiry_notice');

/**
 * Helper functions for external use
 */

/**
 * Check if license expiry notice should be shown
 */
function vw_online_review_pro_should_show_expiry_timer() {
    return vw_online_review_pro_should_show_expiry_notice();
}

/**
 * Get license expiry timer data
 */
function vw_online_review_pro_get_expiry_timer_data() {
    $license_data = vw_online_review_pro_check_license_expiry();
    
    if (!$license_data) {
        return false;
    }
    
    $days_remaining = vw_online_review_pro_get_days_remaining();
    
    if ($days_remaining === null || $days_remaining <= 0) {
        return false;
    }
    
    return array(
        'days_remaining' => $days_remaining,
        'product_title' => isset($license_data['productTitle']) ? $license_data['productTitle'] : 'VW Online Review Pro',
        'add_to_cart_link' => isset($license_data['addToCartLink']) ? $license_data['addToCartLink'] : '',
        'is_bundle' => isset($license_data['isBundle']) ? $license_data['isBundle'] : false
    );
}

/**
 * Reset dismissed notice
 */
function vw_online_review_pro_reset_expiry_timer() {
    delete_option('vw_online_review_pro_expiry_notice_dismissed');
}