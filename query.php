<?php
  session_start();

  if(isset($_POST['submit'])){

      $target = "upload_documents/".basename($_FILES['docs']['name']);

      $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

      if(!$conn){
        echo "connection error:".mysqli_connect_error();
      }

      $image=$_FILES['docs']['name'];
      $text=$_POST['text'];
      $id=$_SESSION['id'];

      $sql="INSERT INTO documents_image_table(id,image,text)  VALUES('$id','$image','$text')";

      if(mysqli_query($conn,$sql)){
        mysqli_close($conn);
      }

      if(move_uploaded_file($_FILES['docs']['tmp_name'],$target)){

      }
  }

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Mentoring</title>
		<!-- <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="css/all.css">


		<script src="js/modernizr.custom.js"></script>
    <style>
    #form{
        background-color:white;
        border-radius: 10px;
        width: 700px;
        margin:auto;
        margin-top: 100px;
        opacity: 0.9;
        height:550px;
        padding: 20px 20px 20px 20px;
        box-shadow: darkgray;
    }
    .form-control{
            margin-bottom: 20px;
            border-bottom:1px solid lightblue;
            border-top:1px  solid lightblue;
            border-right: 1px solid lightblue;
            border-left : 6px solid lightblue;
            font-size: 1em;
            font-weight: 100;
            color: grey;

    }
    </style>
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
                  <a class="gn-icon gn-icon-article" href="main_st.php">Home</a>
                </li>
								<li>
									<a class="gn-icon gn-icon-download" href="query.php">Upload Documents</a>
									<!-- <ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul> -->

								<li>
									<a class="gn-icon gn-icon-archive" href="comments.php">Post a Comment</a>
									<!-- <ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul> -->
								</li>
              </li>
              <!-- <li><a class="gn-icon gn-icon-cog">Settings</a></li> -->
              <li><a class="gn-icon gn-icon-help" href="notifications.php">Notifications</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="profile.php"><?php if(isset($_SESSION['name']))echo $_SESSION['name'];?></a></li>
				<li><a href="miniprojhome.php">LOGOUT</a></li>
				<!-- <li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li> -->
			</ul>
      <div class="container" id="form">
        <h3 style="color:lightblue ;text-align:center;">Please fill up the form</h3>
          <form action="query.php" method="POST" enctype="multipart/form-data">
              <div class="form-group ">
                <div class="input-container">
                  <label for="sel1">Select the subject of your query</label>
                  <select class="form-control" id="sel1" name="type" required>
                    <option value="Academics">Academics</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Food">Food</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label for="comment">Please write your query here!</label>
                  <textarea class="form-control" name="text" rows="5" id="comment"></textarea>
              </div>
              <div class="form-group-lg">
                  <label>Please upload the documents related to achievements if any</label>
                  <br>
                  <input type="file" class="form-control-file border" name="docs" multiple>
              </div>
              <br><br>
              <div style="text-align: center"><button type="submit" name="submit" class="btn btn-outline-primary">Submit</button></div>
          </form>
      </div>

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
