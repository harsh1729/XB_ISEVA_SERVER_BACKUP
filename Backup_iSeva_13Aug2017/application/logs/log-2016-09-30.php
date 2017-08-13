<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-30 03:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 03:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 03:52:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 03:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '2'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2016-09-30 03:53:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '12'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2016-09-30 04:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 06:29:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 06:29:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 06:30:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 8 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `isbusiness` = '1'
AND `o`.`catid` = '11'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2016-09-30 06:36:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 06:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-30 11:14:24 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:14:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:14:34 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:15:56 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:29:02 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:29:12 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:29:17 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:29:49 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:29:57 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:30:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:31:06 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:31:55 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:32:13 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:32:14 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:23 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:24 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:36 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:34:48 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:35:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:35:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:35:08 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:25 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:25 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:26 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:29 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:29 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:29 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:33 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:33 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:37:34 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:39:19 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:39:30 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:39:31 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:39:31 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:45 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:45 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:45 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:48 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:48 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:48 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:54 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:54 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:56 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:41:57 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:42:08 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:42:21 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:42:21 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:42:22 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:42:22 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:26 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:26 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:27 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:39 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:40 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:40 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:44:41 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:46:25 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:46:25 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:46:25 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 11:46:26 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 12:24:50 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 12:24:50 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 12:24:51 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 12:24:51 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-30 14:08:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
