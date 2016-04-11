<?php
$nav = 1;
$name = "Geoffrey";
include('header_instructor.php');
?>
		<main class="container main-wrap">
			<div class="row">

				<section class="col-md-8">
					<div class="card row">
						<div class="col-md-3">
							<img class="full-width course-img" src="images/courses/i592.jpg" alt="">
						</div>
						<div class="col-md-6">
							<h1 class="card-title">big data programming</h1>
							<p class="card-info">
								<span class="course-number">INFO I593</span><br>
								<span class="course-length">8 Weeks</span><br>
								<span class="course-semester">Spring 2016</span>
							</p>
						</div>
						<div class="col-md-3 course-function-wrap">
							<a href="instructor_course.php" class="primary-button">view</a>
							<i class="course-function-icon fa fa-bullhorn"><span class="badge">2</span></i>
							<i class="course-function-icon fa fa-calendar-check-o"><span class="badge">1</span></i>
							<i class="course-function-icon fa fa-comments"></i>
							<i class="course-function-icon fa fa-folder-open"></i>
						</div>
					</div>

					<div class="card row">
						<div class="col-md-3">
							<img class="full-width course-img" src="images/courses/i594.jpg" alt="">
						</div>
						<div class="col-md-6">
							<h1 class="card-title">cloud computing</h1>
							<p class="card-info">
								<span class="course-number">INFO I594</span><br>
								<span class="course-length">12 Weeks</span><br>
								<span class="course-semester">Spring 2016</span>
							</p>
						</div>
						<div class="col-md-3 course-function-wrap">
							<a href="instructor_course.php" class="primary-button">view</a>
							<i class="course-function-icon fa fa-bullhorn"></i>
							<i class="course-function-icon fa fa-calendar-check-o"><span class="badge">1</span></i>
							<i class="course-function-icon fa fa-comments"></i>
							<i class="course-function-icon fa fa-folder-open"><span class="badge">1</span></i>
						</div>
					</div>

				</section>

				<section class="col-md-4">
					
					<div class="card sidebar">
						<h1 class="card-title">Semester Progress</h1>
						<img src="images/semester.png" alt="" class="full-width cursor">
					</div>

				</section>

			</div>
		</main>
<?php
include('footer.html');
?>