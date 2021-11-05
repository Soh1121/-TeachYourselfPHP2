<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$str = ['PHPは良い言語です。', 'PHPは良いサーバ実行環境です。'];
	$src = ['PHP', '良い'];
	$rep = ['PHP 7', '素晴らしい'];
	print_r(str_replace($src, $rep, $str, $cnt));
	print "{$cnt}個の置き換えをしました。";
	?>
</body>

</html>