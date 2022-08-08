<?php include "view.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-6 text-center">READ</h4>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i=0;
					while($rows = mysqli_fetch_assoc($result)) {
						$i++;
						?>
					<tr>
						<th scope="row"><?=$i?></th>
						<td><?=$rows['name']?></td>
						<td><?php echo $rows['email'];?></td>
						<td><a href="update.php?sno=<?=$rows['sno']?> "class="btn btn-success">Update</a>
							<a href="delete.php?sno=<?=$rows['sno']?> "class="btn btn-danger">Delete</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } ?>
			<div class="link_right">
				<a href="index.html">Create</a>
			</div>
		</div>	
	</div>
	
</body>
</html>