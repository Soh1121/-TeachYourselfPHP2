<?php
// 詳細はリスト6.34を参照
function my_array_walk(array $array, callable $func)
{
	// 配列$arrayの内容を順に処理
	foreach ($array as $key => $value) {
		$func($value, $key);
	}
}

$result = 0;
function sum(float $value, int $key)
{
	global $result;
	$result += $value;
}

$data = [100, 50, 10, 5];
my_array_walk($data, 'sum');
print "合計値：{$result}";
