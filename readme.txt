=== Currensees ===
Contributors: Moat Systems Limited
Tags: currency, conversion, exchange, exchange rate, exchange rates, api
Requires at least: 6.0
Tested up to: 6.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress plugin for integrating with Currency API.

== Description ==

Currensees is a WordPress plugin that provides an interface to interact with the Currency API. With this plugin, you can authenticate a user, convert currencies, and convert a base currency to all other available currencies.

= Usage Examples =

== Login ==
```php
$currensees = new Currensees\Currensees();
$login_result = $currensees->login('username', 'password');
if ($login_result) {
    // Login was successful, do something with the result data.
} else {
    // Login failed, show an error message.
}

== Convert ==
$currensees = new Currensees\Currensees();
$conversion_result = $currensees->convert('2023_04_02', 'GBP', 'CAD', '500');
if ($conversion_result) {
    // Conversion was successful, do something with the result data.
} else {
    // Conversion failed, show an error message.
}

== Convert All ==
$currensees = new Currensees\Currensees();
$conversion_all_result = $currensees->convertAll('GBP', 120, '2023_04_02');
if ($conversion_all_result) {
    // Conversion was successful, do something with the result data.
} else {
    // Conversion failed, show an error message.
}
```

== Installation ==

    Upload the plugin files to the /wp-content/plugins/currensees directory, or install the plugin through the WordPress plugins screen directly.
    Activate the plugin through the 'Plugins' screen in WordPress.
    Use the provided functions in your theme or other plugins.

== Frequently Asked Questions ==

= What is the Currency API? =

Currency API provides customers with accurate and up-to-date currency data for making informed decisions in the global financial market, including Gold, Silver and Special Drawing Rights. Our reliable exchange rate data assist businesses in confidently managing foreign transactions, investments and risks. Please note we do not offer exchange services or facilitate fund transfers.

= Can I subscribe for a user account? =

Yes, you can subscribe for a user account by following this [link](https://moatsystems.com/currency-api/).

== Changelog ==

= 1.0.0 =

    Initial release.

== Upgrade Notice ==
N/A

== Using the Currency ==

You can read the [API documentation](https://docs.currensees.com/) to understand what’s possible with the Currency API. If you need further assistance, don’t hesitate to [contact us](https://moatsystems.com/contact/).

== License ==

This project is licensed under the [BSD 3-Clause License](./license.txt).

== Copyright ==

(c) 2020 - 2023 [Moat Systems Limited](https://moatsystems.com).