<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>

	<!-- フォーム作成 -->
	<form action="customer_output.php" method="POST">
		<table>
			<tr>
				<th><label for="name">お名前</label></th>
				<td><input type="text" name="name" value=""></td>
			</tr>
			<tr>
				<th><label for="address">住所</label></th>
				<td><input type="text" name="address" value=""></td>
			</tr>
			<tr>
				<th><label for="login">ログイン名</label></th>
				<td><input type="text" name="login" value=""></td>
			</tr>
			<tr>
				<th><label for="password">パスワード</label></th>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="確定"></td>
			</tr>
		</table>
	</form>

</body>

</html>
