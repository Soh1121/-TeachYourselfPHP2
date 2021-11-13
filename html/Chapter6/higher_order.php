<?php
// 高階関数my_array_walkを定義
function my_array_walk(array $array, callable $func)
{
	// 配列$arrayの内容を順に処理
	foreach ($array as $key => $value) {
		$func($value, $key);
	}
}
// 配列を処理するためのユーザ定義関数
function showItem($value, $key)
{
	print "{$key}：{$value}<br />";
}

$data = ['杉山', '長田', '杉沼', '和田', '土井'];
my_array_walk($data, 'showItem');
