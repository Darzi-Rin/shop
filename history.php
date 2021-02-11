<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入履歴画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php
	if (isset($_SESSION['customer'])) {
		require 'db_connect.php';
	} else {
	?>
		購入履歴を表示するには、ログインしてください。
	<?php
	}
	?>
<!--purchaseのidをまずは取ってくる SERECTを使う
	purchase_detailから該当のものだけ取ってくる SERECTを使う
	SERECTを2回使う -->
</body>

</html>
