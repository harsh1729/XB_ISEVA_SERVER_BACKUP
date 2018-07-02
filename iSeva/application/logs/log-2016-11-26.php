<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-11-26 04:38:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2016-11-26 04:38:12 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2016-11-26 04:38:12 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2016-11-26 04:38:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
ERROR - 2016-11-26 04:38:13 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2016-11-26 04:38:13 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2016-11-26 04:38:13')
ERROR - 2016-11-26 04:39:03 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2016-11-26 04:39:03 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2016-11-26 04:39:03 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2016-11-26 04:39:03 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2016-11-26 04:39:04 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES (NULL, NULL, NULL, NULL, 0, '2016-11-26 04:39:04', '2017-05-25 04:39:04', NULL, 0)
ERROR - 2016-11-26 04:39:11 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2016-11-26 04:39:15 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2016-11-26 04:39:17 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2016-11-26 04:39:17')
ERROR - 2016-11-26 04:39:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 102
ERROR - 2016-11-26 04:39:21 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2016-11-26 04:39:21', '2016-12-06 04:39:21')
ERROR - 2016-11-26 13:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2016-11-26 13:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
