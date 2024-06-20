REPLACE INTO cscart_payment_processors (`processor`,`processor_script`,`processor_template`,`admin_template`,`callback`,`type`) VALUES ('Foloosipay','foloosipay.php', 'views/orders/components/payments/cc_outside.tpl','foloosipay/foloosipay.tpl', 'Y', 'P');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','fp_merchant_key','Merchant Key');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','fp_secret_key','Secret Key');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','redirection','Redirection');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','saved_card','Saved Card');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','text_fp_failed_order','No response from Foloosi has been received. Please contact the store staff and tell them the order ID:');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','text_fp_pending','No response from Foloosi. Please check the payment using Payment ID on foloosi dashboard. ');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','text_fp_success','Payment Sucessful. You can check the payment using Payment ID on foloosi dashboard. ');
REPLACE INTO cscart_language_values (`lang_code`,`name`,`value`) VALUES ('EN','text_fp_cancelled','You cancelled to pay on foloosi...');