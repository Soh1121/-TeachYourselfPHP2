<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data[] = date('Y/m/d H:i:s');
	$data[] = $_SERVER['SCRIPT_NAME'];
	$data[] = $_SERVER['HTTP_USER_AGENT'];
	$file = fopen('access.csv', 'ab') or die('ファイルを開けませんでした！');
	flock($file, LOCK_EX);
	fwrite($file, implode(",", $data) . "\n");
	flock($file, LOCK_UN);
	fclose($file);
	?>
</body>

</html>