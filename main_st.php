<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Mentoring</title>
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

                <li>
                  <a class="gn-icon gn-icon-article" href="main_st.php">Home</a>
                </li>
								<li>
									<a class="gn-icon gn-icon-download" href="query.php">Upload Documents</a>


								<li>
									<a class="gn-icon gn-icon-archive" href="comments.php">Post a Comment</a>

								</li>
              </li>
              <li><a class="gn-icon gn-icon-help" href="notifications.php">Notifications</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="profile.php"><?php if(isset($_SESSION['name']))echo $_SESSION['name'];?></a></li>
				<li><a href="miniprojhome.php">LOGOUT</a></li>
			</ul>
			<header>
				<h1>Welcome to our Online Mentoring System <span>Website specially made for PICT </span></h1>
			</header>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
