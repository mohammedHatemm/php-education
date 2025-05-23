<?php
// time() -> بيحيب الوقت حسب التايم زون بتاعك
// echo date('y'); -> بيجيب الوقت جسب م انت بتبعتله y , m , d
// date_default_timezone_set("Africa/Cairo"); -> لازم مدينه معترف بيها دوليا
// echo date('y/m/d h-i-s');
// echo date_default_timezone_get();


date_default_timezone_set("Africa/Cairo");

$date2 = date_create("2025-1-23");
$date1 = date_create('2020-7-23');
$diff = date_diff($date1, $date2);
// echo date_format($date, "y/m/d");
echo var_dump($diff->m);
