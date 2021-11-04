<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	mb_internal_encoding('UTF-8');
	$str = 'サーバサイド技術';
	print mb_substr($str, 3, 3);
	?>
</body>

</html>