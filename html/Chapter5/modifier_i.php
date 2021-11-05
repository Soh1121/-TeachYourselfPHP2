<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$msg = <<<EOD
	サンプルは、サポートサイト「サーバサイド技術の学び舎（http://www.wings.msn.
	to/）から入手できます。執筆のノウハウ集「WINGS Knowledge」
	（HTTP://www31.atwiki.jp/wingsproject）もどうぞ。
EOD;
	print preg_replace(
		'|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=]*)?|i',
		'<a href="$0">$0</a>',
		$msg
	);
	?>
</body>

</html>