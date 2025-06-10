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

**Enhanced WooCommerce Manual Payment Plugin with Automatic Order Number Tracking**

Process payments from the WooCommerce Edit Order screen with enhanced order number tracking in transaction descriptions.

## 🚀 Key Enhancement

**Problem Solved:** Transaction descriptions now automatically include order numbers for better tracking and identification.

- **Before:** `"Dawson Aircraft, Inc."`
- **After:** `"Dawson Aircraft, Inc. - Order 24768"`

This matches the format used by the default WooCommerce Stripe Gateway, providing consistency across all payment methods.

## 📋 Features

- **Automatic Order Number Inclusion:** Transaction descriptions automatically append order numbers
- **Multiple Payment Gateways:** Supports Stripe, Authorize.Net, and Eway
- **Partial Payments:** Process multiple payments per order
- **Authorization & Capture:** Authorize charges without capturing or capture immediately
- **Automatic Order Updates:** Update order status and reduce stock levels automatically
- **MOTO Exemption:** SCA exemption for Stripe transactions
- **Enhanced Tracking:** Better transaction identification in payment gateway dashboards

## 🔧 Installation

1. Upload the plugin files to `/wp-content/plugins/manual-admin-card-orders/`
2. Activate the plugin through the WordPress admin
3. Go to **WooCommerce > Settings > Manual Payment** to configure

## ⚙️ Configuration

### General Settings
- **Payment Gateway:** Choose from Stripe, Authorize.Net, or Eway
- **Transaction Description:** Set your base description (order number is automatically appended)
- **Capture Payments:** Choose to capture immediately or authorize only
- **Order Status Updates:** Configure when to update order statuses
- **Stock Management:** Control when stock levels are reduced

### Gateway-Specific Setup

#### Stripe
1. Get your API keys from [Stripe Dashboard](https://dashboard.stripe.com/apikeys)
2. Enable card data collection in Stripe settings
3. Enter your Secret Key and Publishable Key
4. Configure MOTO exemption if needed

#### Authorize.Net
1. Get your API credentials from Authorize.Net Merchant Interface
2. Enter API Login ID, Transaction Key, and Public Client Key
3. Configure sandbox/live mode

#### Eway
1. Get your API credentials from Eway Partner Portal
2. Enter API Key and API Password
3. Configure sandbox/live mode

## 🎯 Usage

1. Go to **WooCommerce > Orders**
2. Edit any order
3. Scroll to the **Manual Payment** section
4. Enter payment details (amount, card information)
5. Click **Process Payment**
6. The transaction will appear in your gateway dashboard with the enhanced description including the order number

## 🔍 Enhanced Transaction Descriptions

The plugin automatically enhances transaction descriptions by appending order numbers:

| Setting | Result |
|---------|--------|
| "Dawson Aircraft, Inc." | "Dawson Aircraft, Inc. - Order 24768" |
| "Your Company Name" | "Your Company Name - Order 24769" |
| "Manual Payment" | "Manual Payment - Order 24770" |

This enhancement:
- ✅ Improves transaction tracking in payment gateway dashboards
- ✅ Matches the format used by standard WooCommerce Stripe Gateway
- ✅ Makes it easier to reconcile payments with orders
- ✅ Maintains all existing functionality while adding better identification

## 📋 Requirements

- **WordPress:** 4.7 or higher
- **WooCommerce:** 3.3.0 or higher
- **PHP:** 5.6.0 or higher
- **SSL Certificate:** Required for live payments (not needed for Eway sandbox)

## 🔒 Security

- Uses WordPress nonces for CSRF protection
- Requires `edit_shop_orders` capability
- Follows WordPress and WooCommerce security best practices
- Payment data is processed securely through official gateway APIs

## 🛠️ Developer Information

**Plugin Details:**
- **Version:** 2.8.7
- **Author:** Lingo Technologies
- **Original Base:** WooCommerce Manual Payment plugin
- **Key Enhancement:** Automatic order number inclusion in transaction descriptions
- **Text Domain:** woo-mp
- **License:** GPL v2 or later

**Main Enhancement Location:**
```php
// File: includes/payment-processor.php
private function get_enhanced_transaction_description( $order_id, $base_description ) {
    return $base_description . ' - Order ' . $order_id;
}
```

## 📞 Support

For support and questions:
- **Website:** [lingoit.net](https://lingoit.net)
- **Support:** [lingoit.net/support](https://lingoit.net/support)

## 📄 License

This plugin is licensed under the GPL v2 or later.

```
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
```

## 📝 Changelog

### Version 2.8.7 (Current)
- **Enhanced:** Automatic order number inclusion in transaction descriptions
- **Enhanced:** Updated branding to Lingo Technologies
- **Enhanced:** Improved transaction tracking and identification
- **Maintained:** All original functionality and compatibility

### Version 2.8.6 (Original)
- Based on WooCommerce Manual Payment plugin
- Support for Stripe, Authorize.Net, and Eway
- Manual payment processing from order edit screen
