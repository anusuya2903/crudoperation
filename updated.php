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

	$sql = "SELECT * FROM user WHERE sno=$sno";
    $result = mysqli_query($conn, $sql);  

    if (mysqli_num_rows($result)>0) {
    	$rows=mysqli_fetch_assoc($result);
    }else{
    	header("location read.php");
    }


}else if (isset($_POST['update'])) {
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
	$sno=validate($_POST['sno']);

	$user_data= 'Welcome ' .$name;
	

	$sql="UPDATE user 
	      SET name='$name', email='$email' 
	      WHERE sno=$sno ";
	$result=mysqli_query($conn, $sql);
	if ($result) {
		 header("Location: read.php?success=successfully updated");
	}
	else {
		echo "Failed";
	}
}

else{
	header("location:read.php");
}
