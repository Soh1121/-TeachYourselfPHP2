<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>組み込み関数</title>
</head>

<body>
	<?php
	// メールの構成情報を設定
	$to = 'aozora1121@gamil.com';
	$subject = '独習PHP 改訂版';
	$body = "こんにちは、mb_send_mail関数！\nどうですか？";
	$headers = "From : user01@example.com\n";
	$headers .= "Cc : yamada@example.com\n";
	$headers .= "X-Mailer : PHP 7\n";
	if (mb_send_mail($to, $subject, $body, $headers)) {
		print 'メール送信に成功しました。';
	} else {
		print 'メール送信に失敗しました。';
	}
	?>
</body>

</html>