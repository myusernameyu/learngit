<?php

date_default_timezone_set("Asia/Shanghai");

$str = '中国,山西省,忻州市,繁峙县';

// echo str_replace(['省', '市', '区', '县'], '', $str);

// echo date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
// var_dump(array_unique(array_merge([1,2,3], [2,3])));

// echo strtotime(date('Y-m-d'));

echo date('Y-m-d', 1562601599);


array(11) {
  ["app_id"] => string(16) "2018072360778166"
  ["format"] => string(4) "JSON"
  ["charset"] => string(5) "utf-8"
  ["sign_type"] => string(4) "RSA2"
  ["version"] => string(3) "1.0"
  ["return_url"] => string(78) "http://wts.m-code.cn/addons/litestore/api.order/callback_for_order/type/alipay"
  ["notify_url"] => string(78) "http://wts.m-code.cn/addons/litestore/api.order/callback_for_order/type/alipay"
  ["timestamp"] => string(19) "2019-07-06 16:06:36"
  ["biz_content"] => string(162) "{"app_id":"2018072360778166","out_biz_no":"T2019070699499751","payee_type":"ALIPAY_LOGONID","payee_account":"1563648353@qq.com","amount":"1.00","product_code":""}"
  ["method"] => string(36) "alipay.fund.trans.toaccount.transfer"
  ["sign"] => string(344) "va1ob+CkPjLG8VW+kQ38T1b3BrSUJ10wVJgLLVbsnMRpGLxGZrzzirDmECR08ZkUcILarnBkELt/4Mn17gPe6nZC8inEk+TUxJbNgNw7e36QkBOOCGWjm0ARVC19Sz6ktS1pXNDtXZofRMIKjZ5KYZaW60pRTPUJqNAj6iI8CdfX6lrYbGeut+F69JOsddueSEgNFWYKHUaYPPXOfyGs98FySXHDlBuzZT9mrDFaGnDymoEN1z0geAx5kPFTPu5QvEBFy80UVEI/4qlcqIlWSPjmNQMjVfl+y/F+NrJGjDeWSWvYbhLjdDa7GCo/Tpy5HIufwGjRoAzLgZtXi2oqBA=="
}


