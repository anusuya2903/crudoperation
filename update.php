<?php include 'updated.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="updated.php"
		      method="post" >
			<h4 class="display-6 text-center">UPDATE</h4>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="name" 
				class="form-control" 
				id="name" 
				name="name" 
				value="<?=$rows['name']?>" 
				required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" 
				class="form-control" 
				id="email" 
				name="email" 
				value="<?=$rows['email']?>" 
				required>
			</div>
			<input type="text"
			       name="sno"
			       value="<?=$rows['sno']?>"
			        hidden>
			        
			<button type="submit" class="btn btn-primary"
			name="update">Update</button>
			<a href="read.php">view</a>
		</form>
	</div>
	
</body>
</html>