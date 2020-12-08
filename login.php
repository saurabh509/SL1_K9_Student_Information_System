<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title content="Mentor System">Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- <script>
      $(document).ready(function(){
        $("#switch2").click(function(){
          $("#login_t").fadeOut();
          $("#login_s").fadeIn(2000);
        });
      });
      $(document).ready(function(){
        $("#switch1").click(function(){
          $("#login_s").fadeOut();
          $("#login_t").fadeIn(2000);
        });
      });
    </script> -->
  </head>

  <body>

    <div class="row">
    <div id="login_s">

    <div class="container-fluid">
  <div class="card" style="margin: auto; margin-top: 50px">
    <div class="card-body">
      <h2 class="card-title" style="text-align: center">STUDENT LOGIN</h2><br><br>
      <form class="" action="php/login.php" method="post">
        <div class="input-container">
          <i class="fas fa-envelope icon"></i>
          <input class="input-field" type="text" placeholder="Email ID" name="email"required>
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
 </div>
 </div>


 <div id="login_t">
 <div class="container-fluid">
<div class="card" style="margin: auto; margin-top: 50px">
 <div class="card-body">
   <h2 class="card-title" style="text-align: center">TEACHER LOGIN</h2><br><br>
   <form class="" action="php/login_tr.php" method="post">
     <div class="input-container">
       <i class="fas fa-envelope icon"></i>
       <input class="input-field" type="text" placeholder="Email ID" name="email1"required>
     </div>
     <div class="input-container">
       <i class="fas fa-key icon"></i>
       <input class="input-field" type="password" placeholder="Password" name="pwd1" id="pasd" required>
         <i class="fa fa-eye-slash" id="eyeslash" onclick="myFunction()"></i>
         <i class="fa fa-eye" id="eyev" onclick ="myFunction()"></i>
     </div>
     <div class="text-center" style="margin-bottom: 20px"><button type="submit" class="btn btn-success" name="submit" id="submit">Log In</button></div>
 </form>
 </div>
</div>
</div>
</div>
</div>
 <script src="js/signupvis.js"></script>
  </body>
</html>
