<?php
$conn = "mysql:host=localhost;dbname=ads_new;charset=utf8";

$pdo = new PDO($conn, 'root', '');
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Document</title>
	<h2>Add page</h2>
</head>
<body>
	<div>
		<a href="/index.php">Home</a>
	</div>
	<form action="" method="POST">
		<input type="text" name="title" placeholder="Title" id="">
		<input type="text" name="description" placeholder="Description" id="">
		<input type="number" name="price" placeholder="Price" id="">
		<input type="submit" value="Save">
		<?php
		if ($_SERVER["REQUEST_METHOD"] === 'POST') {
			
		$pdo->query("INSERT INTO ads (title, description, price) VALUES ('{$_POST['title']}', '{$_POST['description']}', '{$_POST['price']}')");

	}
		
		?>
</body>
</html>