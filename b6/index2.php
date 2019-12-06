<?php

header('Content-Type: text/html; charset=utf-8');

// nhung file index.php sang file index2.php
require 'index.php';
//require_once 'index.php';

//include 'index.php';
//include_once 'index.php';

$number2 = 200;
$total = $number1 + $number2;
echo "kết quả là : " .$total;

// dieu huong trang ve index.php
header('Location:index.php');