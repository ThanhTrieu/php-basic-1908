<?php
	// tiep cac kien thuc ve mang php
// tao 1 mang bieu dien thong tin cho 3 phong lam viec
$rooms = [
	[
		'id' => 1,
		'name_room' => 'Hanh Chinh',
		'manager' => 'Van A',
		'year' => 2009
	],
	[
		'id' => 2,
		'name_room' => 'To Chuc',
		'manager' => 'Thi B',
		'year' => 2009
	],
	[
		'id' => 3,
		'name_room' => 'IT',
		'manager' => 'Van C',
		'year' => 2009
	]
];
// tao 1 mang bieu dien thong tin cua 3 nhan vien
$staffs = [
	[
		'id' => 113,
		'rom_id' => 1,
		'name' => 'Nguyen Van Teo',
		'address' => 'Ha Noi',
		'money' => 100000
	],
	[
		'id' => 114,
		'rom_id' => 2,
		'name' => 'Nguyen Van Ty',
		'address' => 'Hai Duong',
		'money' => 120000
	],
	[
		'id' => 115,
		'rom_id' => 3,
		'name' => 'Nguyen Thi No',
		'address' => 'Hai Duong',
		'money' => 220000
	]
];

// can xu lay thong tin ten truong phong va ten phong do vao mang du lieu staffs tuong ung cho tung nhan vien
foreach ($staffs as $key => $item) {
	foreach ($rooms as $k => $val) {
		// can xem nhan vien thuoc cac phong nao?
		if($item['rom_id'] == $val['id']){
			// can lay ten phong va ten truong phong cho vao mang staff
			$staffs[$key]['name_manager'] = $val['manager'];
			$staffs[$key]['name_room'] = $val['name_room'];
		}
	}
}

//echo "<pre>";
//print_r($staffs);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Array PHP</title>
</head>
<body>
	<h1> Thong tin nhan vien</h1>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th>Ma NV</th>
				<th>Ho Ten</th>
				<th>Ten Phong</th>
				<th>Truong Phong</th>
				<th>Dia Chi</th>
				<th>Tien Luong</th>
			</tr>
		</thead>
		<tbody>
		
		<?php $totalMoney = 0; ?>
		
		<?php foreach ($staffs as $key => $item): ?>
			
			<?php $totalMoney += is_numeric($item['money']) ? $item['money'] : 0; ?>
			
			<tr>
				<td>
					<?php echo $item['id']; ?>
				</td>
				<td>
					<?php echo $item['name']; ?>
				</td>
				<td>
					<?php echo $item['name_room']; ?>
				</td>
				<td>
					<?php echo $item['name_manager']; ?>
				</td>
				<td>
					<?php echo $item['address'] ?>
				</td>
				<td>
					<?php echo number_format($item['money']); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">Tong Tien</td>
				<td><?php echo number_format($totalMoney); ?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>
