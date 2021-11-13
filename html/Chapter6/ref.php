<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function increment(int &$num): int
	{
		$num++;
		return $num;
	}

	$value = 10;
	print increment($value);
	print $value;
	?>
</body>

</html>