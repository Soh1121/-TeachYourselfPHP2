<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$msg = <<<EOD
	サンプルは、サポートサイト［サーバサイド技術の学び舎（http://www.wings.msn.to/）」から
	入手できます。執筆のノウハウ集「WINGS Knowledge」（http://www31.atwiki.jp/wings
	project）もどうぞ。
EOD;
	print preg_replace_callback(
		'|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%&=\t\n]*)?|i',
		function ($matches) {
			foreach ($matches as $match) {
				return mb_strtoupper($match);
			}
		},
		$msg
	);
	?>
</body>

</html>