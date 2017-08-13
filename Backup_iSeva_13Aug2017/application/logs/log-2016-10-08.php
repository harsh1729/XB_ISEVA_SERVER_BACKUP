<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-08 04:17:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 04:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 04:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 04:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 04:20:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 05:26:37 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:26:37 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:26:37 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:26:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:27:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:27:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:27:39 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 05:27:39 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 07:08:53 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 423
ERROR - 2016-10-08 07:08:53 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-10-08 07:10:08 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 423
ERROR - 2016-10-08 07:10:08 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-10-08 07:11:17 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 423
ERROR - 2016-10-08 07:11:17 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-10-08 07:17:53 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES (NULL, '7', 'Hii test', 'This is test jobs', NULL, '2016-10-08 07:17:53', '2016-10-18 07:17:53', NULL, NULL)
ERROR - 2016-10-08 07:21:22 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'dgfdg', 'dfgdfgdfg', NULL, '2016-10-08 07:21:22', '2016-10-18 07:21:22', NULL, '0')
ERROR - 2016-10-08 07:22:54 --> Query error: Column 'cityid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'Hii test', 'This is test jobs', '0', '2016-10-08 07:22:54', '2016-10-18 07:22:54', NULL, '0')
ERROR - 2016-10-08 07:24:09 --> Query error: Column 'cityid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'Hii test', 'This is test jobs', '0', '2016-10-08 07:24:09', '2016-10-18 07:24:09', NULL, '0')
ERROR - 2016-10-08 07:24:59 --> Query error: Column 'cityid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'Hii test', 'This is test jobs', '0', '2016-10-08 07:24:59', '2016-10-18 07:24:59', NULL, '0')
ERROR - 2016-10-08 07:27:44 --> Query error: Column 'cityid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'Hii test', 'This is test jobs', '0', '2016-10-08 07:27:44', '2016-10-18 07:27:44', NULL, '0')
ERROR - 2016-10-08 07:31:29 --> Query error: Column 'cityid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES ('1', '7', 'Hii test', 'This is test jobs', '0', '2016-10-08 07:31:29', '2016-10-18 07:31:29', NULL, '0')
ERROR - 2016-10-08 07:33:19 --> Query error: Column 'imageid' cannot be null - Invalid query: INSERT INTO `business_extra_images` (`business_extra_id`, `imageid`, `sort_order`) VALUES (125, NULL, 1)
ERROR - 2016-10-08 08:03:08 --> Query error: Unknown column 'oi.imageid' in 'field list' - Invalid query: SELECT `o`.`id`, `o`.`heading`, `o`.`expirydatetime`, `o`.`userid`, `o`.`content`, `o`.`publishdatetime`, `o`.`b_extra_master_id`, `u`.`isactive`, `u`.`firmname`, `u`.`firmcontact`, `u`.`email`, `u`.`address`, GROUP_CONCAT( oi.imageid SEPARATOR  '|' ) images
FROM `business_extra` `o`
JOIN `user` `u` ON `u`.`id` = `o`.`userid`
WHERE `o`.`b_extra_master_id` = '7'
AND `o`.`isenable` = '1'
AND `o`.`cityid` IN('1')
AND `o`.`cityid` = '0'
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC
ERROR - 2016-10-08 08:05:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 08:05:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 08:05:39 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 08:05:39 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-08 08:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 08:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 08:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 08:22:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 12:53:36 --> 404 Page Not Found: client_requests/Jobs/getjob
ERROR - 2016-10-08 16:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 17:00:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 17:00:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 17:00:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-08 17:00:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
