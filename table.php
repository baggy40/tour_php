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
	
	.table_txt{height: 120px; line-height: 120px; margin-top: 50px;}
	.table_txt p {text-align: center; font-size: 20px; letter-spacing: 3px; color: #777;}
	table{width: 1024px; }
	th{border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 10px; font-size: 14px; color: #777;}
	td{border-bottom: 1px solid #ddd; padding: 5px; font-size: 12px; color: #999;}
	td:hover{color: #000;}
	td:hover > a{color: #000;}
	td img{width: 80px; height: 50px;}
	.line_num{width: 1024px; height: 50px; position: relative;}
	.line_button{line-height: 50px; float: left; margin-left: 30px;}
	.line_button button{width: 80px; height: 30px; border: 1px solid #777; border-radius: 15px; background: none; color:#777;}
	.line_button button:hover{color: #000;}
	.line_button button > a{color: #777;}
	.line_button button:hover > a{color: #000;}
	.line_middle{float: left;}
	.line_ul{margin-left: 380px;}
	.line_ul > li{float: left; width: 30px; line-height: 50px; text-align: center;}
	.line_ul > li > a{color: #999;}
	.line_ul > li:hover > a{color: #000;}
	.line_hidden{position: absolute; bottom: -15px; left: 30px;  font-size: 12px; display: none;}
	.line_hidden button{width: 11px; height: 11px; border-radius: 50%;  border: 1px solid #777; background: none; color: #777; line-height: 10px;}
	.notice{width: 1024px; height: 100px; padding-top: 20px; color: #ccc; border-top: 1px solid #eee; margin-top: 150px;}
	.center{width: 300px; float: left; position: relative; margin-left: 120px;}
	.center::after{content: ''; width: 1px; height: 80px; background: #ccc;
	position: absolute; top: 0; right: 80px;}
	.bank{width: 300px; float: left; position: relative;}
	.bank::after{content: ''; width: 1px; height: 80px; background: #ccc;
	position: absolute; top: 0; right: 80px;}
	.notice_txt{width: 300px; float: left;}
	.center_bg{font-size: 14px; font-weight: bold; }
	.center_num{font-size: 14px; font-weight: bold; }
	.center_sm{font-size: 12px; line-height: 20px;}
	footer{width: 1024px; height: 80px; color: #ccc; border-top: 1px solid #eee;}
	.footer_ul{height: 40px;margin-left: 150px;}
	.footer_ul > li{width: 120px; height: 40px; line-height: 40px; text-align: center; font-size: 10px; float: left; position: relative;}
	.footer_ul > li::before{content: ''; width: 1px; height: 10px; background: #ccc;
	position: absolute; top: 15px; left: 0; }
	.footer_ul > li:first-child::before{display: none;}
	.copy{text-align: center;}
</style>
<body>
	<header>
		<div class="head_top">
			<div class="logo">
				<a href="ex_start.php"><img src="./images/logo.png" alt="logo">
				<div class="logo_txt">TRAVEL PARK</div></a>
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
	<div class="table_txt"><p>이용후기</p></div>
	<table>
		<thead>
			<tr align="center">
				<th>번호</th>
				<th>이미지</th>
				<th>제목</th>
				<th>작성자</th>
				<th>작성일자</th>
				<th>수정</th>
				<th>삭제</th>
			</tr>	
		</thead>
		<?php
		$page_count = 5;
		$sql = "select*from tbl_board";
		$res = mysqli_query($db, $sql);
		$page_amount = mysqli_num_rows($res);
		$page_ceil = ceil($page_amount/$page_count);
		if(!isset($_GET['page'])){
			$page = 1;
		}else{
			$page=$_GET['page'];
		}
		$page_fetch=($page-1)*$page_count;
		$sql = "select*from tbl_board order by redate desc limit ".$page_fetch.','.$page_count;
		$res = mysqli_query($db, $sql);
		if($res){
			while($images=mysqli_fetch_array($res)){
		?>
		<tbody>
			<tr align="center">
				<td><?php echo $images['no']; ?></td>
				<td><img src="./images/<?php echo $images['filename']; ?>" alt="img"></td>
				<td><a href="board.php?no=<?php echo $images['no']; ?>"><?php echo $images['title']; ?></a></td>
				<td><?php echo $images['mb_id']; ?></td>
				<td><?php echo $images['redate']; ?></td>
				<?php if(isset($_SESSION['mb_id']) && $_SESSION['mb_id'] === $images['mb_id']) { ?>
				<td><a href="update.php?no=<?php echo $images['no']; ?>">수정</a></td>
				<td><a href="delete.php?no=<?php echo $images['no']; ?>">삭제</a></td>
				<?php } else{ ?>
				<td>수정</td>
				<td>삭제</td>
				<?php } ?>
			</tr>
		</tbody>
		<?php } }?>
	</table>
	
	<div class="line_num">
		<div class="line_button">
			<?php if(isset($_SESSION['mb_id'])) { ?>
			<button><a href="upload.php">글쓰기</a></button>
			<?php }else{ ?>
			<button class="btn">글쓰기</button>
			<?php } ?>
		</div>
		<div class="line_middle">
			<ul class="line_ul">
				<?php
				for($page=1; $page <= $page_ceil; $page++){
					echo '<li><a href="table.php?page='.$page.'">'.$page.'</a></li>';
				}
				?>
			</ul>
		</div>
		<div class="line_hidden">
			회원만 글쓰기가 가능합니다. <button>x</button>
		</div>
	</div>
	
	<div class="notice">
		<div class="center">
			<div class="center_bg">CS CENTER</div>
			<div class="center_num">1588-8888</div>
			<div class="center_sm">
				영업시간 09:00-22:00 까지 <br>
				주말/공휴일 영업합니다.
			</div>
		</div>
		<div class="bank">
			<div class="center_bg">BANK INFO</div>
			<div class="center_num">123-456-7890</div>
			<div class="center_sm">
				신한은행 <br>
				예금주 박현진
			</div>
		</div>
		<div class="notice_txt">
			<div class="center_bg">NOTICE</div>
			<div class="center_sm">
				[이벤트] 20,000원 이상 구매시 무료 <br>
				택배 관련 문의사항 입니다.<br>
				창업 관련 문의사항 환영<br>
				기타 문의사항
			</div>
		</div>
	</div>
	
	<footer>
		<ul class="footer_ul">
			<li>홈</li>
			<li>이용약관</li>
			<li>회사소개</li>
			<li>개인정보보호정책</li>
			<li>이용안내</li>
			<li>광고/제휴</li>
		</ul>
		<div class="copy">
			COPY ⓒ ALL RIGHT RESERVED.
		</div>
	</footer>
	
	<script src="./script/jquery-3.2.1.js" type="text/javascript"></script>
	<script>
		$('.btn').click(function(){
			$('.line_hidden').css({"display":"block"});
		});
		$('.line_hidden button').click(function(){
			$('.line_hidden').css({"display":"none"});
		});
	</script>
	
</body>
</html>
