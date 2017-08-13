<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-14 07:51:03 --> Severity: Parsing Error --> syntax error, unexpected 'fuction' (T_STRING), expecting function (T_FUNCTION) /home/xercextx/public_html/iservice/application/controllers/client_requests/Jobs.php 106
ERROR - 2016-09-14 07:51:36 --> Severity: Parsing Error --> syntax error, unexpected 'public' (T_PUBLIC) /home/xercextx/public_html/iservice/application/models/Jobs_model.php 144
ERROR - 2016-09-14 07:53:43 --> Severity: Parsing Error --> syntax error, unexpected 'public' (T_PUBLIC) /home/xercextx/public_html/iservice/application/models/Jobs_model.php 196
ERROR - 2016-09-14 10:06:43 --> Severity: Parsing Error --> syntax error, unexpected 'public' (T_PUBLIC) /home/xercextx/public_html/iservice/application/models/Jobs_model.php 196
ERROR - 2016-09-14 10:09:46 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 10:09:53 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 10:10:30 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 10:23:59 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 10:24:07 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 10:24:09 --> 404 Page Not Found: Govtjobs/index
ERROR - 2016-09-14 11:33:55 --> 404 Page Not Found: Publicuploads/2016
ERROR - 2016-09-14 12:17:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 12:17:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 12:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 12:59:23 --> Query error: Column 'eligibility' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES ('1', '2', 'fgdv', 'cvbv', 'cbhgg', 'cxbggh', 'xxvn', NULL, 'ccdbnm', 'xxccnn', 'cdgkl', '1', 'fdfdh')
ERROR - 2016-09-14 12:59:32 --> Query error: Column 'eligibility' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES ('1', '2', 'fgdv', 'cvbv', 'cbhgg', 'cxbggh', 'xxvn', NULL, 'ccdbnm', 'xxccnn', 'cdgkl', '1', 'fdfdh')
ERROR - 2016-09-14 13:00:07 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL)
ERROR - 2016-09-14 13:00:11 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL)
ERROR - 2016-09-14 13:02:24 --> Query error: Column 'eligibility' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES ('1', '2', 'fgdv', 'cvbv', 'cbhgg', 'cxbggh', 'xxvn', NULL, 'ccdbnm', 'xxccnn', 'cdgkl', '1', 'fdfdh')
ERROR - 2016-09-14 13:03:21 --> Query error: Column 'eligibility' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES ('1', '2', 'fgdv', 'cvbv', 'cbhgg', 'cxbggh', 'xxvn', NULL, 'ccdbnm', 'xxccnn', 'cdgkl', '1', 'fdfdh')
ERROR - 2016-09-14 13:07:42 --> Query error: Column 'eligibility' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`) VALUES ('1', '2', 'fgdv', 'cvbv', 'cbhgg', 'cxbggh', 'xxvn', NULL, 'ccdbnm', 'xxccnn', 'cdgkl', '1', 'fdfdh')
ERROR - 2016-09-14 13:52:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 13:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 14:44:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 14:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-09-14 14:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
