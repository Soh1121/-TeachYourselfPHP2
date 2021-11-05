<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$str = '住所は〒184-0000 鎌ケ谷市梶野町0-0-0です。';
	if (preg_match_all('/[0-9]{3}-[0-9]{4}/', $str, $data)) {
		foreach ($data as $item) {
			print $item[0];
		}
	}
	?>
</body>

</html>