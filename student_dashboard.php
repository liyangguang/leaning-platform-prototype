<?php
$nav = 1;
$name = "Thomas";
include('header_student.php');
?>
		<main class="container main-wrap">
			<div class="row">

				<section class="col-md-8">

					<div class="card row relative">
						<div class="col-md-3">
							<img class="full-width course-img" src="images/courses/i592.jpg" alt="">
						</div>
						<div class="col-md-6">
							<h1 class="card-title">big data programming</h1>
							<p class="card-info">
								<span class="course-number">INFO I593</span><br>
								<span class="course-instructor">Geoffrey Fox</span><br>
								<span class="course-length">8 Weeks</span><br>
								<span class="course-semester">Spring 2016</span>
							</p>
						</div>
						<div class="col-md-3 course-function-wrap">
							<a class="primary-button" href="student_course.php">resume</a>
							<i class="course-function-icon fa fa-bullhorn"><span class="badge">2</span></i>
							<i class="course-function-icon fa fa-calendar-check-o"><span class="badge">1</span></i>
							<i class="course-function-icon fa fa-comments"></i>
							<i class="course-function-icon fa fa-folder-open"></i>
						</div>
						<div class="col-md-12 course-detail js-course-detail">

							<i class="fa fa-bullhorn course-detail-icon"></i>
							<div class="course-detail-wrap">
								<p class="course-detail-title"><b>March 5</b>: Clarification about assignment 3</p>
								<p class="course-detail-content">I'm sending out an announcement to publicly rebroadcast my answers to the most common questions that some of you asked in these days about assignment 2. 1.Remember that the final goal of the assignment ...</p>
							</div>

							<i class="fa fa-bullhorn course-detail-icon"></i>
							<div class="course-detail-wrap">
								<p class="course-detail-title"><b>March 7</b>: Programming Lab maintanence</p>
								<p class="course-detail-content">Due to an upgrade, the Programming Lab will not be accessible on Mar 1, 8 PM - 10 PM. Sorry for the inconvenience.</p>
							</div>

							<i class="fa fa-calendar-check-o course-detail-icon"></i>
							<div class="course-detail-wrap">
								<p class="course-detail-title"><b>March 7</b>: Grade for Assignment 1 published</p>
								<p class="course-detail-content">Now you can view your grade for Assignment 1</p>
							</div>

						</div>
						<button class="course-toggle js-course-toggle"><i class="fa fa-chevron-down"></i></button>
					</div>

					<div class="card row relative">
						<div class="col-md-3">
							<img class="full-width course-img" src="images/courses/i594.jpg" alt="">
						</div>
						<div class="col-md-6">
							<h1 class="card-title">cloud computing</h1>
							<p class="card-info">
								<span class="course-number">INFO I594</span><br>
								<span class="course-instructor">Qiu</span><br>
								<span class="course-length">12 Weeks</span><br>
								<span class="course-semester">Spring 2016</span>
							</p>
						</div>
						<div class="col-md-3 course-function-wrap">
							<a class="primary-button" href="student_course.php">resume</a>
							<i class="course-function-icon fa fa-bullhorn"></i>
							<i class="course-function-icon fa fa-calendar-check-o"><span class="badge">1</span></i>
							<i class="course-function-icon fa fa-comments"></i>
							<i class="course-function-icon fa fa-folder-open"><span class="badge">1</span></i>
						</div>
						<div class="col-md-12 course-detail js-course-detail">

							<i class="fa fa-folder-open course-detail-icon"></i>
							<div class="course-detail-wrap">
								<p class="course-detail-title"><b>March 7</b>: New file uploaded</p>
								<p class="course-detail-content">Reading: Chapter 2 is available now.</p>
							</div>

							<i class="fa fa-calendar-check-o course-detail-icon"></i>
							<div class="course-detail-wrap">
								<p class="course-detail-title"><b>March 9</b>: Assignment 3 published</p>
								<p class="course-detail-content">Now you can submit your Assignment 3</p>
							</div>

						</div>
						<button class="course-toggle js-course-toggle"><i class="fa fa-chevron-down"></i></button>
					</div>

				</section>

				<section class="col-md-4">
					<div class="card sidebar">
						<h1 class="card-title">Calendar</h1>
						<img src="images/calendar.png" alt="" class="img-small">
						
						<p class="calendar-item calendar-item-due">
							<b>Mar 11, 12 PM: </b>
							<span class="cursor">Assignment 2 due</span><br>
							<span class="calendar-info">I590-Big Data Programming</span>
						</p>

						<p class="calendar-item calendar-item-due">
							<b>Mar 14, 12 PM: </b>
							<span class="cursor">Quiz 4 due</span><br>
							<span class="calendar-info">I590-Big Data Programming</span>
						</p>

						<p class="calendar-item calendar-item-event">
							<b>Mar 14, 5 PM: </b>
							<span class="cursor">A Social Scientist's Perspective on Data Science</span><br>
							<span class="calendar-info">Info-West 150 | Live Streaming</span>
						</p>

					</div>

					<div class="card sidebar">
						<h1 class="card-title">Quick Links</h1>
						<img src="images/links.png" alt="" class="full-width cursor">
					</div>

				</section>

			</div>
		</main>
<?php
include('footer.html');
?>