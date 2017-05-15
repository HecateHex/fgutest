<!DOCTYPE HTML>
<html>
	<head>
		<title>佛光大學測試用</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">
	
		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a target="_blank" href="http://www.fgu.edu.tw/">FGU</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href=login.php class="button special">Login</a></li>
					</ul>
				</nav>
			</header>
		<!-- go top -->
			<script type="text/javascript">
			$(function(){
    			$("#gotop").click(function(){
        			jQuery("html,body").animate({
            			scrollTop:0
        			},1000);
    			});
    		$(window).scroll(function() {
        		if ( $(this).scrollTop() > 100){
            		$('#gotop').fadeIn("fast");
        		} else {
            		$('#gotop').stop().fadeOut("fast");
        		}
    			});
			});
			</script>
			<div id = "gotop">TOP</div>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>佛 光 大 學</h2>
					<h3>五 樓 個 人 席 次 線 上 預 約 系 統</h3>
					<ul class="actions">
						<li><a href="login.php" class="button big special">Login</a></li>
						<!--<li><a href="#elements" class="button big alt">Learn More</a></li> -->
					</ul>
				</div>
			</section>
		<!-- 
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Accumsan</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
								<div class="6u">
									<h3>Faucibus</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>關於我們</h2>
							<p></p>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<!--
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
			
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; FGU Test</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>
			-->
	</body>
</html>