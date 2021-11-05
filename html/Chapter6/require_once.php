<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	require_once 'included.php';
	$area = getTriangleArea(8, 10);
	print "三角形の面積は{$area}です。";
	?>
</body>

</html>