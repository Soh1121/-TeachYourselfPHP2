<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = ['高江', '青木', '片渕'];
	print array_push($data, '山田', '土井');
	print_r($data);
	print array_pop($data);
	print_r($data);
	print array_shift($data);
	print_r($data);
	print array_unshift($data, '掛谷', '横塚', '上垣');
	print_r($data);
	?>
</body>

</html>