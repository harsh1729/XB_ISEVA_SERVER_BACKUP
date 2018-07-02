<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-12 02:09:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 05:08:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 06:49:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 06:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 09:26:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 09:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 09:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 7 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `o`.`catid` = '123'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-04-12 09:27:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 7 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `o`.`catid` = '123'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-04-12 09:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC' at line 7 - Invalid query: SELECT `o`.`id`, `o`.`heading`, `o`.`expirydatetime`, `o`.`userid`, `o`.`content`, `o`.`publishdatetime`, `o`.`b_extra_master_id`, `u`.`isactive`, `u`.`firmname`, `u`.`firmcontact`, `u`.`email`, `u`.`address`, GROUP_CONCAT( oi.imageid SEPARATOR  '|' ) images
FROM `business_extra` `o`
JOIN `business_extra_images` `oi` ON `oi`.`business_extra_id` = `o`.`id`
JOIN `user` `u` ON `u`.`id` = `o`.`userid`
WHERE `o`.`b_extra_master_id` = '3'
AND `o`.`isenable` = '1'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC
ERROR - 2017-04-12 10:44:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 11:29:47 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2017-04-12 14:33:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-12 16:48:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
