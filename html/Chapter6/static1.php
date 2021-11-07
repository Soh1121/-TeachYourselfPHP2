<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function checkStatic(): int
	{
		$x = 0;
		return ++$x;
	}

	print checkStatic();
	print '<br />';
	print checkStatic();
	?>
</body>

</html>