<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	// 単位を昇順に準備
	$keys = ['十', '百', '千', '万', '億', '兆', '京', '垓', '秭', '穰', '溝', '澗', '正', '載', '極', '恒河沙', '阿僧祇', '那由他', '不可思議', '無量大数'];
	// ソート対象の配列
	$data = ['那由他', '京', '垓', '億', '無量大数'];
	// 指定された単位で配列$dataをソート
	usort($data, function ($a, $b) use ($keys) {
		return array_search($a, $keys) <=> array_search($b, $keys);
	});
	print_r($data);
	?>
</body>

</html>