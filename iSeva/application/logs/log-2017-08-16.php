<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-16 11:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-08-16 13:51:42 --> 404 Page Not Found: client_requests/Promocodes/get_commition_extra_char
ERROR - 2017-08-16 13:52:42 --> Severity: Notice --> Array to string conversion /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 79
ERROR - 2017-08-16 13:53:32 --> Severity: Notice --> Array to string conversion /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 79
ERROR - 2017-08-16 13:53:56 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting ',' or ';' /home/xercextx/public_html/iservice/application/controllers/client_requests/Promocodes.php 79
ERROR - 2017-08-16 13:57:07 --> Severity: Notice --> Undefined variable: row /home/xercextx/public_html/iservice/application/models/Promocode_model.php 353
ERROR - 2017-08-16 13:57:07 --> Severity: Notice --> Trying to get property of non-object /home/xercextx/public_html/iservice/application/models/Promocode_model.php 353
ERROR - 2017-08-16 13:57:07 --> Severity: Error --> Call to undefined function get_commition_echarge() /home/xercextx/public_html/iservice/application/models/Promocode_model.php 354
ERROR - 2017-08-16 13:57:49 --> Severity: Error --> Call to undefined function get_commition_echarge() /home/xercextx/public_html/iservice/application/models/Promocode_model.php 354
ERROR - 2017-08-16 13:58:25 --> Severity: Error --> Call to undefined function get_commition_echarge() /home/xercextx/public_html/iservice/application/models/Promocode_model.php 354
