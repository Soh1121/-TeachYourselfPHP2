<?php
require_once '../DbManager.php';
try {
	// データベースへの接続を取得
	$db = getDb();
	// bookテーブルを更新するためのUPDATE命令を準備
	$stt = $db->prepare('UPDATE book SET title=:title, price=:price, publish=:publish, published=:published WHERE isbn=:isbn');
	// プレイスホルダにバインドする変数を関連付け
	$stt->bindParam(':isbn', $isbn);
	$stt->bindParam(':title', $title);
	$stt->bindParam(':price', $price);
	$stt->bindParam(':publish', $publish);
	$stt->bindParam(':published', $published);
	// フォームからの入力値を順に取得し、対応する変数にセット
	// （要素名はisbn1、isbn2、…、title1、title2、…のように連番が振られているはず）
	for ($i = 1; $i <= $_POST['cnt']; $i++) {
		$isbn = $_POST['isbn' . $i];
		$title = $_POST['title' . $i];
		$price = $_POST['price' . $i];
		$publish = $_POST['publish' . $i];
		$published = $_POST['published' . $i];
		// UPDATE命令を実行
		$stt->execute();
	}
	// 処理後は元のフォームにリダイレクト
	header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/bindParam_form.php');
} catch (PDOException $e) {
	print "エラーメッセージ：{$e->getMessage()}";
}
