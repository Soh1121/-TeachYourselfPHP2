<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = [' 高江 ', ' 青木 ', ' 片渕 '];
	array_push($data, '山田', '日尾');
	array_unshift($data, '掛谷', '土井');
	print_r(array_slice($data, 2, 3));
	?>
</body>

</html>