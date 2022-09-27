<?php
include('db.php');

$no = $_GET['no'];
$sql = "delete from tbl_board where no='$no'";
$res = mysqli_query($db, $sql);
if($res){
	header("location:table.php");
	exit();
}
?>