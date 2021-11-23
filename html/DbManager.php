<?php
function getDb()
{
	$dsn = 'mysql:dbname=selfphp; host=mysql; charset=utf8';
	$usr = 'root';
	$passwd = 'root';
	// データベースへの接続を確立
	$db = new PDO($dsn, $usr, $passwd);
	return $db;
}
