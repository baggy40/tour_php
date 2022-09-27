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
	*{margin: 0 auto; padding: 0; list-style: none;}
	a{text-decoration: none; color: #fff;}
	
	header{width: 100%;height: 950px;
		background-image:url("./images/1.jpg");
		background-repeat: no-repeat;
		background-size:cover;
		background-position: center center;
		backface-visibility:hidden;
		animation:slideBg 10s linear infinite 2s;
		animation-timing-function: ease-in-out;
	}
	@keyframes slideBg{
		0%{background-image:url("./images/1.jpg");}
		25%{background-image:url("./images/2.jpg");}
		50%{background-image:url("./images/3.jpg");}
		75%{background-image:url("./images/4.jpg");}
		100%{background-image:url("./images/5.jpg");}
	}
	.head_back{width: 100%; height: 100%; background: rgba(0,0,0,0.5); position: relative;}
	.head_top{width: 100%; height: 60px; position: relative;}
	.logo{float: left; }
	.logo img{width: 30px; height: 35px; margin-top: 10px; margin-left: 40px; float: left;}
	.logo_txt{float: left; font-weight: bold; line-height: 60px; color: #fff; margin-left: 10px;}
	.login{float: right; }
	.login_ul{ margin-right: 100px;}
	.login_ul > li{float: left; text-align: center; line-height: 60px; font-size: 10px; width: 50px;}
	.login_ul > li:hover > a{color: #000; background: #fff;}
	.head_right{position: absolute; top: 25px; right: 60px;}
	.head_right span{height: 1px; background: #fff;}
	.s_1{width: 25px; position: absolute; top: 0; right: 0;}
	.s_2{width: 20px; position: absolute; top: 5px; right: 0;}
	.s_3{width: 15px; position: absolute; top: 10px; right: 0;}
	.head_txt{width: 500px; height: 250px; text-align: center; color: #fff; 
	position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%);}
	.head_txt::before{content: ''; width: 100%; height: 100%; border-top: 1px solid #fff; border-bottom: 1px solid #fff;
	position: absolute; top: 0; left: 0; animation: animate1 2s linear forwards;}
	.head_txt::after{content: ''; width: 100%; height: 100%; border-left: 1px solid #fff; border-right: 1px solid #fff;
	position: absolute; top: 0; left: 0; animation: animate2 2s linear forwards;}
	@keyframes animate1{
		0%{width: 0%;}
		100%{width: 100%;}
	}
	@keyframes animate2{
		0%{height: 0%;}
		100%{height: 100%;}
	}
	.head_bg{font-size: 20px; font-weight: bold; margin-top: 70px;}
	.head_sm{font-size: 12px; margin-top: 15px; }
	.head_button{margin-top: 30px;}
	.head_button button{width: 80px; height: 30px; border: 1px solid #fff; border-radius: 15px; background: none;
	color: #fff;}
	nav{width: 100%; height: 50px; background: rgba(0,0,0,0.7); 
	position: absolute; bottom: 0; left: 0;}
	nav.on{position: fixed; top: 0; left: 50%; transform: translateX(-50%);z-index: 1;}
	.nav_ul{margin-left: 450px;}
	.nav_ul > li{float: left; width: 200px; line-height: 50px; text-align: center; font-size: 12px;}
	.nav_ul > li:hover > a {color:#777;}
	.nav_ul > li > a {transition:all .5s ease;}
	.main{width: 1024px; height: 700px; }
	.main_txt{text-align: center; color: #777; margin-top: 80px;}
	.main_line{width: 30px; height: 2px; background: #777; margin-top: 15px; margin-bottom: 15px;}
	.main_txt_bg{font-size: 25px; font-weight: bold;}
	.main_txt_sm{font-size: 12px;}
	
	.main_img{margin-top: 80px;}
	.main_left{width: 500px; float: left;}
	.main_bottom{margin-top: 5px;}
	.main_ul{margin-left: 10px;}
	.main_ul > li{float: left; width: 230px; height: 230px; position: relative; margin-left: 10px; overflow: hidden;}
	.main_ul > li:hover img{transform:scale(1.05);}
	.main_ul > li img{width: 230px; height: 230px; transition:all 1s ease;}
	.main_li_txt{width: 100%; height: 100%; background: rgba(0,0,0,0.3); position: absolute; top: 0; left: 0; text-align: center; color: #fff;}
	.main_li_bg{font-size: 20px; font-weight: bold; margin-top:80px;}
	.main_li_sm{font-size: 12px; margin-top: 10px; width: 80%;}
	.main_right{float: left; width: 500px; position: relative;}
	.main_right img{width: 500px; height: 500px;}
	.marquee{position: absolute; bottom: 0; left: 0; color: #fff; line-height: 60px; width: 100%; height: 60px; background: rgba(0,0,0,0.7);}
	
	.table_txt{font-size: 16px; color: #777; text-align: center; letter-spacing: 3px;margin-top: 20px; margin-bottom: 10px;}
	.main_table{width: 500px; }
	table{width: 450px;}
	th{border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; font-size: 14px; padding: 5px; color: #777;}
	td{border-bottom: 1px solid #ddd; font-size: 12px; padding: 5px; color:#999;}
	.table_button{height: 40px; line-height: 40px; margin-left: 20px;}
	.table_button button{width: 50px; height: 20px; border-radius: 15px; border: 1px solid #999; background: none;}
	.table_button button:hover{border: 1px solid #000;}
	.table_button button > a{color: #999;}
	
	.slide{width: 100%; height: 610px; background: rgba(0,0,0,0.03);}
	.slide_txt{text-align: center; color: #777; padding-top: 80px;}
	.slide_txt_bg{font-size: 25px; font-weight: bold; }
	.slide_line{width: 30px; height: 2px; background: #777; margin-top: 15px; margin-bottom: 15px;}
	.slide_txt_sm{font-size: 12px;}
	.slide_img{margin-top: 80px; width: 1024px; overflow: hidden;}
	.slide_ul{width: 2050px;}
	.slide_ul > li{width: 333px; height: 350px; float: left; margin-left: 5px; border: 1px solid #ddd;}
	.slide_ul > li img{width: 333px; height: 200px;}
	.slide_li_txt{text-align: center; color: #777;}
	.slide_li_bg{font-size: 20px; font-weight: bold; margin-top: 20px;}
	.slide_li_sm{font-size: 12px; margin-top: 10px; width: 70%;}
	.slide_li_button{margin-top:20px; }
	.slide_li_button button{width: 80px; height: 30px; border: 1px solid #777; color: #777; border-radius: 15px; background: none;}
	
	.notice{width: 100%; height: 100px;  border-top: 1px solid #eee; padding-top: 20px; color: #ccc;}
	.center{width: 300px; float: left; margin-left: 530px;}
	.bank{width: 300px; float: left;}
	.notice_txt{width: 300px; float: left;}
	.center_bg{font-size: 14px; font-weight: bold; }
	.center_num{font-size: 14px; font-weight: bold; }
	.center_sm{font-size: 12px; line-height: 20px;}
	
	footer{width: 100%; height: 80px; color: #ccc; border-top: 1px solid #eee;}
	.footer_ul{height: 40px; margin-left: 500px;}
	.footer_ul > li{font-size: 10px; width: 150px; text-align: center; line-height: 40px; float: left; position: relative;}
	.footer_ul > li::before{content: ''; width: 1px; height: 10px; background: #ccc;
	position: absolute; top: 15px; left: 0;}
	.footer_ul > li:first-child::before{display: none;}
	.copy{text-align: center;}
</style>
<body>
	<header>
		<div class="head_back">
			<div class="head_top">
				<div class="logo">
					<img src="./images/logo.png" alt="logo">
					<div class="logo_txt">TRAVEL PARK</div>
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
			
			<div class="head_txt">
				<div class="head_bg">
					전주에 오신 것을 환영합니다.
				</div>
				<div class="head_sm">
					전주에 오셔서 많은 사랑과 낭만을 만들어 가시길 진심으로 바라겠습니다.
				</div>
				<div class="head_button">
					<button>INFO</button>
				</div>
			</div>
			
			<nav>
				<ul class="nav_ul">
					<li><a href="subPage.php">CONTACT</a></li>
					<li><a href="#">WELBOMD</a></li>
					<li><a href="#">SANSUNG</a></li>
					<li><a href="#">TTGIBACK</a></li>
					<li><a href="#">SUMTIME</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="main">
		<div class="main_txt">
			<div class="main_txt_bg">INTERIOR PARK</div>
			<div class="main_line"></div>
			<div class="main_txt_sm">
				전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
			</div>
		</div>
		<div class="main_img">
			<div class="main_left">
				<div class="main_table">
					<div class="table_txt"><p>게시글</p></div>
					<table>
						<thead>
							<tr align="center">
								<th>번호</th>
								<th>제목</th>
								<th>작성자</th>
								<th>작성일자</th>
							</tr>
						</thead>
						<?php
						$page_count=5;
						$sql = "select*from tbl_board order by redate desc limit ".$page_count;
						$res = mysqli_query($db, $sql);
						if($res){
							while($images = mysqli_fetch_array($res)){
						?>
						<tbody>
							<tr align="center">
								<td><?php echo $images['no']; ?></td>
								<td><?php echo $images['title']; ?></td>
								<td><?php echo $images['mb_id']; ?></td>
								<td><?php echo $images['redate']; ?></td>
							</tr>
						</tbody>
						<?php }} ?>
					</table>
					<div class="table_button">
						<button><a href="table.php">더보기</a></button>
					</div>
				</div>
				<div class="main_bottom">
					<ul class="main_ul">
						<li><img src="./images/7.jpg"alt="img7">
							<div class="main_li_txt">
								<div class="main_li_bg">INTERIOR PARK</div>
								<div class="main_li_sm">
									전주에 오셔서 많은 추억들을 만들어 가시길 바라겠습니다.
								</div>
							</div>
						</li>
						<li><img src="./images/8.jpg"alt="img8">
							<div class="main_li_txt">
								<div class="main_li_bg">INTERIOR PARK</div>
								<div class="main_li_sm">
									전주에 오셔서 많은 추억들을 만들어 가시길 바라겠습니다.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="main_right">
				<img src="./images/6.jpg" alt="img6">
				<div class="marquee">
					<marquee>
						전주에 오셔서 많은 사랑과 추억들을 담아 가시길 바라겠습니다.
					</marquee>
				</div>
			</div>
		</div>
	</div>
	
	<div class="slide">
		<div class="slide_txt">
			<div class="slide_txt_bg">INTERIOR PARK</div>
			<div class="slide_line"></div>
			<div class="slide_txt_sm">
				전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
			</div>
		</div>
		
		<div class="slide_img">
			<ul class="slide_ul">
				<li><img src="./images/9.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
				<li><img src="./images/10.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
				<li><img src="./images/11.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
				<li><img src="./images/12.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
				<li><img src="./images/13.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
				<li><img src="./images/14.jpg" alt="img9">
					<div class="slide_li_txt">
						<div class="slide_li_bg">
							INTERIOR PARK
						</div>
						<div class="slide_li_sm">
						전주에 오셔서 많은 추억들과 사랑을 담아 가시길 바라겠습니다.
						</div>
						<div class="slide_li_button">
							<button>더보기</button>
						</div>
					</div>
				</li>
			</ul>
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
				택배 관련 문의사항입니다. <br>
				창업 관련 문의사항 환영합니다. <br>
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
		var current= 0;
		setInterval(function(){
			if(current < 3) current++;
			else current = 0;
			var slide = current*(-340) + "px";
			$('.slide_ul').animate({marginLeft:slide},3000);
		},5000);
		
		function scroll(){
			var win_top = $(window).scrollTop();
			if(win_top >= 580) $('nav').addClass('on');
			else $('nav').removeClass('on');
		}
		
		$(window).scroll(function(){scroll();});
	
	</script>
	
	
</body>
</html>
