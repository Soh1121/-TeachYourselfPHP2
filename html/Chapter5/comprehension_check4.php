<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	print (string)pow(5, 3) . "\n";
	print (string)abs(-12) . "\n";
	$x = 10;
	print (string)$x . "\n";
	unset($x);
	var_dump($x);
	?>
</body>

</html>