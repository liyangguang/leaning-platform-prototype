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
						<li class= "nav li-inline <?php echo ($nav == 1) ? 'active' : '' ?>" ><a class="nav-link" href="index.php">home</a></li>
						<li class= "nav li-inline <?php echo ($nav == 2) ? 'active' : '' ?>"><a class="nav-link" href="courses.php">courses</a></li>
						<li class= "nav li-inline <?php echo ($nav == 3) ? 'active' : '' ?>"><a class="nav-link" href="faculty.php">faculty</a></li>
						<li class= "nav li-inline <?php echo ($nav == 4) ? 'active' : '' ?>"><a class="nav-link" target="_blank" href="http://liyangguang.com/openedx/soic/index.html">program information</a></li>
					</ul>
					<div class="navbar-right">
						<a href="student_dashboard.php" class="button-log">sign in</a>
					</div>
				</div>
			</div>
		</header>
