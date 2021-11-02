<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>演算子</title>
</head>

<body>
	<?php
	$x = 1;
	if ($x !== 2) {
		print '実行されました。<br />';
	}
	$x === 2 or print '実行されました。';
	?>
</body>

</html>