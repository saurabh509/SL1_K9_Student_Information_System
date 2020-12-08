<?php
		session_start();
 ?>


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My Profile</title>
		<!-- <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/styleprofile.css">
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<!-- <li class="gn-search-item">
									<input placeholder="Query" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Query</span></a>
								</li> -->
                <li>
                  <a class="gn-icon gn-icon-article" href="main_tr.php">Home</a>
                </li>
								<li>
									<!-- <a class="gn-icon gn-icon-download" href="query.html">Upload Documents</a> -->
									<!-- <ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul> -->
                <li><a class="gn-icon gn-icon-illustrator" href="notice.php">Send Notice</a></li>

								<li>
										<a class="gn-icon gn-icon-photoshop" href="studlist.php">Student List</a>
								</li>

								<li>
									<a class="gn-icon gn-icon-archive" href="comments_tr.php">Post a Comment</a>
									<!-- <ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul> -->
								</li>
              </li>
              <!-- <li><a class="gn-icon gn-icon-cog">Settings</a></li> -->
              <li><a class="gn-icon gn-icon-help" href="notifications_tr.php">Notifications</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="profile_tr.php"><?php if(isset($_SESSION['name']))echo $_SESSION['name'];?></a></li>
				<li><a href="miniprojhome.php">LOGOUT</a></li>
				<!-- <li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li> -->
			</ul>

		</div><!-- /container -->

    <div class="container">
      <div id="form">
          <h1>MY PROFILE</h1>
          <div style="text-align: center"><img src="img/noprofile.jpeg" alt="profle pic">
              <br><br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
               Upload Profile Photo
              </button>

              <!-- The Modal -->

              </div><br>

							<h3>Name: <?php if(isset($_SESSION['name']))echo $_SESSION['name']; ?></h3>
							<h3>Email: <?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?> </h3>
							<h3>DOB: <?php if(isset($_SESSION['date']))echo $_SESSION['date']; ?> </h3>

      </div>

    </div>

    <div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Select a Photo to Upload</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<input type="file" name="profpic" accept="image/*">
					</div>

					<!-- Modal footer -->
					<div class="modal-footer">
						<form action="profile_tr.php" method="post">
								<button type="submit" class="btn btn-success">Upload</button>
						</form>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>

				</div>
			</div>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
