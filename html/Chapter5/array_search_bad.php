<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
	if (!array_search('PHP', $data)) {
		print '見つかりませんでした<br />';
	}
	if (!in_array('Ruby', $data)) {
		print '見つかりませんでした<br />';
	}
	?>
</body>

</html>