<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	for ($i = 1, $j = 1; $result = $i * $j, $i < 6; $i++, $j++) {
		print "{$i}✕{$j}={$result}<br />";
	}
	?>
</body>

</html>