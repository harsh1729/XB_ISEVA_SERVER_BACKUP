<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-05-08 06:19:11 --> 404 Page Not Found: Plugins/bootstrap-datepicker
ERROR - 2017-05-08 12:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 12:48:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 17:59:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:06:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:07:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC' at line 7 - Invalid query: SELECT `o`.`id`, `o`.`heading`, `o`.`expirydatetime`, `o`.`userid`, `o`.`content`, `o`.`publishdatetime`, `o`.`b_extra_master_id`, `u`.`isactive`, `u`.`firmname`, `u`.`firmcontact`, `u`.`email`, `u`.`address`, GROUP_CONCAT( oi.imageid SEPARATOR  '|' ) images
FROM `business_extra` `o`
JOIN `business_extra_images` `oi` ON `oi`.`business_extra_id` = `o`.`id`
JOIN `user` `u` ON `u`.`id` = `o`.`userid`
WHERE `o`.`b_extra_master_id` = '2'
AND `o`.`isenable` = '1'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC
ERROR - 2017-05-08 18:13:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-05-08 18:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
