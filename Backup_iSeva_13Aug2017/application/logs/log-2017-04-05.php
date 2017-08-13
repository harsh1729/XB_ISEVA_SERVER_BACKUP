<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-05 05:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-04-05 06:59:55 --> 404 Page Not Found: client_requests/Promocodes/get_promo_image
ERROR - 2017-04-05 13:08:57 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2017-04-05 13:08:57 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:08:57')
ERROR - 2017-04-05 13:08:57 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2017-04-05 13:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:08:57 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2017-04-05 13:08:57 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:08:57')
ERROR - 2017-04-05 13:08:57 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:08:57 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2017-04-05 13:08:57 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2017-04-05 13:08:57 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2017-04-05 13:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
ERROR - 2017-04-05 13:08:58 --> Severity: Notice --> Undefined variable: number /home/xercextx/public_html/iservice/application/models/Gcmuser_model.php 171
ERROR - 2017-04-05 13:08:58 --> Query error: Column 'imei' cannot be null - Invalid query: INSERT INTO `call_number` (`imei`, `number`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:08:58')
ERROR - 2017-04-05 13:08:58 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2017-04-05 13:08:58', '2017-04-15 13:08:58')
ERROR - 2017-04-05 13:08:58 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:08:58')
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
ERROR - 2017-04-05 13:08:58 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2017-04-05 13:08:58 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2017-04-05 13:08:58', '2017-04-15 13:08:58')
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/models/City_model.php 96
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> array_keys() expects parameter 1 to be array, boolean given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1520
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1521
ERROR - 2017-04-05 13:08:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/system/database/DB_query_builder.php 1549
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2017-04-05 13:08:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-04-05 13:08:59 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:08:59 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2017-04-05 13:08:59', '2017-04-15 13:08:59')
ERROR - 2017-04-05 13:08:59 --> 404 Page Not Found: client_requests/City/getAllCities
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2017-04-05 13:08:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2017-04-05 13:08:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:08:59 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2017-04-05 13:09:00 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2017-04-05 13:09:00 --> Query error: Column 'catid' cannot be null - Invalid query: INSERT INTO `jobs` (`catid`, `cityid`, `title`, `salary`, `job_profile`, `timings`, `holidays`, `eligibility`, `others`, `personname`, `personnumber`, `isactive`, `expdate`, `employerid`, `minimumexp`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL)
ERROR - 2017-04-05 13:09:00 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-04-05 13:09:00 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `job_employer` (`name`, `number`, `username`, `password`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e')
ERROR - 2017-04-05 13:09:00 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:09:00 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:09:00 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:09:00')
ERROR - 2017-04-05 13:09:01 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2017-04-05 13:09:01 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:09:01 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:09:01 --> Query error: Column 'gcmtextid' cannot be null - Invalid query: INSERT INTO `gcmuser` (`gcmtextid`, `imei`, `datetime`) VALUES (NULL, NULL, '2017-04-05 13:09:01')
ERROR - 2017-04-05 13:09:01 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:09:01 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:09:01 --> 404 Page Not Found: client_requests/City/getAllCities
ERROR - 2017-04-05 13:09:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:09:02 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-04-05 13:09:02 --> 404 Page Not Found: client_requests/City/getAllCities
ERROR - 2017-04-05 13:09:02 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES (NULL, NULL, NULL, NULL, 0, '2017-04-05 13:09:02', '2017-10-02 13:09:02', NULL, 0)
ERROR - 2017-04-05 13:09:03 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `business_extra` (`userid`, `b_extra_master_id`, `heading`, `content`, `catid`, `publishdatetime`, `expirydatetime`, `cityid`, `isbusiness`) VALUES (NULL, NULL, NULL, NULL, 0, '2017-04-05 13:09:03', '2017-10-02 13:09:03', NULL, 0)
ERROR - 2017-04-05 13:09:04 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-04-05 13:09:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-04-05 13:09:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-04-05 13:09:05 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2017-04-05 13:09:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-04-05 13:09:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:09:06 --> Query error: Column 'name' cannot be null - Invalid query: INSERT INTO `user` (`name`, `contact`, `username`, `password`, `referredbyuserid`, `promocode`) VALUES (NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0, 'd41d8')
ERROR - 2017-04-05 13:09:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:09:06 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-04-05 13:09:06 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-04-05 13:09:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
ERROR - 2017-04-05 13:09:07 --> Query error: Column 'deviceid' cannot be null - Invalid query: INSERT INTO `user_registered_number` (`deviceid`, `number`, `name`) VALUES (NULL, NULL, NULL)
ERROR - 2017-04-05 14:47:31 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-04-05 14:56:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Category.php 106
