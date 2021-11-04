<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$data = [10, 25, 50];
	foreach ($data as &$item) {
		$item *= 1.5;
	}
	print_r($data);
	?>
</body>

</html>