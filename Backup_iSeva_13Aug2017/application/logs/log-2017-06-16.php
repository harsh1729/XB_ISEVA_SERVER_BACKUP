<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-16 12:35:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-06-16 17:05:09 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2017-06-16 17:05:09 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2017-06-16 17:05:09', '2017-06-26 17:05:09')
ERROR - 2017-06-16 17:05:09 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2017-06-16 17:05:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-06-16 17:05:09 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2017-06-16 17:05:09 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2017-06-16 17:05:09')
ERROR - 2017-06-16 17:05:09 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2017-06-16 17:05:10 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-06-16 17:05:10 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-06-16 17:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2017-06-16 17:05:11 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2017-06-16 17:05:11 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2017-06-16 17:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
