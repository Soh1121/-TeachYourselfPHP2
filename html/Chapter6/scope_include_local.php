<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>ユーザ定義関数</title>
</head>

<body>
	<?php
	function checkScope(): string
	{
		require_once 'scope_included.php';
		return $scope;
	}

	print checkScope();
	print '<br />';
	print $scope;
	?>
</body>

</html>