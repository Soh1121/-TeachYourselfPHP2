<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	mb_internal_encoding('UTF-8');
	$str = "ボクの名前はリオです。";
	print str_replace(['ボク', 'リオ'], ['僕', '凛生'], $str);
	?>
</body>

</html>