<?php

  session_start();
  $_SESSION['name1']=$_POST['name1'];
  $_SESSION['email1']=$_POST['email1'];
  $_SESSION['date1']=$_POST['date1'];
  $_SESSION['optradio1']=$_POST['optradio1'];

  $errors=array("email"=>"","name"=>"","pwd"=>"","date"=>"","optradio"=>"");
  $data_error="";

  if(isset($_POST["submit"])){

    //emial validation
    $email=$_POST["email1"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['email']= "A valid email required";
    }

    //name vaildation
    $name=$_POST['name1'];
    /*if(!ctype_alpha($name)){
      $errors['name']= "A valid name is required";
    }*/
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errors['name']= "A valid name is required";
    }

    //password matching
    if($_POST['pwd1']!=$_POST['pwdcf1']){
      $errors['pwd']='The passwords don\'t match';
    }

    //gender validation
    if(!isset($_POST['optradio1'])){
      $errors['optradio']='Select a gender';
    }

    //date validation
    if(!isset($_POST['date1'])){
      $errors['date']='Select appropriate date';
    }

    if(array_filter($errors)){
  		/*echo "error in form";
      print_r($errors);*/
      $_SESSION['error']="CHECK THE INFO YOU ENTERED";
      header("Location: ../index.php");
  	}

    else{

          $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

          if(!$conn){
            echo "connection error:".mysqli_connect_error();
          }

          $sql='SELECT name,email,password from teachers';

          $result=mysqli_query($conn,$sql);

          $teachers=mysqli_fetch_all($result,MYSQLI_ASSOC);
          mysqli_free_result($result);
          mysqli_close($conn);
          //closed connection;

          $name=$_POST['name1'];
          $email=$_POST['email1'];
          $pwd=$_POST['pwd1'];
          $date=$_POST['date1'];
          $gender=$_POST['optradio1'];

          $flag=0;

          foreach ($teachers as $var) {
            if($var['name']==$name || $var['email']==$email){
                $data_error="User already exists";
                header("Location: ../index.php");
                $flag=1;
            }
            //echo $var['name'];
          }

          if($flag==0){
                $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

                if(!$conn){
                  echo "connection error:".mysqli_connect_error();
                }


                $sql="INSERT INTO teachers(name,email,password,date,gender) VALUES('$name','$email','$pwd','$date','$gender')";

                if(mysqli_query($conn,$sql)){
                  mysqli_close($conn);
                  session_unset();
                  session_destroy();
                  header("Location: ../success.php");
                }
    }
  }
}


?>
