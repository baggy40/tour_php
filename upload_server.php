<?php
include('db.php');

if(isset($_POST['mb_id']) && isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['mb_file'])){
	$user_id = mysqli_real_escape_string($db, $_POST['mb_id']);
	$title = mysqli_real_escape_string($db, $_POST['title']);
	$content = mysqli_real_escape_string($db, $_POST['content']);
	
	$img_name = $_FILES['mb_file']['name'];
	$img_size = $_FILES['mb_file']['size'];
	$tmp_name = $_FILES['mb_file']['tmp_name'];
	$error = $_FILES['mb_file']['error'];
	
	if(empty($user_id)){
		header("location:upload.php?error=아이디를 입력해 주세요.");
		exit();
	}else if(empty($img_name)){
		header("location:upload.php?error=이미지를 입력해 주세요.");
		exit();
	}else if(empty($title)){
		header("location:upload.php?error=제목을 입력해 주세요.");
		exit();
	}else if(empty($content)){
		header("location:upload.php?error=글쓰기를 입력해 주세요.");
		exit();
	}else{
		$img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
		$img_ex_lc = strtolower($img_ex);
		$img_arr = array("jpg","jpeg","png");
		if(in_array($img_ex_lc, $img_arr)){
			$img_new= uniqid("IMG-",true).'.'.$img_ex_lc;
			$img_addr = "./images/".$img_new;
			move_uploaded_file($tmp_name,$img_addr);
			$sql = "insert into tbl_board (mb_id, filename, title, content) values('$user_id','$img_new','$title','$content')";
			$res = mysqli_query($db, $sql);
			if($res){
				header("location:table.php");
				exit();
			}
		}
	}
}
?>