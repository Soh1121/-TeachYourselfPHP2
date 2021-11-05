<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
	var_dump(array_search('JavaScript', $data));
	var_dump(array_search('PHP', $data));
	var_dump(array_search('JAVA', $data));
	var_dump(array_search(15, $data));
	var_dump(array_search(15, $data, true));
	?>
</body>

</html>