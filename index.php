<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title content="Mentor System">Mentor System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">


  </head>
  <body>
    <div class="backimg">
      <h1 style="font-size: 90px; text-align: center">SIGN UP</h1>

    <!-- <div class="container">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title" style="text-align: center">SIGN UP</h2><br><br>


        <form  action="php/form.php" method="POST">
          <div class="input-container">
            <i class="fas fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Full Name" name="name" required>
          </div>
          <div class="input-container">
            <i class="fas fa-list-ol icon"></i>
            <input class="input-field" type="text" placeholder="Roll Number" name="rollno" required>
          </div>
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
          <div class="input-container">
            <i class="fas fa-lock icon"></i>
            <input class="input-field" type="password" placeholder="Confirm Password" name="pwdcf" id="pasdc" required>
              <i class="fa fa-eye-slash" id="eyeslash1" onclick="myFunction1()"></i>
              <i class="fa fa-eye" id="eyev1" onclick="myFunction1()"></i>
          </div>

          <div class="form-check-inline">
            <label class="form-check-label">Gender:
              <input type="radio" class="form-check-input" name="optradio" id="radio1" value="Male" required>Male
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio" id="radio2" value="Female" required>Female
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio" id="radio3" value="Other" required>Other&nbsp&nbsp&nbsp&nbsp|
            </label>
          </div>

        <div class="form-check-inline">
          <div class="input-container">
              <p style="padding-left:5px; padding-top: 5px">DOB:<p> &nbsp&nbsp&nbsp</p></p>
            <input class="form-control" type="date" name="date" required>
          </div>
        </div>
        <div class="input-container">
          <p style="padding-left:5px; padding-top: 5px">Year:<p> &nbsp&nbsp&nbsp</p></p>
          <select class="form-control" id="yr" name="year" style="width: 20%" required>
            <option>FE</option>
            <option>SE</option>
            <option>TE</option>
            <option>BE</option>
          </select>
        </div>
               <a href="login.html" style="padding-left: 400px" >I am already a member</a>
            </div>
            <div class="text-center" style="margin-bottom: 20px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Sign Up</button></div>
          </form>
          </div>
          </div> -->
          <div class="container" style="margin-left: 150px">
            <div class="row ">
              <div class="col-sm-7 mt-3">
            <div class="flip-box"  style="margin-bottom: 100px; margin-top: 40px">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <h1 style="padding-top: 300px; text-align: center">STUDENT</h1>
              </div>
              <div class="flip-box-back">
                <!-- <div class="card-body " > -->
                <div class="container">
              <!-- <div class="card"> -->
                <!-- <div class="card-body"> -->
                  <h2 class="card-title" style="text-align: center; padding-top: 20px">STUDENT</h2><br>

                   <p style="text-align: center; margin-bottom: 10px ;color:red"> <?php if(isset($_SESSION['error']))echo $_SESSION['error'] ?></p>


                    <form  action="php/form.php" method="POST" autocomplete="off">
                      <div class="input-container">
                        <i class="fas fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Full Name" name="name" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} ?>" required autocomplete="off">
                      </div>
                      <div class="input-container">
                        <i class="fas fa-list-ol icon"></i>
                        <input class="input-field" type="text" placeholder="Roll Number" name="rollno" value="<?php if(isset($_SESSION['rollno'])){ echo $_SESSION['rollno'];} ?>" required autocomplete="off">
                      </div>
                      <div class="input-container">
                        <i class="fas fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Email ID" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?>" required autocomplete="off">
                      </div>
                      <div class="input-container">
                        <i class="fas fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="pwd" id="pasd" required>
                          <i class="fa fa-eye-slash" id="eyeslash" onclick="myFunction()"></i>
                          <i class="fa fa-eye" id="eyev" onclick ="myFunction()"></i>
                      </div>
                      <div class="input-container">
                        <i class="fas fa-lock icon"></i>
                        <input class="input-field" type="password" placeholder="Confirm Password" name="pwdcf" id="pasdc" required>
                          <i class="fa fa-eye-slash" id="eyeslash1" onclick="myFunction1()"></i>
                          <i class="fa fa-eye" id="eyev1" onclick="myFunction1()"></i>
                      </div><br>

                      <div class="form-check-inline">
                        <label class="form-check-label">Gender:
                          <input type="radio" class="form-check-input" name="optradio" id="radio1" value="Male" required>Male
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" id="radio2" value="Female" required>Female
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" id="radio3" value="Other" required>Other
                        </label>
                      </div><br><br>

                    <div class="form-check-inline">
                      <div class="input-container">
                          <p style="padding-left:5px; padding-top: 5px">DOB:<p> &nbsp&nbsp&nbsp</p></p>
                        <input class="form-control" type="date" name="date" value="<?php if(isset($_SESSION['date'])){ echo $_SESSION['date'];} ?>" required>
                      </div>
                    </div>
                    <div class="form-check-inline">
                    <div class="input-container">
                      <p style="padding-left:5px; padding-top: 5px">Year:<p> &nbsp&nbsp&nbsp</p></p>
                      <select class="form-control" id="yr" name="year" style="width: 60%" required>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
                      </select>
                    </div>
                  </div><br>
                  <div class="form-check-inline">
                  <div class="input-container">
                    <p style="padding-left:5px; padding-top: 5px">Department:<p> &nbsp&nbsp&nbsp</p></p>
                    <select class="form-control" id="dept" name="dept" style="width: 60%" required>
                      <option value="IT">IT</option>
                      <option value="COMP">COMP</option>
                      <option value="ENTC">ENTC</option>
                    </select>
                  </div>
                </div><br>
                           <a href="login.php" style="text-align: center" >I am already a member</a>
                        <!-- </div> -->
                        <div class="text-center" style="margin-bottom: 20px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Sign Up</button></div>
                      </form>
                      <!-- </div> -->
                      </div>
                <!-- </div> -->
              </div>

            </div>

          </div>

          </div>

          <div class="col-sm-5 mt-3">
        <div class="flip-box" style="margin-bottom: 100px; margin-top: 40px">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <h1 style="padding-top: 300px; text-align: center">TEACHER</h1>
          </div>
          <div class="flip-box-back">
            <!-- <div class="card-body " > -->
            <div class="container">
          <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
              <h2 class="card-title" style="text-align: center; padding-top: 20px">TEACHER</h2><br>

              <p style="text-align: center; margin-bottom: 10px ;color:red"> <?php if(isset($_SESSION['error']))echo $_SESSION['error'] ?></p>

                <form  action="php/form_teacher.php" method="POST" autocomplete="false">
                  <div class="input-container">
                    <i class="fas fa-user icon"></i>
                    <input class="input-field" type="text" placeholder="Full Name" name="name1" value="<?php if(isset($_SESSION['name1'])){ echo $_SESSION['name1'];} ?>" required autocomplete="off">
                  </div>
                  <!-- <div class="input-container">
                    <i class="fas fa-list-ol icon"></i>
                    <input class="input-field" type="text" placeholder="Roll Number" name="rollno1" required>
                  </div> -->
                  <div class="input-container">
                    <i class="fas fa-envelope icon"></i>
                    <input class="input-field" type="text" placeholder="Email ID" name="email1" value="<?php if(isset($_SESSION['email1'])){ echo $_SESSION['email1'];} ?>" required autocomplete="off">
                  </div>
                  <div class="input-container">
                    <i class="fas fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" name="pwd1" id="pasd1" required>
                      <i class="fa fa-eye-slash" id="eyeslash_t" onclick="myFunction2()"></i>
                      <i class="fa fa-eye" id="eyev_t" onclick ="myFunction2()"></i>
                  </div>
                  <div class="input-container">
                    <i class="fas fa-lock icon"></i>
                    <input class="input-field" type="password" placeholder="Confirm Password" name="pwdcf1" id="pasdc1" required>
                      <i class="fa fa-eye-slash" id="eyeslash1_t" onclick="myFunction3()"></i>
                      <i class="fa fa-eye" id="eyev1_t" onclick="myFunction3()"></i>
                  </div><br>

                  <div class="form-check-inline">
                    <label class="form-check-label">Gender:
                      <input type="radio" class="form-check-input" name="optradio1" id="radio1" value="Male" required>Male
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio1" id="radio2" value="Female" required>Female
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio1" id="radio3" value="Other" required>Other
                    </label>
                  </div><br><br>

                <div class="form-check-inline">
                  <div class="input-container">
                      <p style="padding-left:5px; padding-top: 5px">DOB:<p> &nbsp&nbsp&nbsp</p></p>
                    <input class="form-control" type="date" name="date1" value="<?php if(isset($_SESSION['date1'])){ echo $_SESSION['date1'];} ?>" required>
                  </div>
                </div>
                <br>
                       <a href="login.php" style="text-align: center" >I am already a member</a>
                    <!-- </div> --><br><br><br><br><br><br>
                    <div class="text-center" style="margin-bottom: 20px"><button type="submit" class="btn btn-primary" name="submit" id="submit">Sign Up</button></div>
                  </form>
                  <!-- </div> -->
                  </div>
            <!-- </div> -->
          </div>

        </div>

      </div>

      </div>
        </div>
      </div>




          </div>

    <script src="js/signupvis.js"></script>
    <?php
      session_unset();
      session_destroy();
     ?>
  </body>
</html>
