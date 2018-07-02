<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-02-13 07:53:00 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 392
ERROR - 2017-02-13 07:53:00 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 393
ERROR - 2017-02-13 07:53:00 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 395
ERROR - 2017-02-13 07:53:00 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `userid`, `isactive`) VALUES ('14869723801486972558.', '2017-02-13 07:53:00', NULL, -1, '0')
ERROR - 2017-02-13 07:53:05 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 392
ERROR - 2017-02-13 07:53:05 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 393
ERROR - 2017-02-13 07:53:05 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 395
ERROR - 2017-02-13 07:53:05 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `userid`, `isactive`) VALUES ('14869723851486972813.', '2017-02-13 07:53:05', NULL, -1, '0')
ERROR - 2017-02-13 07:53:09 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 392
ERROR - 2017-02-13 07:53:09 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 393
ERROR - 2017-02-13 07:53:09 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 395
ERROR - 2017-02-13 07:53:09 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `userid`, `isactive`) VALUES ('14869723891486972794.', '2017-02-13 07:53:09', NULL, -1, '0')
ERROR - 2017-02-13 07:53:13 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 392
ERROR - 2017-02-13 07:53:13 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 393
ERROR - 2017-02-13 07:53:13 --> Severity: Notice --> Undefined index:  /home/xercextx/public_html/iservice/application/models/Gallery_model.php 395
ERROR - 2017-02-13 07:53:13 --> Query error: Column 'size' cannot be null - Invalid query: INSERT INTO `gallery` (`name`, `datetime`, `size`, `userid`, `isactive`) VALUES ('14869723931486972525.', '2017-02-13 07:53:13', NULL, -1, '0')
ERROR - 2017-02-13 15:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
