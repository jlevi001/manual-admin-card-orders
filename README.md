# manual-admin-card-orders
=== Manual Admin Card Orders ===

Contributors: Lingo Technologies
Tags: backend, manual, phone, payment, woocommerce
Requires at least: 4.7
Tested up to: 6.8
Requires PHP: 5.6
Stable tag: 2.8.5
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Process payments from the WooCommerce Edit Order screen.

== Description ==

Charge credit and debit cards directly from the WooCommerce Edit&nbsp;Order screen. Perfect for taking phone orders without leaving your WordPress&nbsp;Admin.

### Features

* Partial payments
* Multiple payments per order
* Authorize charges without capturing
* Automatically update order status
* Automatically reduce stock
* MOTO exemption for SCA with Stripe

### Payment Gateways

* Stripe
* Authorize.net
* Eway

== Installation ==

Scroll down for configuration instructions.

### Requirements

* WordPress 4.7+
* WooCommerce 3.3+
* PHP 5.6+
* An SSL certificate (not needed for Eway)
* Curl (only needed for Eway)

If you're not sure whether your website is compatible, please contact your website administrator, web developer, or hosting provider. You can also post your question in the support forum.

### Installation

You can find standard instructions for installing a plugin [here](https://wordpress.org/documentation/article/manage-plugins/#installing-plugins-1). Once that's done, you can move on to the **Configuration** section below.

### Configuration

To get started, you'll want to select a payment gateway and enter some API keys.

#### Stripe

1. Go [here](https://dashboard.stripe.com/settings/integration) and switch on **Enable card data collection**.
2. Get your live API keys [here](https://dashboard.stripe.com/apikeys), or your test keys [here](https://dashboard.stripe.com/test/apikeys).
3. From your WordPress dashboard, go to **WooCommerce > Settings > Manual Payment**.
4. Select **Stripe** from the **Payment Gateway** drop-down and click **Save changes**.
5. Go to **WooCommerce > Settings > Manual Payment > Stripe**.
6. Copy and paste your **Secret key** or **Restricted key** (from step 2) into the **Secret Key** field.
7. Copy and paste your **Publishable key** (from step 2) into the **Publishable Key** field.
8. Click **Save changes**. That's it, you're all set.

#### Authorize.net

1. Follow these instructions to get your API keys:
    * If you already use an Authorize.net payment gateway:
        1. Go to **WooCommerce > Settings > Payments > Authorize.net**.
        2. Here you can find your API keys.
    * If you do not already use an Authorize.net payment gateway:
        1. [Follow these instructions](https://support.authorize.net/knowledgebase/Knowledgearticle/?code=000001271#:~:text=Steps%20to%20Generate%20Your%20API%20ID%20and%20Transaction/Signature%20Key).
2. Follow these instructions to get your **Public Client Key**:
    1. Click the links that apply to you:
        * For live accounts:
            1. Log in to the Authorize.net [Merchant Interface](https://account.authorize.net/).
            2. Visit [this page](https://account.authorize.net/UI/themes/anet/User/ClientKey.aspx).
        * For sandbox accounts:
            1. Log in to the Authorize.net [Merchant Interface](https://sandbox.authorize.net/).
            2. Visit [this page](https://sandbox.authorize.net/UI/themes/sandbox/User/ClientKey.aspx).
    2. If you already have a **Public Client Key** on the page, you can skip this step. In the **Create New Public Client Key** section, click **Submit** and verify your identity.
3. From your WordPress dashboard, go to **WooCommerce > Settings > Manual Payment**.
4. Select **Authorize.net** from the **Payment Gateway** drop-down and click **Save changes**.
5. Go to **WooCommerce > Settings > Manual Payment > Authorize.net**.
6. Copy and paste your **API Login ID** (from step 1) into the **Login ID** field.
7. Copy and paste your **Transaction Key** (from step 1) into the **Transaction Key** field.
8. Copy and paste your **Public Client Key** (from step 2) into the **Client Key** field.
9. Click **Save changes**. That's it, you're all set.

#### Eway

1. Follow these instructions to get your API keys:
    * If you already use an Eway payment gateway:
        1. Go to **WooCommerce > Settings > Payments > Eway**.
        2. Here you can find your API keys.
    * If you do not already use an Eway payment gateway:
        1. [Follow these instructions](https://go.eway.io/s/article/How-do-I-setup-my-Live-eWAY-API-Key-and-Password).
2. From your WordPress dashboard, go to **WooCommerce > Settings > Manual Payment**.
3. Select **Eway** from the **Payment Gateway** drop-down and click **Save changes**.
4. Go to **WooCommerce > Settings > Manual Payment > Eway**.
5. Copy and paste your **API Key** (from step 1) into the **API Key** field.
6. Copy and paste your **API Password** (from step 1) into the **API Password** field.
7. Click **Save changes**. That's it, you're all set.
