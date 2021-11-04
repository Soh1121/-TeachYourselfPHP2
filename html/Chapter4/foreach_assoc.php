<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$data = [
		'高江' => '男', '掛谷' => '女',
		'日尾' => '男', '薄井' => '女', '和田' => '男'
	];
	foreach ($data as $key => $value) {
		print "{$key}︰{$value}<br />";
	}
	?>
</body>

</html>