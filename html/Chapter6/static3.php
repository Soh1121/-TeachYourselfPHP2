<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function checkStatic()
	{
		static $x = 0;
		$x++;
		print "unset前：{$x} ";
		unset($x);
		$x = 13;
		print "unset後：{$x}<br />";
	}

	checkStatic();
	checkStatic();
	?>
</body>

</html>