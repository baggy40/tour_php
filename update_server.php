<?php
include('db.php');

if(isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['mb_file'])){
	$user_id = $_POST['mb_id'];
	$no = $_POST['no'];
	$title = mysqli_real_escape_string($db, $_POST['title']);
	$content = mysqli_real_escape_string($db, $_POST['content']);
	
	$img_name = $_FILES['mb_file']['name'];
	$img_size = $_FILES['mb_file']['size'];
	$tmp_name = $_FILES['mb_file']['tmp_name'];
	$error = $_FILES['mb_file']['error'];
	
	if(empty($img_name)){
		header("location:update.php?error=이미지를 입력해 주세요.&no=$no");
		exit();
	}else if(empty($title)){
		header("location:update.php?error=제목을 입력해 주세요.&no=$no");
		exit();
	}else if(empty($content)){
		header("location:update.php?error=글쓰기를 입력해 주세요.&no=$no");
		exit();
	}else{
		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		$img_ex_lc = strtolower($img_ex);
		$img_arr = array("jpg","jpeg","png");
		if(in_array($img_ex_lc, $img_arr)){
			$img_new = uniqid("IMG-", true).'.'.$img_ex_lc;
			$img_addr = "./images/".$img_new;
			move_uploaded_file($tmp_name, $img_addr);
			$sql = "update tbl_board set filename='$img_new', title='$title', content='$content' where no='$no'";
			echo $sql;
			$res = mysqli_query($db, $sql);
			if($res){
				header("location:table.php");
				exit();
			}
		}
	}
	
}
?>