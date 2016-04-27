<?php
include 'init.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="app.css">
	<title>Document</title>
	<h2>Add page</h2>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		<a href="/index.php"><p><b>&#167Homepage</b></p></a>

	</div>
	<form action="" method="POST">
		
		<div class="title" style="border-radius: 10px;">
		
			<input class="edit" type="text" style="border-radius: 10px;" value="<?= isset($_POST['title']) ? $_POST['title']  : '' ?>" name="title" size="50" maxlength="50" placeholder="Title" id="">
			
		</div>

		<div>
			<textarea class="edit" name="description" rows="8" cols="50" style="border-radius: 10px;" placeholder="Description"><?php echo isset($_POST['description']) ? $_POST['description']  : '' ?></textarea>
		</div>

		<div>
			<input class="edit" type="number" value="<?php echo isset($_POST['price']) ? $_POST['price']  : '' ?>" name="price" style="border-radius: 10px;" min="1" max="100000" size="50" placeholder="Price" id="">
		</div>

		<div>
			<input class="pipka" type="submit" value="Save">
		</div>
		<?php 
			if ($_SERVER["REQUEST_METHOD"] === 'POST') {
				if (empty($_POST['title'])) { ?>
					<div class="alert alert-warning">
	    				<a href="#" class="close" data-dismiss="alert">&times;</a>
	    				<strong>Warning!</strong> Field 'Title' is empty.
				</div>
				<?php } elseif (empty($_POST['description'])) { ?>
					<div class="alert alert-warning">
    					<a href="#" class="close" data-dismiss="alert">&times;</a>
    					<strong>Warning!</strong> Field 'Description' is empty.
    				</div>
				<?php } elseif (empty($_POST['price'])) { ?>
					<div class="alert alert-warning">
    					<a href="#" class="close" data-dismiss="alert">&times;</a>
    					<strong>Warning!</strong> Field 'Price' is empty.
    				</div>
					<?php } else {	
				
			$ads = $pdo->prepare("INSERT INTO ads (title, description, price) VALUES (:title, :description, :price)");
			$ads->bindParam(':title', $_POST['title']);
			$ads->bindParam(':description', $_POST['description']);
			$ads->bindParam(':price', $_POST['price']);
			$ads->execute(); ?>
				<div class="alert alert-success fade in">
    				<a href="#" class="close" data-dismiss="alert">&times;</a>
    				<strong>Поздравляю ПЕРДУНЫ!!</strong> Ваши данные успешно добавлены.
				</div>
			<?php header("Refresh: 2; url=index.php");
			}

}
		?>

</body>
</html>