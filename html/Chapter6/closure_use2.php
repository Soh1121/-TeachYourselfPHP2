<?php
// リスト6.34を参照
function my_array_walk(array $array, callable $func)
{
	foreach ($array as $key => $value) {
		$func($value, $key);
	}
}

function hoge()
{
	$data = [100, 50, 10, 5];
	$result = 0;
	my_array_walk($data, function (float $value, int $key) use (&$result) {
		$result += $value;
	});

	print "合計値：{$result}";
}

hoge();
