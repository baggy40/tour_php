<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>
<style>
	*{margin: 0 auto; padding: 0; list-style: none;}
	a{text-decoration: none; color: #777;}
	body{width: 100%; height: 100%; background: rgba(0,0,0,0.03);}
	header{width: 100%; height: 60px; background: #fff;}
	header.on{position: fixed; top: 0;left: 0; z-index: 1; border-bottom: 1px solid #eee;}
	.head_top{width: 90%; position: relative;}
	.logo{float: left;}
	.logo img{width: 40px;height: 40px; margin-top: 10px; margin-left: 20px; float:left;}
	.logo_txt{font-weight: bold; margin-left:10px; float: left; line-height: 60px;}
	.login{float: right;}
	.head_ul{margin-right: 80px;}
	.head_ul > li{float: left; width: 50px; font-size: 10px; line-height: 60px; text-align: center;}
	.head_right{position: absolute; top: 25px; right: 40px;}
	.head_right span{height: 1px; background: #777;}
	.s_1{width: 25px; position: absolute; top: 0; right: 0;}
	.s_2{width: 20px; position: absolute; top: 5px; right: 0;}
	.s_3{width: 15px; position: absolute; top: 10px; right: 0;}
	.main{width: 90%; height: 1100px; background: #fff; margin-top: 10px;}
	.main_left{width: 50%; float: left; position: relative;}
	.main_left img{width: 100%; height: 1100px;}
	.left_txt{width: 380px; height: 180px;  text-align: center; color: #fff;
	position: absolute; top: 30%; left: 50%; transform: translateX(-50%);}
	.left_txt::before{content: ''; width: 100%; height: 100%; border-top: 1px solid #fff; border-bottom: 1px solid #fff;
	position: absolute; top: 0; left: 0; animation: animate1 2s linear forwards;}
	.left_txt::after{content: ''; width: 100%; height: 100%; border-left: 1px solid #fff; border-right: 1px solid #fff;
	position: absolute; top: 0; left: 0; animation: animate2 2s linear forwards;}
	@keyframes animate1{
		0%{width: 0%;}
		100%{width: 100%;}
	}
	@keyframes animate2{
		0%{height: 0%;}
		100%{height: 100%;}
	}
	.left_txt_bg{font-size: 20px; font-weight: bold; margin-top: 40px;}
	.left_txt_sm{font-size: 15px; margin-top: 20px;}
	
	.right_img{margin-top: 50px;}
	.main_right{float: left; width: 50%;}
	.right_board{text-align: center;}
	.right_top{margin-top: 130px; color: #1d35a6; font-size: 15px;}
	.right_bg{font-size: 20px; font-weight: bold; margin-top: 20px;}
	.right_sm{font-size: 12px; color: #ddd; margin-top: 10px;}
	
	.right_ul{position: relative;}
	.right_ul > li{position: absolute; top: 0; left: 50%; transform: translateX(-50%);}
	.right_ul > li img{border-radius: 50%; width: 400px; height: 400px;}
	.right_li_txt{margin-top: 50px;}
	.right_li_bg{font-size: 20px; font-weight: bold;}
	.right_li_sm{margin-top: 20px;line-height: 30px;}
	
</style>
<body>
	<header>
		<div class="head_top">
			<div class="logo">
				<img src="./images/logo.png" alt="logo">
				<div class="logo_txt"><a href="ex_start.php">TRAVEL PARK</a></div>
			</div>
			<div class="login">
				<ul class="head_ul">
					<li><a href="#">로그인</a></li>
					<li><a href="#">회원가입</a></li>
					<li><a href="#">이용후기</a></li>
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
		<div class="main_left">
			<img src="./images/19.jpg" alt="img">
			<div class="left_txt">
				<div class="left_txt_bg">
					소개해 드리는 추천지
				</div>
				<div class="left_txt_sm">
					전주에는 많은 문화재와 성당등이 있어
					뜻깊은 여행이 되실 수 있으실 겁니다.
				</div>
			</div>
		</div>
		<div class="main_right">
			<div class="right_board">
				<div class="right_top"># 전주 추천지</div>
				<div class="right_bg">
					전주에 오신 것을 환영합니다.
				</div>
				<div class="right_sm">전주에서 많은 추억과 낭만을 만들어 가시길 바라겠습니다.</div>
				
				<div class="right_img">
					<ul class="right_ul">
						<li><img src="./images/20.jpg" alt="img">
							<div class="right_li_txt">
								<div class="right_li_bg">
								#1. 사계절 온수 인피니티풀 '스카이 풀'
								</div>
								<div class="right_li_sm">
								동화 같은 뷰를 자아내는 스카이 풀에서 낭만적인 가을을 만나보세요. 낮에는 사랑하는 아이들과 함께, 저녁이 되면 신나는 음악으로  성인만을 위한 라운지 스타일의 '엔드리스 나이트 스토리'가 펼쳐집니다.
								</div>
							</div>
						</li>
						<li><img src="./images/22.jpg" alt="img">
							<div class="right_li_txt">
								<div class="right_li_bg">
								#2. 신화워터파크 무료 이용
								</div>
								<div class="right_li_sm">
								유유자적하게 즐길 수 있는 유수풀과, 빅컵, 익스트림파이프로 즐기는 신나는 어드벤처.
								아이들을 위한 키즈풀까지 마련된 실내 워터파크에서 날씨에 구애받지 않고 휴가를 즐겨보세요.
								</div>
							</div>
						</li>
						<li><img src="./images/23.jpg" alt="img">
							<div class="right_li_txt">
								<div class="right_li_bg">
								#3. 신화테마파크 빅3 이용권 제공
								</div>
								<div class="right_li_sm">
								짜릿한 놀이기구는 물론 라바와 함께 하는 포토타임!
								신화테마파크 빅 3 이용권으로 제주여행에 즐거움을 더하세요.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<script src="./script/jquery-3.2.1.js" type="text/javascript"></script>
	<script>
		/*$('.right_ul > li:gt(0)').hide();
		setInterval(function(){
			$('.right_ul > li:first-child').fadeOut(1000).next('li').fadeIn(1000).end().appendTo('.right_ul');
		},5000);*/
		
		
		$('.right_ul > li:gt(0)').hide();
		setInterval(function(){
			$('.right_ul > li:first-child').fadeOut(1000).next('li').fadeIn(1000).end().appendTo('.right_ul');
		},3000);
		
		function scroll(){
			var win_top = $(window).scrollTop();
			if(win_top >= 60) $('header').addClass('on');
			else $('header').removeClass('on');
		}
		$(window).scroll(function(){scroll();});
	</script>
</body>
</html>
