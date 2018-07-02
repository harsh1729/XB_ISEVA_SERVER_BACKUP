<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-05 02:18:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-05 02:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '10'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2016-11-05 02:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '3'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2016-11-05 02:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-05 02:24:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-05 02:24:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-05 02:25:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-05 08:15:40 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:15:56 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 21
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:11 --> Severity: Notice --> Undefined index: catid /home/xercextx/public_html/iservice/application/views/employer.php 36
ERROR - 2016-11-05 08:16:42 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-11-05 14:54:02 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:02')
ERROR - 2016-11-05 14:54:03 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:03 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:04 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:04', '2016-11-15 14:54:04')
ERROR - 2016-11-05 14:54:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:04 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:04')
ERROR - 2016-11-05 14:54:04 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:04 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:04 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:04 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:04 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:05 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:05 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:05')
ERROR - 2016-11-05 14:54:05 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:05 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:05 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:06', '2016-11-15 14:54:06')
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:06')
ERROR - 2016-11-05 14:54:06 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:06 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:06 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:06', '2016-11-15 14:54:06')
ERROR - 2016-11-05 14:54:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:07 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:07 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:07')
ERROR - 2016-11-05 14:54:07 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:07 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:07 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:08 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2016-11-05 14:54:08 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:08 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:08 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2016-11-05 14:54:08 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:08', '2016-11-15 14:54:08')
ERROR - 2016-11-05 14:54:09 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:09 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-05 14:54:09')
ERROR - 2016-11-05 14:54:09 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:09 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:09', '2016-11-15 14:54:09')
ERROR - 2016-11-05 14:54:09 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:10 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:10 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:10 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-05 14:54:11 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:11 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:11 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:11 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:11 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:12 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-05 14:54:12 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2016-11-05 14:54:12 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:12 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:12 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:13 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-05 14:54:13 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2016-11-05 14:54:13 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-05 14:54:13 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-05 14:54:14 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2016-11-05 14:54:14 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-05 14:54:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2016-11-05 14:54:14 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-05 14:54:14', '2016-11-15 14:54:14')
ERROR - 2016-11-05 14:54:15 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
