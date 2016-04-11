<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Science Learning Platform</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|BentonSansComp:bold|SalvoSerifCond:bold" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!-- <header>
			<img src="images/logo.png" alt="logo" class="logo">
			<div class="names">
				<h1 class="name-platform">Data Science Learning Platform</h1>
				<h2 class="name-school">School of Informatics and Computing, Indiana University</h2>
			</div>
			<ul class="navlist">
				<li class="nav"><a class="nav-link" href="#">home</a></li>
				<li class="nav"><a class="nav-link" href="#">programs</a></li>
				<li class="nav"><a class="nav-link" href="#">apply</a></li>
			</ul>
			<ul class="links">
				<li class="link"><a href="https://www.youtube.com" target="_blank"><img src="images/social_youtube.jpg" alt="" class="social-logo"></a></li>
				<li class="link"><a href="https://www.facebook.com" target="_blank"><img src="images/social_facebook.jpg" alt="" class="social-logo"></a></li>
				<li class="link"><a href="https://plus.google.com" target="_blank"><img src="images/social_google.jpg" alt="" class="social-logo"></a></li>
				<li class="link"><a href="https://www.linkedin.com" target="_blank"><img src="images/social_linkedin.jpg" alt="" class="social-logo"></a></li>
			</ul>
			<a href="#" class="button-log">sign in</a>
		</header> -->
		<div class="iu-bar">
			<div class="container">
				<img class="iu-logo" src="http://assets.iu.edu/brand/legacy/trident-large.png" height="73" width="64" alt=" ">
				<h1 class="iu-name">School of Informatics and Computing, Indiana University</h1>
			</div>
		</div>
		
		<header>
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.php">
						<!-- <img src="images/logo.png" alt="logo" class="logo"> -->
						<p class="name-platform">Data Science Learning Platform</p>
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="main-nav">
					<ul class="navlist ul-inline">
						<li class= "nav li-inline <?php echo ($nav == 1) ? 'active' : '' ?>" ><a class="nav-link" href="student_dashboard.php">dashboard</a></li>
						<li class= "nav li-inline <?php echo ($nav == 2) ? 'active' : '' ?>"><a class="nav-link" href="student_program.php">my program</a></li>
						<li class= "nav li-inline <?php echo ($nav == 3) ? 'active' : '' ?>"><a class="nav-link js-nav-sub-link">my courses</a></li>
						<ul class="nav-sub js-nav-sub hide">
							<li class="nav-sub-item"><a href="student_course.php">I593 - Big Data Programming</a></li>
							<li class="nav-sub-item"><a href="student_course.php">I594 - Cloud Computing</a></li>
						</ul>
					</ul>
					<div class="navbar-right">
						<button class="button-layout"><i class="fa fa-cog"></i></button>
						<a href="#" class="button-log"><?=$name?></a>
					</div>
				</div>
			</div>
		</header>
