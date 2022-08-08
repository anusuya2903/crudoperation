<?php 

if (isset($_GET['sno'])) {
		include "db_conn.php";

	function validate($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	$sno=validate($_GET['sno']);

	$sql="DELETE FROM user 
	      WHERE sno=$sno ";
	$result=mysqli_query($conn, $sql);
	if ($result) {
		header("Location: read.php?success=successfully deleted");
	}
	else {
		echo "Failed";
	}
 
}else {
	header("location:read.php");
}