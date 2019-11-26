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
echo "<br>";

// duyet qua tat ca cac phan tu nam trong mang
$arrMyNumber = [1,2,3,4,5,6,7,8,9];
foreach ($arrMyNumber as  $val) {
	//echo "key : {$key} - value: {$val}";
	echo "value: {$val}";
	echo "<br>";
}

foreach ($infoCats as $k => $item) {
	echo "keyArray - {$k}";
	echo "<br/>";
	echo "color : {$item['color']}";
	echo "<br/>";
}

$persons = [
	[
		'name' =>'Nguyen Van Teo',
		'age' => 20,
		'infoworks' => [
			[
				'name_work' => 'LTV',
				'money' => 100
			],
			[
				'name_work' => 'Teacher',
				'money' => 50
			]
		]
	],
	[
		'name' =>'Nguyen Van Ty',
		'age' => 24,
		'infoworks' => [
			[
				'name_work' => 'ABC',
				'money' => 10000
			],
			[
				'name_work' => 'EFG',
				'money' => 500
			]
		]
	]
];

foreach ($persons as $key => $value) {
	if(isset($value['infoworks'])){
		foreach ($value['infoworks'] as $k => $item) {
			echo "name work : {$item['name_work']}";
			echo "<br/>";
		}
	}
}

$fooball = []; // khai bao mang rong
// tu them key va value vao mang
$fooball['player'] = 'Messi';
$fooball['money'] = 10000;
$fooball[] = 'ASASASA';
print_r($fooball);

$arrMyNumber2 = [1,2,3,4,5,6,7,8,9];
$newNumberArr = [];
// xu ly lay ra tat ca cac so chan cho vao mang $newNumberArr
foreach ($arrMyNumber2 as $b) {
	if($b % 2 == 0){
		$newNumberArr[] = $b;
	}
}
 print_r($newNumberArr);