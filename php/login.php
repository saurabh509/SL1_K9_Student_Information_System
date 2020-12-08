<?php
  session_start();

  $_SESSION['email']=$_POST['email'];
  //$_SESSION['pwd']=$_POST['pwd'];

  if(isset($_POST["submit"])){

    $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

    if(!$conn){
      echo "connection error:".mysqli_connect_error();
    }

    //$sql='SELECT email,password from users';
    $sql='SELECT id,name,roll,email,password,date,year,gender from users';
    $result=mysqli_query($conn,$sql);

    $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    $flag=0;
    //print_r($users);

    foreach($users as $var){
      if($var['email']==$email && $var['password']==$pwd ){
          $flag=1;
          $_SESSION['name']=$var['name'];
          $_SESSION['id']=$var['id'];
          $_SESSION['rollno']=$var['roll'];
          $_SESSION['email']=$var['email'];
          $_SESSION['date']=$var['date'];
          $_SESSION['year']=$var['year'];
          break;
      }
    }
    //echo $flag;

    if($flag){
      header('Location: ../main_st.php');
    }
    else {
      header('Location: ../login.php');
    }
  }

 ?>
