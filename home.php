<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/all.css">
  </head>
  <body style="background-color: #FF5733">

    <div class="container-fluid">
  <div class="card" style="margin-right: 5px">
    <div class="card-body">
      <h2 class="card-title" style="text-align: center">LOGIN</h2><br><br>
      <form class="" action="php/login.php" method="POST">
        <div class="input-container">
          <i class="fas fa-envelope icon"></i>
          <input class="input-field" type="text" placeholder="Email ID" value="<?php if(isset($_SESSION['email']))echo $_SESSION['email'];?>" name="email"required>
        </div>
        <div class="input-container">
          <i class="fas fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Password" name="pwd" id="pasd" required>
            <i class="fa fa-eye-slash" id="eyeslash" onclick="myFunction()"></i>
            <i class="fa fa-eye" id="eyev" onclick ="myFunction()"></i>
        </div>
        <div class="text-center" style="margin-bottom: 20px"><button type="submit" class="btn btn-success" name="submit" id="submit">Log In</button></div>
    </form>
    </div>
   </div>


  <script src="js/signupvis.js"></script>
  <?php
    session_unset();
    session_destroy();
   ?>
  </body>
</html>
