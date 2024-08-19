<?php
/*
Plugin Name: WC Address Change Notification
Description: Displays a notification regarding address changes in WooCommerce.
Version: 2.0
Author: Douglas W. P.
Author URI: https://finalizart.com
*/

function wc_address_change_notification_default_text() {
    return '
    <div style="border: 2px solid red; padding: 15px; margin-bottom: 20px; text-align: center; background-color: #fff0f0;">
        <h3 style="color: red;"><strong>ATTENTION</strong></h3>
        <p><strong>Changing your profile address <u>after purchase</u> does not change the shipping address.</strong></p>
        <h4>What to do:</h4>
        <p>If you need to change the shipping address, please <strong>contact us</strong>, explaining that you made a purchase, entered the wrong address, and need to make a change.</p>
        <h4>Important:</h4>
        <p>If the order has already been shipped, it will be <strong>returned to the store</strong>, and a new shipping fee will be required to resend it.</p>
    </div>';
}

function wc_display_address_change_notification() {
    $message = get_option('wc_address_change_notification_text', wc_address_change_notification_default_text());
    echo $message;
}

add_action('woocommerce_before_edit_account_address_form', 'wc_display_address_change_notification', 10);

// Add settings page to the admin menu
function wc_address_change_notification_menu() {
    add_options_page(
        'WC Address Change Notification Settings',
        'WC Address Notification',
        'manage_options',
        'wc-address-change-notification',
        'wc_address_change_notification_settings_page'
    );
}
add_action('admin_menu', 'wc_address_change_notification_menu');

// Settings page content
function wc_address_change_notification_settings_page() {
    ?>
    <div class="wrap">
        <h1>WC Address Change Notification Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('wc_address_change_notification_settings');
            do_settings_sections('wc-address-change-notification');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function wc_address_change_notification_settings() {
    add_settings_section(
        'wc_address_change_notification_section',
        'Notification Settings',
        null,
        'wc-address-change-notification'
    );

    add_settings_field(
        'wc_address_change_notification_text',
        'Notification Text',
        'wc_address_change_notification_text_field',
        'wc-address-change-notification',
        'wc_address_change_notification_section'
    );

    register_setting('wc_address_change_notification_settings', 'wc_address_change_notification_text');
}
add_action('admin_init', 'wc_address_change_notification_settings');

function wc_address_change_notification_text_field() {
    $text = get_option('wc_address_change_notification_text', wc_address_change_notification_default_text());
    echo '<textarea name="wc_address_change_notification_text" rows="10" cols="50" class="large-text code">' . esc_textarea($text) . '</textarea>';
}
