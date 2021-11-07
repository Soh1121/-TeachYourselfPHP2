<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	$area = getTriangleArea(8, 10);

	if (true) {
		function getTriangleArea(float $base, float $height): float
		{
			return $base * $height / 2;
		}
	}
	?>
</body>

</html>