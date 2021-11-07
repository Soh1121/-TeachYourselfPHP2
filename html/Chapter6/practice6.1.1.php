<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function diamond(float $diagonal1, float $diagonal2): float
	{
		return $diagonal1 * $diagonal2 / 2;
	}

	echo diamond(4, 6);
	?>
</body>

</html>