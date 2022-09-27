<?php 
session_start();
include('db.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>
<style>
	*{margin:0 auto; padding: 0; list-style: none;}
	a{text-decoration: none; color: #777;}
	body{width: 100%; height: 100%; background: rgba(0,0,0,0.03);}
	
	header{width: 100%; height: 60px; background: #fff; border-bottom: 1px solid #eee;}
	.head_top{width: 1024px; position: relative;}
	.logo{float: left;}
	.logo img{width: 30px; height: 40px; float: left; margin-top: 10px;}
	.logo_txt{float:left; font-weight: bold; margin-left: 10px; line-height: 60px; color: #777;}
	.login{float: right;}
	.login_ul{margin-right: 60px;}
	.login_ul > li{float: left; font-size: 10px; text-align: center; line-height: 60px; width: 50px;}
	.login_ul > li:hover > a{color: #000;}
	.head_right{position: absolute; top: 25px; right: 20px; }
	.head_right span{height: 1px; background: #777;}
	.s_1{width: 25px; position: absolute; top: 0; right: 0;}
	.s_2{width: 20px; position: absolute; top: 5px; right: 0;}
	.s_3{width: 15px; position: absolute; top: 10px; right: 0;}
	.main{width: 1024px; background: #fff; margin-top: 10px;}
	.main_top_txt{height: 30px; line-height: 30px; margin-left: 20px; font-size: 12px; color: #1d35a6;}
	.main_top{height: 30px; }
	.main_logo{float: left; margin-left: 20px;}
	.main_logo img{width: 15px; height: 15px; margin-top: 8px;}
	.main_id{float: left; margin-left: 10px; line-height: 30px; font-size: 14px; color: #777;}
	.main_date{font-size: 14px; margin-left: 10px;line-height: 30px; color: #ddd; float: left;}
	.main_title{font-size: 18px; font-weight: bold; float: left; margin-left: 200px;}
	.main_right{float: right;}
	.main_ul{margin-right: 20px;}
	.main_ul > li{float: left; width: 50px; line-height: 30px; color: #ddd;float: left; font-size: 12px; text-align: center;}
	.main_ul > li img{width: 15px; height: 15px; opacity: .2;}
	.main_img{width: 1024px; height: 700px; margin-top: 20px;}
	.main_img img{width: 1024px; height: 700px;}
	.shap{font-size: 14px; color: #1d35a6; margin-left: 20px; margin-top: 20px;}
	.main_id_img{margin-top: 150px; height: 100px;}
	.main_content{width: 1000px; line-height: 50px;}
	.main_id_ul {margin-left: 10px;}
	.main_id_ul > li{float: left; margin-left: 10px;}
	.main_id_ul > li img{width: 100px; height: 60px; }
</style>
<body>
	<header>
		<div class="head_top">
			<div class="logo">
				<a href="ex_start.php">
					<img src="./images/logo.png" alt="logo">
					<div class="logo_txt">TRAVEL PARK</div>
				</a>
			</div>
			<div class="login">
				<ul class="login_ul">
					<?php if(isset($_SESSION['mb_id'])) { ?>
					<li><a href="logout.php">로그아웃</a></li>
					<?php }else{ ?>
					<li><a href="login.php">로그인</a></li>
					<?php } ?>
					<li><a href="register.php">회원가입</a></li>
					<li><a href="table.php">이용후기</a></li>
				</ul>
			</div>
			<div class="head_right">
				<span class="s_1"></span>
				<span class="s_2"></span>
				<span class="s_3"></span>
			</div>
		</div>
	</header>
	<div class="main">
		<?php
			$no = $_GET['no'];
			$sql = "select*from tbl_board where no='$no'";
			$res = mysqli_query($db, $sql);
			if($res){
				$row = mysqli_fetch_array($res);
		?>
		<div class="main_top_txt"><p>게시글</p></div>
		<div class="main_top">
			<div class="main_logo">
				<img src="./images/SNS/Feed.png" alt="img">
			</div>
			<div class="main_id">
				<?php echo $row['mb_id']; ?>
			</div>
			<div class="main_date">
				<?php echo $row['redate']; ?>
			</div>
			<div class="main_title">
				<?php echo $row['title']; ?>
			</div>
			<div class="main_right">
				<ul class="main_ul">
					<li><img src="./images/ICON/heart.png" alt="heart"></li>
					<li>댓글</li>
					<li>URL 복사</li>
				</ul>
			</div>
		</div>
		<div class="main_img">
			<img src="./images/<?php echo $row['filename']; ?>" alt="img">
		</div>
		<div class="shap">
		#전주 #전주 한옥마을 #한옥마을
		</div>
		<div class="main_content">
			<?php echo $row['content']; ?>
		</div>
		
		<div class="main_id_img">
			<ul class="main_id_ul">
				<?php
				$user_id = $row['mb_id'];
				$sql = "select*from tbl_board where mb_id='$user_id'";
				$res = mysqli_query($db, $sql);
				if($res){
					while($images=mysqli_fetch_array($res)){
						echo '<li><img src="./images/'.$images['filename'].'" alt="img"></li>';
					}
				}
				?>
			</ul>
		</div>
		<?php } ?>
	</div>
</body>
</html>
