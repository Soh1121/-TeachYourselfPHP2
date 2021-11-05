<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$today = '2016-05-14';
	$result = preg_split('|([/.¥-])|', $today, -1, PREG_SPLIT_DELIM_CAPTURE);
	print_r($result);
	?>
</body>

</html>