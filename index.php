<?php 
include 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
<h1>Welcome to my site</h1>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
<a href="add.php"><p><b>Add an ad on site</b></a></p>
<table border=1 width="100%">
	<tbody>
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Price</th>
			</tr>
		</thead>
		<?php while ($row = $result->fetch()) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['price']; ?></td>
		<?php } ?>
	</tbody>
</table>
</body>
</html>