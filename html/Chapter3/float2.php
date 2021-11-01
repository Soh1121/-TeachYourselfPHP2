<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>演算子</title>
</head>

<body>
	<?php
	$add = bcadd(0.1, 0.7, 1);
	$mul = bcmul($add, 10, 1);
	print floor($mul);
	?>
</body>

</html>