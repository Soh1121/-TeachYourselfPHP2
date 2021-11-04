<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$x = 1;
	$y = 0;
	if ($x === 1)
		if ($y === 1)
			print '変数$x、$yは1です。';
		else
			print '変数$xは1ではありません。';
	?>
</body>

</html>