<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function product(float ...$args): float
	{
		$result = 1;
		foreach ($args as $arg) {
			$result *= $arg;
		}
		return $result;
	}

	print product(7, 3, 10);
	print product(11, -5, 4, 88);
	?>
</body>

</html>