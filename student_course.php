<?php
$nav = 3;
$name = "Thomas";
include('header_student.php');
?>
		<main class="container main-wrap">
			<div class="row">

				<nav class="col-sm-12 card">
					<h1 class="card-title">I593 - Big Data Programming</h1>
					<ul class="course-nav ul-inline">
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="info">Course Info</a></li>
						<li class="course-nav-item li-inline active"><a class="js-course-nav" data="courseware">Courseware</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="assignment">Assignment</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="syllabus">Syllabus</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="programming">Programming Lab</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="slack">Slack Discussion</a></li>
						<li class="course-nav-item li-inline"><a class="js-course-nav" data="download">Download Materials</a></li>
					</ul>
				</nav>
			</div>

			<div class="row js-info js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/course_img.jpg" alt="" class="img-small">
					<h1 class="card-title">About this course</h1>
					<p>The Big Data Applications and Analytics course is an overview course in Data Science and covers the applications and technologies (data analytics and clouds) needed to process the application data. It is organized around rallying cry: Use Clouds running Data Analytics Collaboratively processing Big Data to solve problems in X-Informatics.</p>
					<h1 class="card-title">Learning outcomes</h1>
					<p>Students will gain broad understanding of Big Data application areas and approaches used. This course is a good preparation for any student likely to be involved with Big Data in their future.</p>
					<h1 class="card-title">Dr. Geoffrey Fox</h1>
					<p>Professor Geoffrey Fox received a PhD in Theoretical Physics from Cambridge University and is now Professor of Informatics and Computing as well as Physics at Indiana University, where he is director of the Digital Science Center and Associate Dean for Research and Graduate Studies at the School of Informatics and Computing. He previously held positions at Caltech, Syracuse University and Florida State University.<br><br>He has published around 1,000 papers in Physics and Computer Science, supervised the PhD candidacies of 65 students, and received an h-index of 67 along with over 23000 citations. Professor Fox currently works in applying Computer Science to Bioinformatics, Sensor Clouds, Earthquake and Ice-sheet Science, and Particle Physics. He is principal investigator of FutureGrid – a facility to enable development of new approaches to computing. He is involved in several projects, including the eHumanity portal, to enhance the capability of Minority Serving Institutions. A Fellow of APS and ACM, he has experience in online education and its use in MOOCs for areas like Data and Computational Science.</p>
				</div>
			</div>

			<div class="row js-courseware js-course-page">
				<div class="col-sm-3 card no-padding">
					<img src="images/courseware_nav.png" alt="" class="full-width">
				</div>
				<div class="col-sm-9">
					<div class="card sidebar">
						<h1 class="card-title">Unit 8 - Advanced Sabermatrics</h1>
						<p>We look into more big data examples with a focus on science and research. We give astronomy, genomics, radiology, particle physics and discovery of Higgs particle (Covered in more detail in later lessons), European Bioinformatics Institute and contrast to Facebook and Walmart.</p>
						<img src="images/lecture_video.png" alt="" class="img-small">
						<a class="download-link" href="">Download Slides</a>
						<a class="download-link" href="">Download Video</a>
						<br><br>
						<p>
							<b>Materials:<br></b>
							Geoffrey Fox and Dennis Gannon Using Clouds for Technical Computing To be published in Proceedings of HPC 2012 Conference at Cetraro, Italy June 28 2012 http://grids.ucs.indiana.edu/ptliupages/publications/Clouds_Technical_Computing_FoxGannonv2.pdf<br><br>
							CSTI General Assembly 2012, Washington, D.C., USA Technical Activities Coordinating Committee (TACC) Meeting, Data Management, Cloud Computing and the Long Tail of Science October 2012 Dennis Gannon<br></p>
					</div>
				</div>
			</div>

			<div class="row js-assignment js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/assignments.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-syllabus js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/syllabus.png" alt="" class="full-width">
					<a class="download-link" href="">Full PDF</a>
				</div>
			</div>

			<div class="row js-programming js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/programming.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-slack js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/slack.png" alt="" class="full-width">
				</div>
			</div>

			<div class="row js-download js-course-page hide">
				<div class="card col-sm-12">
					<img src="images/download.png" alt="" class="full-width">
				</div>
			</div>

		</main>
<?php
include('footer.html');
?>