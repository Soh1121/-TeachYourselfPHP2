<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>演算子</title>
</head>

<body>
	<?php
	var_dump('3.14' == 3.1400000);		// 結果︰bool(true)
	var_dump('3.14E2' == 314);				// 結果︰bool(true)
	var_dump('0x10' == 16);						// 結果︰bool(false)
	var_dump('010' == 8);							// 結果︰bool(false)
	var_dump('0b11' == 3);						// 結果︰bool(false)
	var_dump('13xyz' == 13);					// 結果︰bool(true)
	var_dump('X' == 0);								// 結果︰bool(true)
	var_dump('3.14' == '3.1400000');	// 結果︰bool(true)
	var_dump('3.14E2' == '314');			// 結果︰bool(true)
	var_dump('13xyz' == '13');				// 結果︰bool(false)
	?>
</body>

</html>