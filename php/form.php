<?php

  session_start();
  $_SESSION['name']=$_POST['name'];
  $_SESSION['rollno']=$_POST['rollno'];
  $_SESSION['email']=$_POST['email'];
  $_SESSION['date']=$_POST['date'];
  $_SESSION['year']=$_POST['year'];
  $_SESSION['optradio']=$_POST['optradio'];



   $errors=array("email"=>"","rollno"=>"","name"=>"","pwd"=>"","date"=>"","optradio"=>"","year"=>"");
   $data_error="";

	if(isset($_POST["submit"])){

    //emial validation
		$email=$_POST["email"];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$errors['email']= "A valid email required";
		}

    //roll no validation
    $rollno=$_POST['rollno'];
    if(!is_int(intval($rollno))){
      $errors['rollno']= "A valid roll-number required";
    }

    //name vaildation
    $name=$_POST['name'];
    /*if(!ctype_alpha($name)){
      $errors['name']= "A valid name is required";
    }*/
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $errors['name']= "A valid name is required";
    }

    //password matching
    if($_POST['pwd']!=$_POST['pwdcf']){
      $errors['pwd']='The passwords don\'t match';
    }

    //gender validation
    if(!isset($_POST['optradio'])){
      $errors['optradio']='Select a gender';
    }

    //date validation
    if(!isset($_POST['date'])){
      $errors['date']='Select appropriate date';
    }

    //year validation
    if(!isset($_POST['year'])){
      $errors['year']='Select the current study year';
    }

	if(array_filter($errors)){
		/*echo "error in form";
    print_r($errors);*/
    $_SESSION['error']="CHECK THE INFO YOU ENTERED";
    header("Location: ../index.php");
	}
	else{
		//echo "error inotn form";
    //chdir('./../');

      $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

      if(!$conn){
        echo "connection error:".mysqli_connect_error();
      }

      $sql='SELECT name,roll,email,password from users';

      $result=mysqli_query($conn,$sql);

      $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($conn);
      //closed connection;


      $name=$_POST['name'];
      $rollno=$_POST['rollno'];
      $email=$_POST['email'];
      $pwd=$_POST['pwd'];
      $date=$_POST['date'];
      $year=$_POST['year'];
      $gender=$_POST['optradio'];
      $department=$_POST['dept'];
      $flag=0;

      foreach ($users as $var) {
        if($var['name']==$name || $var['roll']==$rollno || $var['email']==$email){
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

            //$sql='SELECT email,password from users';
            $sql='SELECT id,name from department';
            $result=mysqli_query($conn,$sql);

            $dept=mysqli_fetch_all($result,MYSQLI_ASSOC);
            mysqli_free_result($result);
            mysqli_close($conn);
            $dept_id=0;

            foreach($dept as $var){
              if($var['name']==$department){
                $dept_id=$var['id'];
                break;
              }
            }

            $conn=mysqli_connect('localhost','saurabh','test1234','student_information_system');

            if(!$conn){
              echo "connection error:".mysqli_connect_error();
            }


            $sql="INSERT INTO users(name,roll,email,password,date,year,gender,dept_id) VALUES('$name','$rollno','$email','$pwd','$date','$year','$gender','$dept_id')";

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
