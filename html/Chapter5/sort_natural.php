<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = ['img15.png', 'img5.png', 'img2.png', 'img18.png', 'img3.png'];
	sort($data, SORT_NATURAL);
	print_r($data);
	?>
</body>

</html>