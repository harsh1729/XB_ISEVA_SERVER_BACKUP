<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-25 02:57:46 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-06-25 03:02:33 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-06-25 03:06:02 --> Severity: Notice --> Undefined variable: cateiddb /home/xercextx/public_html/iservice/application/models/Businessextra_model.php 609
ERROR - 2017-06-25 03:06:02 --> Severity: Notice --> Undefined variable: usermaxlimit /home/xercextx/public_html/iservice/application/models/User_model.php 67
ERROR - 2017-06-25 03:06:31 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-06-25 03:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-06-25 03:09:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/User.php 212
ERROR - 2017-06-25 03:09:23 --> 404 Page Not Found: client_requests/Category/index
ERROR - 2017-06-25 03:09:54 --> Query error: Column 'userid' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES (NULL, NULL, NULL, '2017-06-25 03:09:54', '2017-07-05 03:09:54')
ERROR - 2017-06-25 03:10:52 --> Query error: Column 'heading' cannot be null - Invalid query: INSERT INTO `offer` (`userid`, `heading`, `content`, `publishdatetime`, `expirydatetime`) VALUES ('1234,heading=waste,content=grabon,', NULL, NULL, '2017-06-25 03:10:52', '2017-07-05 03:10:52')
ERROR - 2017-06-25 03:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:11:35 --> 404 Page Not Found: admin_requests/Category/index
ERROR - 2017-06-25 03:11:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:11:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:12:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:12:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/xercextx/public_html/iservice/application/controllers/client_requests/Offers.php 25
ERROR - 2017-06-25 03:12:52 --> 404 Page Not Found: admin_requests/Login/index
ERROR - 2017-06-25 03:13:02 --> 404 Page Not Found: admin_requests/Get_user/index
ERROR - 2017-06-25 03:13:24 --> Query error: Column 'empid' cannot be null - Invalid query: INSERT INTO `job_cate_empl_mapping` (`empid`, `jobcateid`) VALUES (NULL, NULL)
ERROR - 2017-06-25 16:06:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-06-25 16:10:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
