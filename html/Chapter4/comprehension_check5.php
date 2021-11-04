<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>制御構文</title>
</head>

<body>
	<?php
	$language = 'PHP';
	if ($language === 'PHP' || $language === 'JSP' || $language === 'ASP') {
		print 'サーバサイド技術';
	} elseif ($language === 'JavaScript' || $language === 'VBScript') {
		print 'クライアントサイド技術';
	}
	?>
</body>

</html>