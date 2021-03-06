<?php
session_start();

require('function.php');
$con = con();
$blog_id=$_SESSION['id'];
$user_id = $_SESSION['id'];
//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM user U where U.id = '$user_id'";

$result = $con->query($query);

$arr = $result->fetch_array();

$email = $arr["email"];
$user_firstname = $arr["first_name"];
$user_lastname = $arr["last_name"];
//QUERY TO FETCH ALL POSTS AND THEIR DETAILS

// $allposts = "SELECT * FROM user U, post P where U.id=P.user_id and P.id='$blog_id'";
// $posts_result = $con->query($allposts);
// $arr = $posts_result->fetch_array();
// $firstname = $arr["first_name"];
// $lastname = $arr["last_name"];
// $description = $arr["description"];
// $title = $arr["title"];
$name = $user_firstname." ".$user_lastname;

// $threeposts = "SELECT * FROM post WHERE status=1 ORDER BY id DESC limit 3";
// $allposts=$con->query($threeposts);
// $arr=$allposts->fetch_array();
// $title=$arr["title"];
// $description=$arr["description"];
?>


<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link href="./assets/css/font-awesome.css" rel="stylesheet">
  <link href="./assets/fonts/font.css" rel="stylesheet">
  <link href="./assets/css/index.css" rel="stylesheet">
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  
</head>
<body>
  <!-- Static navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $name;?></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="hey.php">Home</a></li>
        <li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="#">Report a news</a></li>
        <li class="active"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- End-->
  <div class="container-fluid" style="margin-top: 70px">
    <div class="container">
      <div class="jumbotron">
        <h1>Welcome <?php echo $user_firstname;?> </h1>
        <h4>Happy to see u again!!</h4>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-12">
        <h2>Recent Posts by Reporters</h2>
        <hr>

        
          <h3><?php 
          for($i=0;$i<2;$i++)
          {
          $threeposts = "SELECT * FROM post WHERE status=1 ORDER BY id DESC limit ".$i.", 1";
          $allposts=$con->query($threeposts);
          $arr=$allposts->fetch_array();
          $title=$arr["title"];
          $description=$arr["description"];
          $name=$arr["name"];

          echo "<h3>".$title."</h3><h5>Post by <b> $name </b></h5>
          <br>
          <p> $description <br><br><hr>";
         }
           ?>
        
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <div style="text-align:center;padding:1%;font-weight:bold">
    All rights reserved &copy; 2017
  </div>
</footer>

<!-- MODAL -->
<!-- Modal -->
<div id="add_blog_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Report a news</h4>
      </div>
      <div class="modal-body">
        <form id="newblog" class="form-horizontal" role="form" action="newblog.php" method="post">
          <div class="form-group">
            <label for="blog title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="Content">Content Of The News</label>
            <input rows="6" class="form-control" id="content" name="description">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- END MODAL -->
</body>
</html>