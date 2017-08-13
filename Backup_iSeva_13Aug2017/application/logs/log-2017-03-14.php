<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-14 10:26:24 --> 404 Page Not Found: Travel/index
ERROR - 2017-03-14 10:29:50 --> Severity: Error --> Call to undefined method Promocode_model::get_all() /home/xercextx/public_html/iservice/application/controllers/Travel.php 20
ERROR - 2017-03-14 10:38:58 --> Severity: Error --> Call to undefined method Promocode_model::add_promocode() /home/xercextx/public_html/iservice/application/controllers/admin_requests/Promocode.php 36
ERROR - 2017-03-14 10:42:37 --> Query error: Table 'xercextx_iservice.commition_travel' doesn't exist - Invalid query: UPDATE `commition_travel` SET `commition` = '2'
WHERE `id` = 1
ERROR - 2017-03-14 10:48:38 --> 404 Page Not Found: Booked_tickets/index
ERROR - 2017-03-14 10:50:47 --> Severity: Error --> Call to undefined method Transaction_model::get_booked_all_ticket() /home/xercextx/public_html/iservice/application/controllers/Booked_tickets.php 20
ERROR - 2017-03-14 10:51:33 --> Query error: Table 'xercextx_iservice.transaction_status' doesn't exist - Invalid query: SELECT `tv`.*, `tu`.`name` as `logged_user_name`, `tu`.`email` as `logged_user_email`, `tu`.`phone` as `logged_user_phone`, `ts`.`status` as `t_status`
FROM `transaction_travel` `tv`
JOIN `treval_user` `tu` ON `tu`.`id`=`tv`.`user_id`
JOIN `transaction_status` `ts` ON `ts`.`id`=`tv`.`transaction_status`
ORDER BY `tv`.`id` DESC, `ticket_date` DESC
 LIMIT 5
ERROR - 2017-03-14 10:57:47 --> 404 Page Not Found: admin_requests/Booked_tickets/get_booked_all_ticket
ERROR - 2017-03-14 10:57:48 --> 404 Page Not Found: admin_requests/Booked_tickets/get_booked_all_ticket
ERROR - 2017-03-14 15:56:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 7 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `catid` = '0'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
