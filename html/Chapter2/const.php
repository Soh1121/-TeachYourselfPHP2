<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	const TAX = 1.08;
	$price = 1000;
	$sum = $price * TAX;
	print $sum;	// 結果：1080
	?>
</body>

</html>