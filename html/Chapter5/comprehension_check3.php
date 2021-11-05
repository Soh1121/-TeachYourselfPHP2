<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$file = fopen('sample.dat', 'rb') or die('Cannot open file!');
	flock($file, LOCK_SH);
	while ($line = fgets($file, 1024)) {
		if (preg_match('|http(s)://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|i', $line, $data)) {
			print $data[0] . '<br />';
		}
	}
	flock($file, LOCK_UN);
	fclose($file);
	?>
</body>

</html>