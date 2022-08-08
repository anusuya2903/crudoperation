<?php  

include "db_conn.php";

$sql = "SELECT * FROM user ORDER BY sno DESC";
$result = mysqli_query($conn, $sql);

?>