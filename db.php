<?php
$db = mysqli_connect('localhost','root','root','level_1');

if(mysqli_connect_errno()){
	echo "DB 접속 실패".mysqli_connect_error();
	exit();
}
mysqli_set_charset($db,"utf8");
?>
