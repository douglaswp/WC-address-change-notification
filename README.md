# WC Address Change Notification

WC Address Change Notification is a WordPress plugin for WooCommerce that displays a notification on the account address edit page, informing users about the implications of changing their address after making a purchase.

## Features

- Displays a customizable notification on the WooCommerce account address edit page.
- Informs users that changing their profile address does not alter the shipping address for existing orders.
- Allows administrators to edit the notification text directly from the WordPress admin panel.

## Installation

1. **Download the Plugin:**
   - Download the latest version of the plugin from the [releases page](https://github.com/your-repo-link/releases).

2. **Upload to WordPress:**
   - Go to your WordPress admin dashboard.
   - Navigate to `Plugins > Add New > Upload Plugin`.
   - Upload the `wc-address-change-notification.zip` file and click `Install Now`.

3. **Activate the Plugin:**
   - After installation, click `Activate Plugin`.

## Configuration

1. **Access the Settings:**
   - In the WordPress admin dashboard, go to `Settings > WC Address Notification`.

2. **Edit the Notification Text:**
   - You will see a text area where you can customize the notification message displayed on the account address edit page.
   - The default message is provided in the text area, but you can modify it as needed.
   - Use HTML tags like `<strong>`, `<h3>`, and `<p>` to format the text.

3. **Save Changes:**
   - After editing the text, click `Save Changes` to apply the new notification.

## Example

By default, the plugin displays the following message:

```html
<div style="border: 2px solid red; padding: 15px; margin-bottom: 20px; text-align: center; background-color: #fff0f0;">
    <h3 style="color: red;"><strong>ATTENTION</strong></h3>
    <p><strong>Changing your profile address <u>after purchase</u> does not change the shipping address.</strong></p>
    <h4>What to do:</h4>
    <p>If you need to change the shipping address, please <strong>contact us</strong>, explaining that you made a purchase, entered the wrong address, and need to make a change.</p>
    <h4>Important:</h4>
    <p>If the order has already been shipped, it will be <strong>returned to the store</strong>, and a new shipping fee will be required to resend it.</p>
</div>
