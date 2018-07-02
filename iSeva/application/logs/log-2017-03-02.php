<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-02 06:54:32 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:17 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:23 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:24 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:24 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:24 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:25 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:25 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:25 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:25 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:26 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:26 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:26 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:27 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:27 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:28 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:29 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 06:55:29 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 07:04:47 --> Severity: Parsing Error --> syntax error, unexpected '$query' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Promocode_model.php 53
ERROR - 2017-03-02 07:06:23 --> Query error: Unknown column 'coupan_no' in 'where clause' - Invalid query: SELECT *
FROM `promocode`
WHERE `isGlobel` =0
AND `isActive` = 1
AND `start_date` <= '2017-03-02 07:06:23'
AND `end_date` >= '2017-03-02 07:06:23'
AND `coupan_no` = 'ghu'
ERROR - 2017-03-02 07:08:43 --> Severity: Error --> Call to undefined method Promocode_model::get_all_promocode() /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 24
ERROR - 2017-03-02 07:16:01 --> Severity: Error --> Call to undefined method Promocode_model::get_all_promocode() /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 24
ERROR - 2017-03-02 07:57:41 --> 404 Page Not Found: client_requests/Promocodes/get_promocode
ERROR - 2017-03-02 11:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-03-02 11:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '123'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-02 12:34:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '4'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-02 13:24:03 --> 404 Page Not Found: client_requests/Transaction/add_transation
ERROR - 2017-03-02 13:26:31 --> Severity: Compile Error --> Non-abstract method Transaction_model::add_transaction() must contain body /home/xercextx/public_html/iservice/application/models/Transaction_model.php 15
ERROR - 2017-03-02 13:27:46 --> Severity: Compile Error --> Non-abstract method Transaction_model::add_transaction() must contain body /home/xercextx/public_html/iservice/application/models/Transaction_model.php 15
ERROR - 2017-03-02 13:29:36 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 23
ERROR - 2017-03-02 13:29:36 --> Severity: Error --> Call to a member function add_transaction() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 23
ERROR - 2017-03-02 13:30:29 --> Query error: Column 'payumoney_id' cannot be null - Invalid query: INSERT INTO `transaction_travel` (`payumoney_id`, `coupan_id`, `state`, `user_name`, `phone`, `email`) VALUES (NULL, NULL, 1, NULL, NULL, NULL)
ERROR - 2017-03-02 13:32:30 --> 404 Page Not Found: client_requests/Transaction/add_transation
ERROR - 2017-03-02 13:34:12 --> 404 Page Not Found: client_requests/Transaction/add_transation
ERROR - 2017-03-02 13:35:18 --> Query error: Column 'payumoney_id' cannot be null - Invalid query: INSERT INTO `transaction_travel` (`payumoney_id`, `coupan_id`, `state`, `user_name`, `phone`, `email`) VALUES (NULL, NULL, 1, NULL, NULL, NULL)
ERROR - 2017-03-02 13:39:12 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:39:12 --> Severity: Error --> Call to a member function update_success_payment() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:39:13 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 48
ERROR - 2017-03-02 13:39:13 --> Severity: Error --> Call to a member function update_success_booking() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 48
ERROR - 2017-03-02 13:39:13 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 40
ERROR - 2017-03-02 13:39:13 --> Severity: Error --> Call to a member function update_start_booking_ticket() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 40
ERROR - 2017-03-02 13:43:13 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:43:13 --> Severity: Error --> Call to a member function update_success_payment() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:46:51 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:46:51 --> Severity: Error --> Call to a member function update_success_payment() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 32
ERROR - 2017-03-02 13:48:39 --> Severity: Notice --> Undefined property: Transaction::$transaction_model /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 40
ERROR - 2017-03-02 13:48:39 --> Severity: Error --> Call to a member function update_start_booking_ticket() on a non-object /home/xercextx/public_html/iservice/application/controllers/client_requests/Transaction.php 40
ERROR - 2017-03-02 13:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0 = 'mantis_id', 1 = NULL, `state` = 4
WHERE `payumoney_id` IS NULL' at line 1 - Invalid query: UPDATE `transaction_travel` SET 0 = 'mantis_id', 1 = NULL, `state` = 4
WHERE `payumoney_id` IS NULL
