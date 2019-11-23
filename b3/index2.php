<?php
// cac ky thuat xu ly mang trong php
// mang 1 chieu - tuan tu
$fruit = ['cam', 'quyt', 'mit' ,'dua', 'le'];
// in mang
// khong dung echo - echo chi danh cho chuoi
echo "<pre>";

print_r($fruit);
echo "<br>";

// mang 1 chieu - khong tuan tu
$infoStudent = [
	'name' => 'Van Teo',
	'age' => 20,
	'email' => 'vanteo@gmail.com'
];
print_r($infoStudent);

// mag da chieu - tuan tu
$number = [1,2,3,[100,200,200], 4,5,6, [-1,-2,-3]];
print_r($number);

$infoCats = [
	[
		'name' => 'Tom',
		'age' => 2,
		'color' => 'black',
		'country' => ['Vietnam', 'USA', 'Lao']
	],
	[
		'name' => 'Tom 2',
		'age' => 1,
		'color' => 'white',
		'country' => ['Uc', 'TQ', 'HQ']
	]
];
print_r($infoCats);
// truy cap vao 1 phan tu nam trong mang
// nameArray[key]
$fruit2 = ['cam', 'quyt', 'mit' ,'dua', 'le'];
echo  $fruit2[4];
echo "<br>";
echo $infoCats[0]['country'][1];