<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	$data = [
		'str' => 0,		// 文字列
		'7' => 1,			// 整数
		'07' => 2, 		// 整数（のように見えるが…）
		10.5 => 3,		// 小数点数
		true => 4,		// bool値
		null => 5,		// null値
	];
	print_r($data);
	?>
</body>

</html>