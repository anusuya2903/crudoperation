<?php 
if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;

	}

	$name=validate($_POST['name']);
	$email=validate($_POST['email']);


	$sql="INSERT INTO user(name, email) VALUES('$name', '$email')";
	$result=mysqli_query($conn, $sql);
	if ($result) {
		 header("Location: read.php?success=successfully created");
	}
	else {
		echo "Failed";
	}
}
 ?>