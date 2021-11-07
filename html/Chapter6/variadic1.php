<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function sum(float ...$args): float
	{
		// 結果を格納するための変数$result
		$result = 0;
		// 取得した引数を順に加算処理
		foreach ($args as $arg) {
			$result += $arg;
		}
		return $result;
	}

	print sum(7, 3, 10);
	print sum(11, -5, 4, 88);
	?>
</body>

</html>