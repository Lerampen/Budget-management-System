<!DOCTYPE html>
<?php 
session_start(); 
?>
<html lang="en">
<head>
    
    <title>login-form</title>
    <style>
      html{
            
            height: 100%;
            margin:0;
            padding:0
             

        }
        body{
            font-family: 'Convergence', sans-serif;
            line-height: 1.5;
            background-image:url('./images/coins.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            /* make footer stick at the bottom */
            min-height: 100%;
            margin:0;
            padding:0;
            display: flex;
            flex-direction: column;
        }
        .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  opacity: 95%;
}
.form {
  position: relative;
  /* The z-index property specifies the stack order of an element.
An element with greater stack order is always in front of an element with a lower stack order */
  z-index: 1;
  background: rgb(255, 255, 255);
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
font-family: 'Convergence', sans-serif;
  outline: 0;
  border-radius: 12px;
  /* border color of the input field */
  border-color: rgb(29, 161, 242); 
  /* background color of the input field */
  background: rgb(242, 242, 242);
  width: 100%;
 
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

button{
            
            padding: 15px;
            border-radius: 12px;
            width: 100%;
            color: white;
            cursor: pointer;
            background-color: rgb(29, 161, 242);
        }
.form .message {
  margin: 15px 0 0;
  /* color of the text message */
  color: rgb(29, 161, 242); 
}
.form .message a {
    /* color of the link */

    color: rgb(29, 161, 242);
  
  text-decoration: none;
}

header {
            background-color:rgb(29, 161, 242) ;
            opacity: 90%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
            width: 100%;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
            /* (box-shadow) The x-offset and y-offset are how far to the side and up/down the shadow is,
             blur is how blurred the shadow is, and spread is how far out of the element the shadow spreads */
        }
        /* the * is a wildcard  and can mean any element therefore header * means any element inside header */
        header *{ 
            display: inline;  
            /* display inline will override the list-items tag and the list will be horizontal instead of vertical */
        }
        header li{
            margin: 20px;
            /* spacing between the nav links */

        }
        header li a{
            color: #fff;
            /* text decoration is the line under the text  so we remove that to none */
            text-decoration: none;
           
            margin-right: 20px;
            /* spacing between the nav links */

        }
        footer {
            background: rgb(52, 58, 64);
            color: rgb(255, 255, 255);
            height: 40px;
            text-align: center;
            
            bottom: 0px;/*positioning the footer at the bottom of the page*/
            left: 0px;/*positioning the footer at the left of the page*/
            padding-top: 20px;/*spacing between the footer and the top line of the footer-bottom element*/
            width: 100%;/*width of the footer*/
           margin-top: auto;
        }

    </style>
</head>
<header>
        
  <nav>
      <ul><li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">About us</a></li>
     
      <li><a href="loginForm.php">Login</a></li>
      <li><a href="#">Contact us</a></li></ul>
  </nav>
</header>
<body>
  <!-- Login form -->
    <div class="login-page">
        <div class="form">
         
          <form class="login-form" id="loginForm" method="post">
            <input type="text" id='usrnme' name="username" placeholder="username"/>
            <input type="password" id ='passwd' name="userpasswd" placeholder="password">
            <button type="submit" name="login"  value="login">Login</button>
            <p class="message">Not registered? <a href="employeeForm.php">Create an account</a></p>
          </form>
        </div>
      </div>
    
<?php
//connection string
$server="localhost";
$user="apeyon";
$password="QWERTY@12345";
$dbname="county";
$con = mysqli_connect($server, $user, $password, $dbname);

// if ($con->connect_error) {
//     die("Connection failed: ");
if(mysqli_connect_errno()) {//incase there is a connection failure display error message
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['login'])){//check if login button is clicked
 
  $username = $_POST['username'];// store the value of the keyed in the input  in variable $username
  $passwd = $_POST['userpasswd'];//store the value of the keyed in the input  in variable $passwd


  
  $hasheduserpass=password_hash($passwd, PASSWORD_DEFAULT);//hash the password and store value in variable $hasheduserpass
  


  // #department manager
  $job = "SELECT * FROM employee WHERE username = '$username'";//select all columns and rows where the column username in the table employee matches with the value stored in $username
  $jobs = mysqli_query($con,$job); //execute the query
  

  if(mysqli_num_rows($jobs) > 0){//check if the rows with result of the query eecuted are greater than 0
    

 while($row = mysqli_fetch_assoc($jobs)){ //fetch the result as an associative array  and store the result in variable $row and loop through the result


  if ($row['username'] == $username && password_verify($passwd, $row['password'])  ){
    switch ($row['job']) { 
     
      case 'Department Manager':
        //session_start(); //start session
    $_SESSION['emp_id'] = $row['emp_id'];
    $_SESSION['fname'] = $row['fname'];

    $_SESSION['dept_code'] = $row['dept_code'];
    $_SESSION['job'] = $row['dept_code'];
        
  echo "<script>alert('department manager logged in successfully');
  window.location.href= 'deptmanager/index.php';</script>
      
  ";// display alert message
 // echo "<script>window.open('deptmanager/index.php','_SELF')<script>";// redirect page to department manager portal
//  header('Location:deptmanager/index.php');
        break;

        case 'Senior Accountant': //if the resultant row under column job has a value of Senior accountant...
          # code...
          //session_start();
          $_SESSION['emp_id'] = $row['emp_id'];
          $_SESSION['fname'] = $row['fname'];

              //header('location:seniorAccountant/index.php');// redirect page to senior accountant portal
        echo "<script>alert(' senior accountant logged in successfully');//display alert message
        window.location.href= 'seniorAccountant/index.php';</script>";// redirect page to department manager portal
          break;
          case 'Chief Finance officer': //if the resultant row under column job has a value of Chief finance officer...
            //session_start();
          $_SESSION['emp_id'] = $row['emp_id'];//store employee id in a session variable
          $_SESSION['fname'] = $row['fname'];

             // header('location:cfo/index.php');// redirect page to chief finance officer  portal
        echo "<script>alert('cfo logged in successfully');// display alert message
        window.location.href= 'cfo/index.php';</script>";// redirect page to department manager portal
      
      default:
        # if the above cases do not apply display the message below
        echo"User does not exist!";
        break;
    }
    

  }
  else{
    echo"<script>alert('error')</script>";}

}
  }
  else{
    echo "No user with username: ". $username;
  }


   
  }
?>
</body>
<footer>
    
   
    &copy; Copyright 2022 - Budget Management System Kenya - 1029701
    

</footer>
</html>
