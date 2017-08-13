<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-01-31 00:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:37:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:37:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:38:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:39:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:40:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 02:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 03:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 03:33:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 05:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-01-31 06:35:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 06:35:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 06:35:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:10 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 06:35:10 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858445101485844710.', '2017-01-31 06:35:10', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 06:35:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 06:35:21 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 06:35:21 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 06:35:21 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:21 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:21 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 06:35:21 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858445211485844991.', '2017-01-31 06:35:21', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 06:35:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 06:35:41 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 06:35:41 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 06:35:41 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:41 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 06:35:41 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 06:35:41 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858445411485844984.', '2017-01-31 06:35:41', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 06:35:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 08:48:50 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 08:48:50 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 08:48:50 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:48:50 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:48:50 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 08:48:50 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858525301485852743.', '2017-01-31 08:48:50', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 08:48:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 08:49:08 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 08:49:08 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 08:49:08 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:49:08 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:49:08 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 08:49:08 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858525481485852667.', '2017-01-31 08:49:08', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 08:49:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 08:49:52 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2017-01-31 08:49:52 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2017-01-31 08:49:52 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:49:52 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2017-01-31 08:49:52 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2017-01-31 08:49:52 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14858525921485852846.', '2017-01-31 08:49:52', NULL, NULL, NULL, -1)
ERROR - 2017-01-31 08:49:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2017-01-31 10:35:40 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2017-01-31 15:52:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
