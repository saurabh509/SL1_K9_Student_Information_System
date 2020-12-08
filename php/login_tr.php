<?php
  session_start();

  $_SESSION['email']=$_POST['email1'];
  //$_SESSION['pwd']=$_POST['pwd'];

  if(isset($_POST["submit"])){

    $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

    if(!$conn){
      echo "connection error:".mysqli_connect_error();
    }

    $sql='SELECT id,name,email,password,date,gender from teachers';

    $result=mysqli_query($conn,$sql);

    $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    $email=$_POST['email1'];
    $pwd=$_POST['pwd1'];

    $flag=0;
    //print_r($users);

    foreach($users as $var){
      if($var['email']==$email && $var['password']==$pwd ){
          $flag=1;
          $_SESSION['id']=$var['id'];
          $_SESSION['name']=$var['name'];
          $_SESSION['email']=$var['email'];
          $_SESSION['date']=$var['date'];
          break;
      }
    }
    //echo $flag;

    if($flag){
      header('Location: ../main_tr.php');
    }
    else {
      header('Location: ../login.php');
    }
  }

 ?>
