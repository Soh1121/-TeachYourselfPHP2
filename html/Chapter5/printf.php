<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	printf('%sは%sです。<br />', 'ニンザブロウ', 'ハムスター');
	printf('売上平均（前月比）︰%+0-8.3f<br />', 0.198765);
	printf("売上平均（前月比）︰%'*10.3e<br />", 0.198765);
	printf('%.6sは%sです。<br />', 'ニンザブロウ', 'ハムスター');
	printf('%2$sは%1$sです。%2$s、大好き！', 'ニンザブロウ', 'ハムスター');
	?>
</body>

</html>