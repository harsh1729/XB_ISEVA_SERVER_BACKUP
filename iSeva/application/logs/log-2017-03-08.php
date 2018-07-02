<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-03-08 06:11:09 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 218
ERROR - 2017-03-08 06:11:09 --> Severity: Warning --> file_get_contents(https://www.payumoney.com/payment/merchant/refundPayment?merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 218
ERROR - 2017-03-08 06:13:33 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 06:13:33 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 06:18:54 --> Severity: Notice --> Undefined variable: query /home/xercextx/public_html/iservice/application/models/Transaction_model.php 213
ERROR - 2017-03-08 06:18:54 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 06:19:12 --> Severity: Warning --> strlen() expects parameter 1 to be string, array given /home/xercextx/public_html/iservice/application/models/Transaction_model.php 213
ERROR - 2017-03-08 06:19:12 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 06:19:36 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 07:27:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-03-08 07:34:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-03-08 07:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10' at line 7 - Invalid query: SELECT *
FROM `business_extra` `o`
JOIN `business_extra_images` ON `o`.`id`=`business_extra_images`.`business_extra_id`
WHERE `o`.`b_extra_master_id` = '1'
AND `isenable` = 1
AND `o`.`catid` = '4'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY RAND()
 LIMIT 10
ERROR - 2017-03-08 07:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC' at line 7 - Invalid query: SELECT `o`.`id`, `o`.`heading`, `o`.`expirydatetime`, `o`.`userid`, `o`.`content`, `o`.`publishdatetime`, `o`.`b_extra_master_id`, `u`.`isactive`, `u`.`firmname`, `u`.`firmcontact`, `u`.`email`, `u`.`address`, GROUP_CONCAT( oi.imageid SEPARATOR  '|' ) images
FROM `business_extra` `o`
JOIN `business_extra_images` `oi` ON `oi`.`business_extra_id` = `o`.`id`
JOIN `user` `u` ON `u`.`id` = `o`.`userid`
WHERE `o`.`b_extra_master_id` = '5'
AND `o`.`isenable` = '1'
AND o.cityid IN()
GROUP BY `o`.`id`
ORDER BY `o`.`id` DESC
ERROR - 2017-03-08 07:36:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
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
ERROR - 2017-03-08 07:51:02 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 07:51:05 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1110275478&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 08:19:25 --> Severity: Notice --> Undefined variable: coupan_no /home/xercextx/public_html/iservice/application/models/Promocode_model.php 98
ERROR - 2017-03-08 11:36:41 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 215
ERROR - 2017-03-08 11:38:08 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 11:39:32 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 220
ERROR - 2017-03-08 11:40:06 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 218
ERROR - 2017-03-08 11:40:55 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 11:41:39 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 12:03:52 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 12:03:52 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 12:05:15 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 12:06:54 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 12:49:33 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 12:56:19 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:19:48 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:19:54 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:20:29 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:20:34 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:21:13 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 221
ERROR - 2017-03-08 13:22:29 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 13:22:29 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 13:51:20 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 13:51:20 --> Severity: Warning --> file_get_contents(https://test.payumoney.com/payment/merchant/refundPayment?
merchantKey=dRQuiA&amp;paymentId=1111100923&amp;refundAmount=1): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 13:51:49 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 219
ERROR - 2017-03-08 14:46:10 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:48:05 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:48:06 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:48:06 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:48:06 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:48:59 --> Severity: Parsing Error --> syntax error, unexpected '"transaction_status"' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 40
ERROR - 2017-03-08 14:49:34 --> Severity: Notice --> file_get_contents(): Content-type not specified assuming application/x-www-form-urlencoded /home/xercextx/public_html/iservice/application/models/Transaction_model.php 220
ERROR - 2017-03-08 14:53:03 --> Severity: Parsing Error --> syntax error, unexpected ''method'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 216
ERROR - 2017-03-08 15:53:20 --> Severity: Warning --> Illegal string offset 'status' /home/xercextx/public_html/iservice/application/models/Transaction_model.php 226
