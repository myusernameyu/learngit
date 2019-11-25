<?php

date_default_timezone_set("Asia/Shanghai");

$str = '中国,山西省,忻州市,繁峙县';

// echo str_replace(['省', '市', '区', '县'], '', $str);

// echo date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
// var_dump(array_unique(array_merge([1,2,3], [2,3])));

// echo strtotime(date('Y-m-d'));

echo date('Y-m-d', 1562601599);

