<?php
session_start();
include('db.php');

if(isset($_POST['mb_id']) && isset($_POST['pass1'])){
	$user_id = mysqli_real_escape_string($db, $_POST['mb_id']);
	$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
	
	if(empty($user_id)){
		header("location:login.php?error=아이디를 입력해 주세요.");
		exit();
	}else if(empty($pass1)){
		header("location:login.php?error=비밀번호를 입력해 주세요.");
		exit();
	}else{
		$sql = "select*from member where mb_id='$user_id'";
		$res = mysqli_query($db, $sql);
		if(mysqli_num_rows($res)===1){
			$row = mysqli_fetch_assoc($res);
			$hash = $row['password'];
			if(password_verify($pass1, $hash)){
				$_SESSION['mb_id'] = $row['mb_id'];
				
				header("location:ex_start.php");
				exit();
			}else{
				header("location:login.php?error=비밀번호를 확인해 주세요.");
				exit();
			}
		}else{
			header("location:login.php?error=아이디를 확인해 주세요.");
			exit();
		}
	}
}
?>