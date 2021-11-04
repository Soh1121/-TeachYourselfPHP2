<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$x = 35;
	if ($x > 20) {
		print '変数$xは20より大きいです。';
	} elseif ($x > 10) {
		print '変数$xは10より大きいです。';
	} else {
		print '変数$xは10以下です。';
	}
	?>
</body>

</html>