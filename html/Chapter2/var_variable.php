<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHPの基本</title>
</head>

<body>
	<?php
	$x = 'title';
	$title = 'PHP:Hypertext Preprocessor';
	print $$x;	// 結果：PHP:Hypertext Preprocessor
	?>
</body>

</html>