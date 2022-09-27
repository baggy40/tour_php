<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>
<style>
	*{margin: 0 auto; padding: 0; list-style: none;}
	a{text-decoration: underline; color: #000;}
	body{width: 100%; height: 100%; background: rgba(0,0,0,0.1);}
	
	.login{width: 500px; height: 550px; background: #fff; border-radius: 15px; text-align: center;
	position: fixed; top: 50%; left: 50%; transform: translate(-50%,-50%);}
	h2{font-size: 30px; font-weight: bold; color: #1d35a6; margin: 40px 0 30px 0;}
	p{font-size: 20px; font-weight: bold; color: #1d35a6; margin: 45px 0 35px 0;}
	.login_line{width: 80%; height: 80px;}
	.login_line h4{font-size: 15px; margin-bottom: 10px;}
	.login_line input{width: 80%; height: 30px; border: 1px solid #000; border-radius: 15px; text-align: center; font-size: 15px;}
	.submit{width: 80%; margin-top: 20px;}
	.submit input{width: 200px; height: 30px; border-radius: 15px; border: none; background: #1d35a6; color: #fff; font-size: 16px;}
	.submit input:hover{width: 205px;}
	.back{font-size: 10px; margin-top: 10px;}
	.back a:hover{font-weight: bold;}
</style>
<body>
	<form action="register_server.php" method="post">
		<div class="login">
			<?php if(isset($_GET['error'])) { ?>
			<p><?php echo $_GET['error']; ?></p>
			<?php }else{ ?>
			<h2>LOGIN</h2>
			<?php } ?>
			
			<div class="login_line">
				<h4>아이디</h4>
				<input type="text" name="mb_id">
			</div>
			<div class="login_line">
				<h4>닉네임</h4>
				<input type="text" name="mb_nick">
			</div>
			<div class="login_line">
				<h4>비밀번호</h4>
				<input type="password" name="pass1">
			</div>
			<div class="login_line">
				<h4>비밀번호 확인</h4>
				<input type="password" name="pass2">
			</div>
			<div class="submit">
				<input type="submit" value="가입">
			</div>
			<div class="back">
				<a href="login.php">로그인</a>
			</div>
		</div>
	</form>
</body>
</html>
