<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="https://pict.edu/" target="_blank" title="Visit PICT Website"><img src="img/pictlogo.png" style="width: 50px ; height: 50px"></img></a>
    </div>
    <ul class="nav navbar-nav">
        <li style="color: white; font-size: 25px; padding-top: 20px">STUDENT INFORMATION SYSTEM </li>
        <!-- <li style="margin-bottom: 20px ; margin-top: 12px"><a href="about.php">&nbsp&nbspAbout Us</a></li> -->
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="margin-top: 15px"><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li style="margin-top: 15px"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<style>
p{
  padding-top: 70px;
  padding-left: 10px;
  padding-right: 10px;
  font-size: 20px;
}

img{
  width: 360px;
  /* height: 350px; */
  border-radius: 20px;
}

.flip-box {
  background-color: transparent;
  width: 400px;
  height: 400px;
  padding-right: 40px;

  /*border: 1px solid #f1f1f1;*/
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  margin-top: 200px;
  position: absolute;
  border-radius: 20px;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color:  #29979F; /* #2DB4BE ;*/
  color: black;
  transform: rotateY(0deg);
}

.flip-box-back {
  background-color: #555;
  color: white;
  text-align: center;
  transform: rotateY(180deg);
}
</style>



</head>
<body>


<section id="body">
  <div class="container">
    <div class="row">

        <div class="col-md-4">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="img/mentorpic1.png" alt="Paris">

              </div>
              <div class="flip-box-back">

                <p>In this project,A student may share information about his or her own career path, as well as provide guidance, motivation, emotional support, and role modeling. A mentor may help with exploring careers, setting goals, developing contacts, and identifying resources.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="img/mentorpic2.png" alt="Paris">

              </div>
              <div class="flip-box-back">

                <!-- <p>Today, most youth development organizations recognize the importance of a child having a caring responsible adult in their lives. For children who come from less than ideal circumstances, mentoring can be a critical ingredient towards positive youth outcomes.  </p> -->
                <h2>Created By:</h2>
                <h2>33107_Saurabh</h2>
                <h2>33112_Yash</h2>
                <h2>33109_Prince</h2>
                <h2>33015_Omkar</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="img/mentorpic3.png" alt="Paris" height="240px">

              </div>
              <div class="flip-box-back">

                <!-- <p>The word mentor comes from the character "Mentor" in Homer's epic tale, The Odyssey. Mentor was a trusted friend of Odysseus, the king of Ithaca. When Odysseus fought in the Trojan War, Mentor served as friend and counsel to Odysseus' son Telemachus. Riverside Webster’s II New College Dictionary 1995 defines a mentor as “a wise and trusted teacher or counselor”.</p> -->
                <h2>Under guidance of:</h2>
                <h2>Dr. Emmanuel sir</h2>
                <h2>Dr. Anant Bagade sir</h2>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

</section>

<script src="js/three.r95.min.js"></script>
<script src="js/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#body",
  mouseControls: true,
  touchControls: true,
  minHeight: 754.00,
  minWidth: 710.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x9570de,
  backgroundColor: 0x271940
})
</script>
<script src"js/jquery.min.js"></script>
</body>
</html>
