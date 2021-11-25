<?php
require_once '../DbManager.php';

try {
	// データベースへの接続を確立
	$db = getDb();
	// memberテーブルに対して新規にレコードを挿入
	$db->exec("INSERT INTO member (nam, sex, old, enter, memo) VALUES ('Yamada Toshio', 'm', 18, '2016-09-30', '')");
	// 直近のINSERT命令で取得したオートインクリメントの値を取得
	print "直近のID値：{$db->lastInsertId()}";
} catch (PDOException $e) {
	print "エラーメッセージ：{$e->getMessage()}";
}
