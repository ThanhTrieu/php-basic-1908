<?php
// xu ly ngay thang trong php

// thiet lap mui gio
// date_default_timezone_set('Asia/Ho_Chi_Minh');

// lay ra thoi gian hien tai
$date = date('d/m/Y H:i:s');

// dinh dang ngay thang trong mysql
$date2 = date('Y-m-d'); // string - mysql : date
// dinh dang ngay thang gio phut giay trong mysql
$date2 = date('Y-m-d H:i:s'); // string - mysql datetime

// lay ra so giay tinh tu nam 1/1/1970 den bay gio
// hien tai cac ham xu ly ngay thang trong php thi chi dung den nam 2035
$time = time();

// so sanh ngay thang trong php
$today = date('Y-m-d');
$yesterday = "2019-12-19";
$timeYesterday = strtotime($yesterday);
// strtotime : no dem so giay tinh tu ngay 1/1/1970 den  23:59:59 cua ngay can tinh
$timeToday = strtotime($today);

echo "<br>";
if($timeYesterday < $timeToday){
	echo "Yes";
} else {
	echo "Fail";
}
echo "<br>";

$date_int = mktime(0, 0, 0, 11, (20 + 200), 2019);
echo $date_int; // tra ve so giay
// chuyen doi ve dinh dang ngay thang
$myDate = date('d/m/Y', $date_int);
echo "<br>";
echo $myDate;
echo "<br>";

$myToday = date('Y-m-d', strtotime("-3year"));
echo $myToday;

