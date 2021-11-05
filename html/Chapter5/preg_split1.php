<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$today = '2016-05-14';
	$result = preg_split('|[/.\-]|', $today);
	print "{$result[0]}年{$result[1]}月{$result[2]}日";
	?>
</body>

</html>