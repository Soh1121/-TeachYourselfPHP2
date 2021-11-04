<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$language = 'PHP';
	switch ($language) {
		case 'PHP':
		case 'JSP':
		case 'ASP':
			print 'サーバサイド技術';
			break;
		case 'JavaScript':
		case 'VBScript':
			print 'クライアントサイド技術';
			break;
		default:
			print '';
	}
	?>
</body>

</html>