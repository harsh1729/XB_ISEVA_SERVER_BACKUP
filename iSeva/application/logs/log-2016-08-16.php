<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-08-16 05:13:59 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 05:14:05 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 05:14:07 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 05:14:10 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 05:14:13 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 05:14:16 --> Query error: Duplicate entry 'Surya Dental Care' for key 'username' - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES ('Surya Dental Care', '8968748848', 'Surya Dental Care', '0943305618619035bb1933be83844cff', 0, 'Surya Dental Care7dc82')
ERROR - 2016-08-16 08:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-08-16 16:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-08-16 16:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-08-16 16:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-08-16 16:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-08-16 16:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
