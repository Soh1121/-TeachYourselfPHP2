<?php
$fl = $_GET['path'];

$flag = false;
// /docフォルダ配下のファイルを順に取得
$dir = new DirectoryIterator('./doc/');
foreach ($dir as $file) {
	// クエリ情報pathと等しいファイルが存在する場合のみ、フラグをtrue
	if ($file->isFile() && $file->getFileName() === $fl) {
		$fl = $file->getFileName();
		$flag = true;
		break;
	}
}
// フラグ変数がfalseである場合は不正な要求と判断し、エラー表示
if (!$flag) {
	die('不正な要求です。');
}
