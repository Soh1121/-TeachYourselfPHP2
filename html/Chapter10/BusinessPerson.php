<?php
// 継承元のクラスファイルをインポート
require_once 'Person4.php';

final class BusinessPerson extends Person
{
	// サブクラス独自のworkメソッドを定義
	public final function work()
	{
		print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
	}
}
