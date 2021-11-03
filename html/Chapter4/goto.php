<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	for ($i = 1; $i < 10; $i++) {
		for ($j = 1; $j < 10; $j++) {
			$result = $i * $j;
			if ($result > 40) {
				goto end;
			}
			print "{$result} &nbsp;";
		}
		print '<br />';
	}
	end:
	?>
</body>

</html>