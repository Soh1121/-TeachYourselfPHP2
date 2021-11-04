<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	mb_internal_encoding('UTF-8');
	$str = 'ｻｰﾊﾞｻｲﾄﾞ技術';
	print mb_convert_kana($str, 'KV');
	?>
</body>

</html>