<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-22 02:36:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 02:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 02:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 04:02:38 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 04:02:55 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 04:04:28 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 06:37:47 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 06:38:02 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 06:39:26 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 09:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:33:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:34:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:36:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:39:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 09:58:14 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-10-22 11:09:32 --> Severity: Parsing Error --> syntax error, unexpected '[' /home/xercextx/public_html/iservice/application/controllers/Users.php 55
ERROR - 2016-10-22 11:34:46 --> Severity: Notice --> Undefined variable: id /home/xercextx/public_html/iservice/application/controllers/Users.php 52
ERROR - 2016-10-22 11:34:46 --> Severity: Notice --> Undefined variable: parrentid /home/xercextx/public_html/iservice/application/models/Category_model.php 329
ERROR - 2016-10-22 11:34:46 --> Severity: Notice --> Undefined index: categories /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:34:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:34:46 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:34:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:34:46 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:34:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:36:01 --> Severity: Notice --> Undefined index: categories /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:36:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:36:01 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:36:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:36:01 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:36:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:36:29 --> Severity: Notice --> Undefined index: categories /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 13
ERROR - 2016-10-22 11:36:29 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:36:29 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:36:29 --> Severity: 4096 --> Object of class CI_Loader could not be converted to string /home/xercextx/public_html/iservice/application/views/view-parts/footer.php 1
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:47:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:47:09 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:47:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:47:51 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 14
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:48:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 29
ERROR - 2016-10-22 11:48:46 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:48:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 45
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined index: id /home/xercextx/public_html/iservice/application/views/edit_user.php 16
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 31
ERROR - 2016-10-22 11:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 31
ERROR - 2016-10-22 11:53:11 --> Severity: Notice --> Undefined variable: doctor /home/xercextx/public_html/iservice/application/views/edit_user.php 47
ERROR - 2016-10-22 11:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/views/edit_user.php 47
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:55:24 --> Severity: Notice --> Undefined index: cityid /home/xercextx/public_html/iservice/application/views/edit_user.php 48
ERROR - 2016-10-22 11:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 11:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 11:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 12:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-10-22 12:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
