<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$score = 75;
	if (90 <= $score) {
		print '優';
	} elseif (70 <= $score) {
		print '良';
	} elseif (50 <= $score) {
		print '可';
	} else {
		print '不可';
	}
	?>
</body>

</html>