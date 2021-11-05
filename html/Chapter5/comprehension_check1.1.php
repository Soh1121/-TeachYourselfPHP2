<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	mb_internal_encoding('UTF-8');
	$str = "PHPはPHP:Hypertext Preprocessorの略です";
	print mb_strrpos($str, 'PHP') . '文字目';
	?>
</body>

</html>