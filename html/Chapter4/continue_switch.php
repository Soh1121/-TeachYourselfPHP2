<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	// $iを1〜3で変化させるループ
	for ($i = 1; $i < 4; $i++) {
		$result = 0;
		switch ($i) {
			case 1:
			case 3:
				// $i = 1、3の場合のみ変数$resultを計算
				$result = $i * $i;
				break;
			case 2:
				continue 2;
		}
		print "{$i}の2乗は{$result}です。<br />";
	}
	?>
</body>

</html>