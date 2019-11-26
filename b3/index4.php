<?php
// mang thong tin tinh thanh pho
$cities = [
	[
		'id' => 1,
		'name' => 'Ha Noi'
	],
	[
		'id' => 2,
		'name' => 'Tp.HCM'
	],
	[
		'id' => 3,
		'name' => 'Da Nang'
	],
	[
		'id' => 4,
		'name' => 'Hai Phong'
	],
	[
		'id' => 5,
		'name' => 'Can Tho'
	]
];
$districts = [
	[
		'id' => 1,
		'city_id' => 1,
		'name_dist' => 'Ba Dinh'
	],
	[
		'id' => 2,
		'city_id' => 1,
		'name_dist' => 'Hoan Kiem'
	],
	[
		'id' => 3,
		'city_id' => 2,
		'name_dist' => 'Quan 1'
	],
	[
		'id' => 4,
		'city_id' => 2,
		'name_dist' => 'Quan 2'
	],
	[
		'id' => 5,
		'city_id' => 3,
		'name_dist' => 'Hai Chau'
	],
	[
		'id' => 6,
		'city_id' => 3,
		'name_dist' => 'Ngu Hanh Son'
	],
	[
		'id' => 7,
		'city_id' => 4,
		'name_dist' => 'Le Chan'
	],
	[
		'id' => 8,
		'city_id' => 4,
		'name_dist' => 'Kien An'
	],
	[
		'id' => 9,
		'city_id' => 5,
		'name_dist' => 'Ninh Kieu'
	],
	[
		'id' => 10,
		'city_id' => 5,
		'name_dist' => 'Cai Rang'
	],
];

//foreach ($districts as $key => $items) {
//	foreach ($cities as $k => $val) {
//		if($items['city_id'] == $val['id']){
//			$districts[$key]['name_city'] = $val['name'];
//		}
//	}
//}

foreach ($cities as $key => $item) {
    foreach ($districts as $k => $val) {
        if($item['id'] == $val['city_id']){
            // gan thong tin cua quan/huyen vao trong tinh/thanh
            $cities[$key]['list_dist'][$val['id']] = $val;
        }
    }
}
//echo "<pre>";
//print_r($cities);
//die;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
    <h1>Thong tin tinh thanh</h1>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Ma Tinh/TP</th>
                <th>Ten Tinh/TP</th>
                <th>Ten Quan/Huyen</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cities as $key => $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td></td>
            </tr>
            <?php foreach ($item['list_dist'] as $k => $val): ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><?php echo $val['name_dist']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
            
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
