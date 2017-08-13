<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-04 02:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:43:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:43:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:45:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:53:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:53:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 02:54:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 14:31:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2016-12-04 14:31:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2016-12-04 14:31:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 14:31:10 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 14:31:10 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2016-12-04 14:31:10 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14808618701480862028.', '2016-12-04 14:31:10', NULL, NULL, NULL, -1)
ERROR - 2016-12-04 14:31:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2016-12-04 14:32:47 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2016-12-04 14:32:47 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2016-12-04 14:32:47 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 14:32:47 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 14:32:47 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2016-12-04 14:32:47 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14808619671480862191.', '2016-12-04 14:32:47', NULL, NULL, NULL, -1)
ERROR - 2016-12-04 14:32:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
ERROR - 2016-12-04 15:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 15:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 15:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-12-04 18:48:53 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 283
ERROR - 2016-12-04 18:48:53 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 284
ERROR - 2016-12-04 18:48:53 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 18:48:53 --> Severity: Warning --> getimagesize(): Filename cannot be empty /home/xercextx/public_html/iservice/application/models/Gallery_model.php 285
ERROR - 2016-12-04 18:48:53 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 289
ERROR - 2016-12-04 18:48:53 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `width`, `height`, `userid`) VALUES ('14808773331480877487.', '2016-12-04 18:48:53', NULL, NULL, NULL, -1)
ERROR - 2016-12-04 18:48:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/xercextx/public_html/iservice/system/core/Exceptions.php:272) /home/xercextx/public_html/iservice/system/core/Common.php 568
