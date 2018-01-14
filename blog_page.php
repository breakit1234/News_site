<?php
session_start();

require('function.php');
$con = con();

$blog_id = $_GET["id"];
$user_id = $_SESSION['id'];
//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM user U where U.id = '$user_id'";

$result = $con->query($query);

$arr = $result->fetch_array();

$email = $arr["email"];
$user_firstname = $arr["first_name"];
$user_lastname = $arr["last_name"];





//QUERY TO FETCH ALL POSTS AND THEIR DETAILS

$allposts = "SELECT * FROM user U, post P where U.id=P.user_id and P.id='$blog_id'";
$posts_result = $con->query($allposts);
$arr = $posts_result->fetch_array();
$firstname = $arr["first_name"];
$lastname = $arr["last_name"];
$description = $arr["description"];
$title = $arr["title"];
$name = $firstname." ".$lastname;
?>

<html>
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome $user_firstname" ;?></a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="#">Post A New Blog</a></li>
				<li class="active"><a href="#">Profile Page</a></li>
				<li class="active"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<!-- End-->
	<div class="container" style="margin-top: 60px">

		<div class="row">

			<!-- Post Content Column -->
			<div class="col-md-8 col-md-offset-2">

				<!-- Title -->
				<center>
					<h1><?php echo $title ?></h1>

					<!-- Author -->
					<p class="username">
						by <a><?php echo $name; ?></a>
					</p>

					<hr>

					<!-- Date/Time -->
					
				</center>
				<hr>

				<!-- Preview Image -->
				<img class="postimage" src="./assets/images/wp-api.png" alt="API">

				<hr>

				<!-- Post Content -->
				<div class="postcontent">

					<p>
						<?php echo $description; ?>
					</p>
				<h2><b>Introduction</b></h2>
					<p>APIs, or “Application Programming Interfaces”, have revolutionized the way that we use web and mobile applications by allowing computer programs to talk to each other. Because of this revolution, software development and innovation has radically sped-up over the last 10 years, and apps integrate and communicate in fantastically new ways.</p>

					<br>

					<h2><b>APIs:The backbone of software</b></h2>
					<p>APIs, or “Application Programming Interfaces,” are the hidden backbone of our modern world which allow software programs to communicate with one another. Although most of us don’t know it, behind the scenes of every app and website we use is a mesh of computers “talking” to each other through a series of APIs. Today, the “API economy” is quickly changing how the world interacts.</p>

					<p>At the most basic level, an API is a set of rules that dictate how one application communicates with another. APIs aren’t that new either; whenever you use a PC, APIs are what makes it possible to move data between different applications, for instance by copying a link from an email into a Microsoft Word document. </p>

					<br>

					<h2><b>Why APIs are important</b></h2>
					<p>In the modern world, APIs are incredibly important because they explain how software developers can engineer new apps that plug into big services: social networks like Twitter and Facebook, or utilities like Dropbox or AccuWeather [9]. The maker of a mobile game, FlappyBird for instance, could use Dropbox to let players store their games and preferences in Dropbox’s cloud instead of building out a cloud storage system from scratch. Or a developer making a mapping application could add the option to hail a cab through the app via the Uber API.</p>

				</div>
				<hr>

				<center>
					<div style="margin:10px">
						<a href="#" class="btn btn-info btn-lg">
							<span class="glyphicon glyphicon-thumbs-up"></span> Like
						</a>
						<a href="#" class="btn btn-success btn-lg" style="margin-left:30px">
							<span class="glyphicon glyphicon-thumbs-down"></span> DisLike
						</a>
					</div>
				</center>

			</div>

		</div>
		<!-- /.row -->

	</div>
</body>
</html>