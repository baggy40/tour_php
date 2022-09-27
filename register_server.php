<?php
include('db.php');

if(isset($_POST['mb_id']) && isset($_POST['mb_nick']) && isset($_POST['pass1']) && isset($_POST['pass2'])){
	$user_id = mysqli_real_escape_string($db, $_POST['mb_id']);
	$user_nick = mysqli_real_escape_string($db, $_POST['mb_nick']);
	$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($db, $_POST['pass2']);
	
	if(empty($user_id)){
		header("location:register.php?error=아이디를 입력해 주세요.");
		exit();
	}else if(empty($user_nick)){
		header("location:register.php?error=닉네임을 입력해 주세요.");
		exit();
	}else if(empty($pass1)){
		header("location:register.php?error=비밀번호를 입력해 주세요.");
		exit();
	}else if(empty($pass2)){
		header("location:register.php?error=비밀번호 확인을 입력해 주세요.");
		exit();
	}else if($pass1 !== $pass2){
		header("location:register.php?error=비밀번호가 일치하지 않습니다.");
		exit();
	}else{
		$sql = "select*from member where mb_id='$user_id'";
		$res = mysqli_query($db, $sql);
		if(mysqli_num_rows($res) > 0){
			header("location:register.php?error=기존 아이디가 존재합니다.");
			exit();
		}else{
			$pass1 = password_hash($pass1, PASSWORD_DEFAULT);
			$sql = "insert into member (mb_id, mb_nick, password) values('$user_id','$user_nick','$pass1')";
			$res = mysqli_query($db, $sql);
			if($res){
				header("location:login.php");
				exit();
			}
		}
	}
}
?>