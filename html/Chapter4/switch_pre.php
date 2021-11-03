<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$rank = '甲';
	if ($rank == '甲') {
		print '大変良いです。';
	} elseif ($rank == '乙') {
		print '良いです。';
	} elseif ($rank == '丙') {
		print 'もう少しがんばりましょう。';
	} else {
		print '？？？';
	}
	?>
</body>

</html>