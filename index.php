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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<div><a href="add.php"><p><b>Add an ad on site</b></a></p>
</div>
	<?php include 'pager.php'; ?>
	<table class="table table-bordered table-hover table-stripped" width="100%">
			<thead>
				<tr>
					<td style="color: blue"><b>ID</b></td>
					<td style="color: blue"><b>Title</b></td>
					<td style="color: blue"><b>Description</b></td>
					<td style="color: blue"><b>Price</b></td>
				<tr>
			</thead>

	<?php foreach ($ads as $ad): ?>
		<div class="ad">
			<tr>
				<td><?php echo $ad['id']; ?></td>
				<td><?php echo $ad['title'] ?></td>
				<td><?php echo $ad['description'] ?></td>
				<td><?php echo $ad['price'] ?></td>
			</tr>
			
	<?php endforeach; ?>
	</table>
		<ul class="pagination">
			<?php if ($page > 1): ?>
				<li><a href="?page=<?php echo $page - 1; ?>&per-page=<?php echo $perPage; ?>">&laquo;</a></li>
			<?php endif; ?>
			<?php for($x = 1; $x <= $pages; $x++): ?>
				<li class="<?php if ($x === $page) echo 'active'; ?>"><a href="?page=<?php echo $x; ?>&per-page=<?php echo $perPage; ?>"<?php if($page === $x) {echo "class='selected'";} ?>><?php echo $x; ?></a></li>
			<?php endfor; ?>
			<?php if ($page < $pages): ?>
				<li><a href="?page=<?php echo $page + 1; ?>&per-page=<?php echo $perPage; ?>">&raquo;</a></li>
			<?php endif; ?>
		</ul>
		
		
</body>
</html>