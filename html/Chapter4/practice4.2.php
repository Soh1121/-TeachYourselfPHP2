<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<table border="1">
		<?php
		for ($i = 1; $i < 10; $i++) {
			print '<tr>';
			for ($j = 1; $j < 10; $j++) {
				print '<td>' . (string)($i * $j) . '</td>';
			}
			print '</tr>';
		}
		?>
	</table>
</body>

</html>