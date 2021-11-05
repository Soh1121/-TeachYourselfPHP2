<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = 'リオとニンザブロウとナミとリンリン';
	print_r(explode('と', $data));
	print_r(explode('や', $data));
	print_r(explode('と', $data, 2));
	print_r(explode('と', $data, -2));
	?>
</body>

</html>