<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 2 == 0) {
			continue;
		}
		$sum += $i;
	}
	print $sum;
	?>
</body>

</html>