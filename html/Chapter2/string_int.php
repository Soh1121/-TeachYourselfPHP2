<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	var_dump((int)'0b11');
	var_dump((int)'0777');
	var_dump((int)'0xFF');
	var_dump((int)'1E4');
	var_dump(bindec('0b11'));
	var_dump(octdec('0777'));
	var_dump(hexdec('0xFF'));
	var_dump((float)'1E4');
	?>
</body>

</html>