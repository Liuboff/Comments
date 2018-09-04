<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting(-1);
require_once ('connect.php');
require_once ('funcs.php');

if(!empty($_POST)){
	save_mess();
	header("Location: {$_SERVER['PHP_SELF']}");
	exit;
}

$messages = get_mess();
// print_arr($messages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guests book</title>

	<style>
	
	.message{
		border: 1px solid #ccc;
		padding: 10px;
		margin-bottom: 20px;
	}

</style>
</head>
<body>
	<p style="background: yellow;">Welcome to our site!!!</p>
	<hr>

	<div>
		Here you can write your comment:
	
		<form action="" method="POST">
			<p>
				<label for="name">Name</label>
				<input type="text" name="name">
			</p>
			<p>
				<label for="text">Comment</label>
				<input type="textarea" name="text">
			</p>
			<p>
				<button type="submit">Написать</button>
			</p>
		</form>
	</div>

	<hr>

	<?php if(!empty($messages)): ?>
		<?php foreach($messages as $message): ?>
			<div class="message">
				<p>Автор: <?=$message['name']?> | Дата: <?=$message['date']?></p>
				<div><?=nl2br(htmlspecialchars($message['text']))?></div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

</body>
</html>