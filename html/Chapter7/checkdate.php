<?php
// カレンダをテキスト表示するcalendar関数（引数$yearは年、$monthは月）
function calendar($year, $month)
{
	// 1 〜 31までの間でループ処理
	for ($i = 1; $i < 32; $i++) {
		// 日付（$i）が該当月の妥当な日である場合のみ表示
		if (checkdate($month, $i, $year)) {
			print "{$i} &nbsp;";
		}
	}
}
print '2016年2月のカレンダー：<br />';
calendar(2016, 2);
