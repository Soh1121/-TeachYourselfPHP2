<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>演算子</title>
</head>

<body>
	<?php
	$result = `dir`;
	print mb_convert_encoding($result, 'UTF-8', 'SJIS');
	?>
</body>

</html>