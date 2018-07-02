<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-05-14 08:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2018-05-14 08:50:25 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2018-05-14 08:50:25')
ERROR - 2018-05-14 08:50:26 --> 404 Page Not Found: client_requests/City/getAllCities
ERROR - 2018-05-14 08:50:29 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2018-05-14 08:50:38 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2018-05-14 11:34:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2018-05-14 11:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2018-05-14 20:12:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
