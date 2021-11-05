<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	var_dump(is_int(101));
	var_dump(is_int('101'));
	var_dump(is_numeric('101'));
	var_dump(is_float(1.5E8));
	var_dump(is_resource(fopen('access.log', 'rb')));
	var_dump(is_null(''));
	?>
</body>

</html>