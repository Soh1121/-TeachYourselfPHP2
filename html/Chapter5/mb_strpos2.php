<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$str = 'にわにはにわにわとりがいる';
	if (mb_strpos($str, 'にわ') !== false) {
		print '文字列が見つかりました';
	}
	?>
</body>

</html>