<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	$data[0] = '山田';
	$data[1] = '掛谷';
	$data[2] = '日尾';
	$data[3] = '本多';
	$data[1] = '薄井';
	$data[] = '矢吹';
	print_r($data);
	?>
</body>

</html>