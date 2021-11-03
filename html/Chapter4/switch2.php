<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$drink = 'ビール';
	switch ($drink) {
		case '日本酒':
		case 'ビール':
		case 'ワイン':
			print '醸造酒です。';
			break;
		case 'ブランデー':
		case 'ウイスキー':
			print '蒸留酒です。';
			break;
	}
	?>
</body>

</html>