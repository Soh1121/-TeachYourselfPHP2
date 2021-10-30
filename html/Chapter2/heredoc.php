<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	$str = 'PHP (PHP:Hypertext Preprocessor) ';
	$msg = <<<EOD
	{$str}は、サーバサイドで動作する簡易なスクリプト言語です。
	まずは、本書でじっくり基礎固めしましょう。<br />
	"Let's start, everyone!!"
EOD;
	print $msg;
	?>
</body>

</html>