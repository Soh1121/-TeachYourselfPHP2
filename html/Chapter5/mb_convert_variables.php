<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = ['和田', '杉山', '杉沼', '長田', '星山'];
	mb_convert_variables('EUC-JP', 'UTF-8', $data);
	print_r($data);
	?>
</body>

</html>