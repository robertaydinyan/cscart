INSERT INTO ?:payment_processors (processor, processor_script, processor_template, admin_template, callback, type, addon) 
VALUES ('MyFatoorah', 'myfatoorah_payment_processor.php', '', '', 'N', 'P', '');

INSERT INTO ?:payments SET 
`processor_id` = (SELECT `processor_id` FROM ?:payment_processors WHERE `processor_script` IN ('myfatoorah_payment_processor.php'));

SET @mfPaymentId = LAST_INSERT_ID();

INSERT INTO ?:payment_descriptions (`payment`, `description`, `surcharge_title`, `lang_code`, `payment_id`) VALUES 
('MyFatoorah', 'Pay with MyFatoorah', '', 'en', @mfPaymentId);


INSERT INTO ?:images (`image_path`, `image_x`, `image_y`, `is_high_res`) VALUES
('myfatoorah.png', 128, 128, 'N');

SET @mfImageId = LAST_INSERT_ID();

INSERT INTO ?:common_descriptions (`object_id`, `object_type`, `description`, `lang_code`, `object`, `object_holder`) VALUES
(@mfImageId, '', '', 'en', '', 'images');

INSERT INTO ?:images_links (`object_id`, `object_type`, `image_id`, `detailed_id`, `type`, `position`) VALUES
(@mfPaymentId, 'payment', @mfImageId, 0, 'M', 0);
