<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$sum = 0;
	$i = 0;
	while ($i <= 100) {
		$i++;
		if ($i % 2 !== 0) {
			continue;
		}
		$sum += $i;
	}
	print "合計値は{$sum}です。";
	?>
</body>

</html>