<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$rank = '甲';
	switch ($rank) {
		case '甲':
			print '大変良いです。';
			break;
		case '乙':
			print '良いです。';
			break;
		case '丙':
			print 'もう少しがんばりましょう。';
			break;
		default:
			print '？？？';
			break;
	}
	?>
</body>

</html>