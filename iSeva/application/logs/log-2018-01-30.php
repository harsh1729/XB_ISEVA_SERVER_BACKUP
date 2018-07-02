<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-30 11:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2018-01-30 15:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2018-01-30 15:06:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2018-01-30 15:06:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2018-01-30 15:06:39 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2018-01-30 15:06:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
ERROR - 2018-01-30 15:06:44 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2018-01-30 15:06:45 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2018-01-30 15:06:45')
ERROR - 2018-01-30 15:06:47 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2018-01-30 15:06:54 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2018-01-30 15:06:59 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2018-01-30 15:06:59', '2018-02-09 15:06:59')
ERROR - 2018-01-30 15:07:03 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2018-01-30 15:07:03 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2018-01-30 15:07:03')
ERROR - 2018-01-30 15:09:06 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2018-01-30 15:09:06 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2018-01-30 15:09:06 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2018-01-30 15:09:16 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES (NULL, NULL, NULL, NULL, 0, '2018-01-30 15:09:16', '2018-07-29 15:09:16', NULL, 0)
ERROR - 2018-01-30 15:09:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2018-01-30 15:09:41 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2018-01-30 15:09:43 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
