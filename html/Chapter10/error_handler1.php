<?php
// エラーハンドラを登録
set_error_handler(
	function ($errno, $errstr, $file, $line, $context) {
		throw new ErrorException($errstr, 0, $errno, $file, $line);
	}
);

try {
	// わざと引数の足りない関数を呼び出し（エラー）
	mb_convert_encoding();
} catch (ErrorException $e) {
	print "エラーメッセージ：{$e->getMessage()}";
}
