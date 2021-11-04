<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$str = 'にわにはにわにわとりがいる';
	print str_replace('にわ', 'ニワ', $str, $cnt) . '<br />';
	print "{$cnt}個の置き換えをしました。";
	?>
</body>

</html>