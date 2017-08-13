<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-01-18 11:24:38 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 392
ERROR - 2017-01-18 11:24:38 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 393
ERROR - 2017-01-18 11:24:38 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 395
ERROR - 2017-01-18 11:24:38 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `userid`, `isactive`) VALUES ('14847386781484739095.', '2017-01-18 11:24:38', NULL, -1, '0')
ERROR - 2017-01-18 14:01:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
