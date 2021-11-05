<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = 'こんにちは、赤ちゃん！';
	print mb_convert_encoding($data, 'EUC-JP', 'SJIS');
	?>
</body>

</html>