<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	$str = '彼の電話番号は0399-88-9785、私のは0398-99-1234です。郵便番号はどちら
	も687-1109です。';
	if (preg_match(
		'/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',
		$str,
		$data,
		PREG_OFFSET_CAPTURE
	)) {
		print_r($data);
	}
	?>
</body>

</html>