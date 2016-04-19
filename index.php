<?php 
include 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
<h1>Welcome to my site</h1>
<meta charset="utf-8">

<link rel="stylesheet" href="app.css">

	<title>Document</title>
</head>
<body>
<div><a href="add.php"><p><b>Add an ad on site</b></a></p>
</div>
	<?php include 'pager.php'; ?>
	<?php foreach ($ads as $ad): ?>
		<div class="ad">
			<p><?php echo $ad['id']; ?>:<?php echo $ad['title'] ?><br><?php echo $ad['description'] ?><br>Цена:<?php echo $ad['price'] ?></p>
	<?php endforeach; ?>

	<div class="pagination">
		<?php for($x = 1; $x <= $pages; $x++): ?>
			<a href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>"<?php if($page === $x) {echo "class='selected'";} ?>><?php echo $x; ?></a>
		<?php endfor; ?>
		</div>
</body>
</html>