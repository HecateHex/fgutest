<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/style-login.css">
</head>
<body>
	<script type="text/javascript">
		function chk(){
				if(document.send.username.value==''||document.send.password.value=='')
				{
					alert('請確認使用者帳號或密碼');
					document.send.username.focus();
					return false ;
				}
			return true ;
		}
	</script>
	<script type="text/javascript">
		$('.message a').click(function(){
   		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
	</script>
	<form action="loginaction.php" method="POST" accept-charset="utf-8" name="send">
		<div class="login-page">
			<div class="form">
				<form class="login-form">
					<input type="text" name="username" placeholder="username"/>
					<input type="password" name="password" placeholder="password"/>
					<input type="submit" name="submit" value="Login">
					<p class="message">Forget your password?<a target="_blank" href="http://libinfo.fgu.edu.tw/1news/news.php?Sn=109">Click here</a></p>
				</form>
			</div>
		</div>
	</form>	
</body>
</html>