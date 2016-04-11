<?php
$nav = 1;
include('header_index.php');
?>
		<div class="container">
			<section id="banners" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#banners" data-slide-to="0" class="active"></li>
		    <li data-target="#banners" data-slide-to="1"></li>
		    <li data-target="#banners" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img class="full-width" src="images/index/banner1.jpg" alt="">
		      <div class="mask"></div>
		      <div class="carousel-caption">
		        <h1 class="banner-title">become a data scientist</h1>
						<h2 class="banner-subtitle">A one stop shop of data science courses leads you to success step by step.</h2>
						<a href class="primary-button">apply now!</a>
		      </div>
		    </div>
		    <div class="item">
		      <img class="full-width" src="images/index/banner2.jpg" alt="">
		      <div class="mask"></div>
		      <div class="carousel-caption">
		      	<h1 class="banner-title">a one-stop shop for data science</h1>
						<h2 class="banner-subtitle">A one stop shop of data science courses leads you to success step by step.</h2>
						<a href class="primary-button">apply now!</a>
		      </div>
		    </div>
		    <div class="item">
		      <img class="full-width" src="images/index/banner3.jpg" alt="">
		      <div class="mask"></div>
		      <div class="carousel-caption">
		        <h1 class="banner-title">become a data scientist</h1>
						<h2 class="banner-subtitle">A one stop shop of data science courses leads you to success step by step.</h2>
						<a href class="primary-button">apply now!</a>
		      </div>
		    </div>
		    
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#banners" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</section> <!-- end of banner -->
		</div>

		<main class="text-center">
			<section>
				<div class="container section"><div class="row">
					<h1 class="section-title">why choose our platform</h1>
					<div class="col-sm-4">
						<img class="feature-icon" src="images/index/feature1.png" alt="">
						<h1 class="feature-title">affordable</h1>
						<p class="feature-description">Credit is cheaper than traditional residential degrees.</p>
					</div>
					<div class="col-sm-4">
						<img class="feature-icon" src="images/index/feature2.png" alt="">
						<h1 class="feature-title">recognized</h1>
						<p class="feature-description">Gain a nationally recognized certification and/or degree.</p>
					</div>
					<div class="col-sm-4">
						<img class="feature-icon" src="images/index/feature3.png" alt="">
						<h1 class="feature-title">flexible</h1>
						<p class="feature-description">Learn whenever you want, and whereever you are.</p>
					</div>
				</div></div>
			</section>


			<section class="section-white">
				<div class="container section"><div class="row">
				<h1 class="section-title">featured courses</h1>
				<a class="section-subtitle" href="courses.php">(view the whole list)</a>
			</div><div class="row">
				<div class="col-md-3 col-sm-6 card">
					<img src="images/courses/i590.jpg" alt="" class="full-width">
					<div class="card-info-wrap">
						<h1 class="card-title">big data analytics practice</h1>
						<p class="card-info">
							<span class="course-number">INFO I590</span><br>
							<span class="course-instructor">Geoffrey Fox</span><br>
							<span class="course-length">8 Weeks</span>	
						</p>
						<a href class="primary-button">view detail</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 card">
					<img src="images/courses/i591.jpg" alt="" class="full-width">
					<div class="card-info-wrap">
						<h1 class="card-title">data science introduction</h1>
						<p class="card-info">
							<span class="course-number">INFO I591</span><br>
							<span class="course-instructor">Geoffrey Fox</span><br>
							<span class="course-length">8 Weeks</span>	
						</p>
						<a href class="primary-button">view detail</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 card">
					<img src="images/courses/i592.jpg" alt="" class="full-width">
					<div class="card-info-wrap">
						<h1 class="card-title">big data application and practice</h1>
						<p class="card-info">
							<span class="course-number">INFO I592</span><br>
							<span class="course-instructor">Geoffrey Fox</span><br>
							<span class="course-length">8 Weeks</span>	
						</p>
						<a href class="primary-button">view detail</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 card">
					<img src="images/courses/i593.jpg" alt="" class="full-width">
					<div class="card-info-wrap">
						<h1 class="card-title">data science in bioinformatics</h1>
						<p class="card-info">
							<span class="course-number">INFO I593</span><br>
							<span class="course-instructor">Geoffrey Fox</span><br>
							<span class="course-length">8 Weeks</span>	
						</p>
						<a href class="primary-button">view detail</a>
					</div>
				</div>
				</div></div>
			</section>
		</main>
<?php
include('footer.html');
?>