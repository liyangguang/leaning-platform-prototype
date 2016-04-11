<?php
$nav = 2;
$name = "Geoffrey";
include('header_instructor.php');
?>
		<main class="container main-wrap">
			<div class="row">

				<nav class="col-sm-12 card">
					<h1 class="card-title">I593 - Big Data Programming</h1>
					<ul class="course-nav ul-inline">
						<li class="course-nav-item li-inline active"><a class="js-course-nav" data="courseware">Courseware</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="student">Student</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="grading">Grading</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="analytics">Analytics</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="files">Files</a></li>
					</ul>
				</nav>
			</div>

			<div class="row js-courseware js-course-page">
				<div class="col-sm-3 card no-padding">
					<img src="images/instructor_nav.png" alt="" class="full-width">
				</div>
				<div class="col-sm-9">
					<div class="card sidebar">
						<h1 class="card-title">Unit 8 - Advanced Sabermatrics</h1>
						<p class="edit-panle" contenteditable>Add desctiption</p>
						<img src="images/lecture_video.png" alt="" class="img-small">
						<div class="edit-panle">
							<p>Add new content</p>
							<img src="images/add_content.png" alt="" class="img-small">
						</div>
					</div>
				</div>
			</div>

			<div class="row js-student js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/students.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-grading js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/assignments.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-analytics js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/analytics.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-files js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/download.png" alt="" class="full-width">
				</div>
			</div>

		</main>
<?php
include('footer.html');
?>