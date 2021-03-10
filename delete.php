<?php
require "koneksi.php";

$id  = $_GET['id'];
$sql = "DELETE FROM table_crud WHERE id= '$id'";
$execute = mysqli_query($koneksi, $sql);

if($execute) {
	header("location:read.php");
} else {
	echo "TASK FAILED SUCCSESFULLY !";
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		text:hover{
			background-color: red;

		}
	</style>
</head>
<body>

</body>
</html