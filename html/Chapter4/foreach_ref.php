<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
	foreach ($data as &$value) {
		$value = 'New' . $value;
	}
	print_r($data);
	?>
</body>

</html>