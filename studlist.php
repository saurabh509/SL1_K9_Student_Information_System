<?php
		session_start();
 ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Student List</title>
		<!-- <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="css/all.css">
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
      <div class="jumbotron" style="margin-top: 100px">
        <h1 style="text-align: center">STUDENT LIST</h1>
        <table class="table table-striped" style="margin-top: 50px ; background-color: white">
          <thead>
            <tr>
              <th>NAME</th>
              <th>ROLL</th>
              <th>EMAIL</th>
              <th>DOB</th>
							<th>Year</th>
							<th>Department</th>
            </tr>
          </thead>
          <tbody>

						<?php
								$conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

								if(!$conn){
									echo "connection error:".mysqli_connect_error();
								}

								$sql='SELECT u.name as name,u.roll as roll ,u.email as email,u.year as year,u.date as date,d.name as dept_name from users u,department d where d.id=u.dept_id';

								$result=mysqli_query($conn,$sql);

								$users=mysqli_fetch_all($result,MYSQLI_ASSOC);
								mysqli_free_result($result);
								mysqli_close($conn);

								foreach ($users as $var) {
									// code...
									echo "<tr><td>".$var['name']."</td><td>".$var['roll']."</td><td>".$var['email']."</td><td>".$var['date']."</td><td>".$var['year']."</td><td>".$var['dept_name']."</td></tr>";
								}

						?>
          </tbody>
        </table>
      </div>

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
