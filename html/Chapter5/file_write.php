<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	// 書き込み内容を配列$dataにセット
	$data[] = date('Y/m/d H:i:s');
	$data[] = $_SERVER['SCRIPT_NAME'];
	$data[] = $_SERVER['HTTP_USER_AGENT'];
	$data[] = $_SERVER['HTTP_REFERER'];
	// access.logを追加書き込みモードでオープン
	$file = @fopen('access.log', 'ab') or die('ファイルを開けませんでした！');
	// ファイルのロック
	flock($file, LOCK_EX);
	// ファイルの書き込み
	fwrite($file, implode("\t", $data) . "\n");
	// ロックの解除
	flock($file, LOCK_UN);
	// ファイルのクローズ
	fclose($file);
	print 'アクセスログを記録しました。';
	?>
</body>

</html>