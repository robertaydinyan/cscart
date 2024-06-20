# Foloosi Payment Extension for CS Cart

Allows you to use Foloosi payment gateway with the CS Cart Store.

## Description

​This is the Foloosi payment gateway plugin for CS Cart. Allows merchants to accept credit cards, debit cards with the CS Cart store. It uses a seamless integration, allowing the customer to pay on your website without being redirected away from your CS Cart website.

## Installation

1. Ensure you have latest version of CS Cart installed.
2. Download the zip of this repo.
3. Inside the file downloaded above is a file called 'install_foloosi.sql'. This has to be executed against your cscart database. You can use phpmyadmin to import the file into your cscart database or copy paste the content and run directly into your mysql shell.
4. Upload rest of the contents of the plugin to your CS Cart Installation directory (content of app folder goes in app folder, content of design folder in design folder).

## Configuration

1. Log into CS-Cart as administrator (<http://cscart_installation/admin.php>). Navigate to Administration / Payment Methods.
2. Click the "+" to add a new payment method.
3. Choose Foloosi from the list and then click save. For template, choose "cc_outside.tpl"
4. Click the 'Configure' tab.
5. Enter your Foloosi Merchant Key and Secret Key which you can get from Foloosi Dashboard.
6. Enable Redirection if you need ApplePay
7. Click 'Save'

### Support

Visit [https://www.foloosi.com](https://www.foloosi.com) for support requests or email info@foloosi.com
