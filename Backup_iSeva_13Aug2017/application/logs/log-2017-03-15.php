<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-15 05:58:40 --> 404 Page Not Found: admin_requests/Booked_tickets/search
ERROR - 2017-03-15 07:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-03-15 07:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '5'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-15 07:56:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '8'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-15 07:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '9'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-15 07:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '1'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-15 08:22:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`pc`
WHERE `tv`.`user_id` = '2'
AND `tv`.`transaction_status` = 4
ORDER BY `tv`.' at line 3 - Invalid query: SELECT *
FROM `transaction_travel` `tv`
JOIN `left` ON `promocode` `pc`
WHERE `tv`.`user_id` = '2'
AND `tv`.`transaction_status` = 4
ORDER BY `tv`.`ticket_date` DESC
 LIMIT 20
ERROR - 2017-03-15 08:27:11 --> Severity: Parsing Error --> syntax error, unexpected '*' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 84
ERROR - 2017-03-15 08:27:41 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) /home/xercextx/public_html/iservice/application/models/Transaction_model.php 85
ERROR - 2017-03-15 10:22:32 --> Severity: Notice --> Undefined variable: coupan_code /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 57
ERROR - 2017-03-15 10:25:25 --> Severity: Notice --> Undefined variable: coupan_code /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 57
ERROR - 2017-03-15 10:28:49 --> Severity: Notice --> Undefined variable: coupan_code /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 57
