<?php 
$server="localhost";
$user="apeyon";
$password="QWERTY@12345";
$dbname="county";
$con = mysqli_connect($server, $user, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: ");
}
?>
<html>
<html lang="en">
<head>
    <title>County Employee Form</title>
      
        <script>
            //validate date function
            //accepts numbers separated by dashes, date of birth must be less than today and must be numerical
        function validateDate(){
        //Getting the date from input field
        dob=document.getElementById("dob").value;
        //CheckWhether it is of  dd/mm/yyyy format and also check if the input field is empty
        if(dob.indexOf("-")==-1){ //replace slash with a dash
        alert("Date must be entered and of the format (dd-mm-yyyy)");
        document.getElementById("dob").focus();
        return false;
        }
        datecomponent=dob.split("-");
        //Ensuring the date components are of correct length
        if(datecomponent[0].length<1 || datecomponent[1].length<1|| datecomponent[2].length<4){ //use array index
        alert("Date must be of the format (dd-mm-yyyy)");
        document.getElementById("dob").focus();
        return false;
        }
        //Check is the date entered is of type integer
        if(isNaN(datecomponent[0])||isNaN(datecomponent[1])||isNaN(datecomponent[2])){
        alert("Date components must be intergers and must be of the format (dd-mm-yyyy)");
        document.getElementById("dob").focus();
        return false;
        }
        //compare the entered date and today
        var today=new Date(); //Todays Date
        var givendt=new Date(); //variable for getting the entered date
        givendt.setFullYear(datecomponent[2],datecomponent[1]-1,datecomponent[0]);//The function setFullYear Set the year (optionally also month and day yyyy,mm,dd)
        //Comparing the dates
        //check if the given date is greater than today's date
        if(givendt>today){
        alert("Date of Birth cannot be greater than today");
        document.getElementById("dob").focus();
        return false;
        }
        return true;
        }
        // validate function
        function checkForm(){
        
        var fname = document.getElementById('fname');
    var middlename = document.getElementById('middlename');
    var surname = document.getElementById('surname');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var email = document.getElementById('email');
    var confPassword = document.getElementById('confPassword');
    var gender=document.getElementById("gender").options.selectedIndex;
    var depts=document.getElementById("dept").options.selectedIndex;
    var marital=document.getElementById("marital").options.selectedIndex;
    var job=document.getElementById("job").options.selectedIndex;
    var home_add = document.getElementById('home_add');
    var phone = document.getElementById('phone');
    var nationalid = document.getElementById('nationalid');
        //employee number validation
        if(fname.value==""){ //check if first name field is empty
        alert("please enter the First Name"); //error message alert
        document.getElementById("fname").focus();
        return false;
        }
        
        if(middlename.value==""){ //check if  middlename field is empty
        alert("please enter the middle name"); //error message alert
        document.getElementById("middlename").focus();
        return false;
        }
       
        if(surname.value==""){ // check if surname is empty  field
        alert("please enter the surname field"); //error message
        document.getElementById("surname").focus();
        return false;
        }
        //VALIDATE EMAIL FIELD
            var emailFormat = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        if(!email.value.match(emailFormat)){
            alert("Please enter a valid Email address"); //error message alert
        document.getElementById("email").focus();
        return false;
        }
         //username field validation
         if(username.value==""){//check if the username is provided
        alert("please enter the username");//error mesage alert
        document.getElementById("username").focus();
        return false;
        }
        //password field validation
        if(password.value==""){//check if the password is provided
        alert("please enter the password");//error mesage alert
        document.getElementById("password").focus();
        return false;
        }
        if(confPassword.value==""){ // check if the password is provided
        alert("please enter the confirm password field"); //error message alert
        document.getElementById("confPassword").focus();
        return false;
        }
         //Check if passwords match
        if(password.value !== confPassword.value){
        alert("Password Dont Match"); //error message alert
        document.getElementById("confPassword").focus();
        return false;
    }
        //gender selection validation
        if(gender==0){//check if the gender is selected
        alert("You Must Select the Gender"); //error message
        document.getElementById("gender").focus();
        return false;
        }
        //home address field validation
        if(home_add.value==""){//check if the home address is provided
        alert("please enter the your home address");//error mesage alert
        document.getElementById("home_add").focus();
        return false;
        }
        //phone number field validation
        if(phone.value==""){//check if the phone number is provided
        alert("please enter the phone number");//error mesage
        document.getElementById("phone").focus();
        return false;
        }
        //national id field validation
        if(nationalid.value==""){ // check if the national id is provided
        alert("please enter the your national ID"); //error message alert
        document.getElementById("nationalid").focus();
        return false;
        }
        //marital status selection validation
        if(marital==0){//check if marital status is selected
        alert("Please Select the Marital Status Field");//error message alert
        document.getElementById("marital").focus();
        return false;
        }
        if(job==0){//check if job position is selected
        alert("Please Select the job Field");//error message alert
        document.getElementById("job").focus();
        return false;
        }
        if(depts==0){//check if department code is selected
        alert("Please Select the department Field");//error message alert
        document.getElementById("dept").focus();
        return false;
        }
       return true;
        } 
        </script>

    <style>
        /* h4{
            color: rgb(38, 38, 38);
            font-family: 'Convergence', sans-serif;
            text-align: center;
        } */
        html{
            
            height: 100%;
            margin:0;
            padding:0
           
        }
        body{
            min-height: 100%;
            margin:0;
            padding:0;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color:#1DA1F2 ;
            position: sticky;
            
            left: 0;
            right: 0;
            height: 100px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
            
            width: 100%;
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
        table{
            margin: 80px;
            font-size: 100%;
            font-family: 'Convergence', sans-serif;
            font-weight: 400;
            color: rgb(38, 38, 38);
            background-color: white;

        }
        input{
            border-color: #1DA1F2;
            margin-top: 5px;
            border-radius: 12px;
            padding: 8px;
        }
        
       
        textarea:focus, input:focus{
        outline: none;
        border-color: #001F61;
        }
        input[type=radio]{
            cursor: pointer;
        }
        button{
            padding: 8px;
            font-size: 16px;
            cursor: pointer;
            background-color: #1DA1F2;
            border-radius: 12px;
            color: #fff;

        
        }
        select {border-color: #1DA1F2;
            margin-top: 5px;
            border-radius: 12px;
            padding: 8px;
            background-color: white;
            border-width: 2px;
        }
        textarea:focus, select:focus{
            outline: none;
        border-color: #001F61;

        }
        footer {
            background: #343a40;
            color: #fff;
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
    <body>
    <header>
        
  <nav>
      <ul><li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="loginForm.php">Login</a></li>
      
  </nav>
</header>
    <h4>Employee Form</h4>
    <form id="empForm" name="empForm"  method="post"  onsubmit="return checkForm()" >
        <table>
            <!-- Capture the county employee's names -->
    
            <tr><td>First Name:</td>
            <td><input type="text" name="fname" id="fname" placeholder="Enter your first name.."><div id="div1"></div></td>
            <td></td></tr>
            <!-- //capture middle name -->
            <tr>
                <td>Middle Name:</td>
                <td><input type="text" name="middlename" id="middlename" placeholder="Enter your second name..."><div id="div2"></div></td>
               
            </tr>
           
            <!-- capture surname -->
            <tr>
                <td>Surname:</td>
            <td><input type="text" name="surname" id="surname" placeholder="Enter your surname..."><div id="div3"></div></td>
            
            </tr>
            
                <!-- capture email address-->
                
                <tr>
                <td>Email Address:</td>
                <td><input type="text" name="email" id="email"><div id="div5"></div><div id="div9"></div></td>
                
            </tr>
            
            <!-- capture username -->
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username" placeholder="e.g. janeNjeri1"><div id="div4" ></div></td>
            </tr>
            
            <!-- capture password -->
            
            <tr>
                <td>Password:</td>
            <td><input type="password" name="password" id="password" placeholder="Enter your password..."><div id="div6"></div><div id="div7"></div></td>
            </tr>
            <!-- capture confirm password -->
        <tr>
            <td>Confirm password:</td>
        <td><input type="password" name="confPassword" id="confPassword" placeholder="Confirm your password..."><div id="div8"></div><div id="div10"></div></td>
        </tr>
        <!-- select gender -->
        <tr>
            <td>Gender</td>
            <td>
            <select id="gender" name="gender" >
                    <option value="">Choose Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
            </td>
    </tr>
        <tr>
            <td>Date of birth(DOB):</td>
            <td><input type="text" name="dob" onmouseout=validateDate(); id="dob"><div id="div17"></div><div id="div18"></div><div id="div19"></div></td>
        </tr>
        <!-- Home address and phone number -->
        <tr><td>Home Address:</td>
        <td><input type="text" name="home_add" id="home_add" placeholder="e.g. P.O. Box 1234"><div id="div13"></div></td>
        </tr>
        <tr>
            <!-- capture phone address -->
            <td>Phone No.</td>
            <td><input type="text" name="phone" id="phone" placeholder="0712345678"><div id="div14"></div></td>
        </tr>
        <tr>
            <!-- National ID of the employee -->
            <td>National ID</td>
            <td><input type="text" name="nationalid" id="nationalid" ><div id="div15"></div></td>
        </tr>
        <tr>
            <td>Marital status:</td>
            <td>
            <select id="marital" name="marital" >
                    <option value="">Choose The Marital Status</option>
                    <option value="Married">Married</option>
                    <option value="Single">Single</option>
                    <option value="Divorced">Divorced</option>
                </select><br>
            </td>
            </tr>
           
            <tr>
                <!-- capture the job position -->
                <td>Job position</td>
                
                <td> 
                <select name="job" id ="job"> 
                    <option value=""disabled selected hidden>Select job position..</option>
                    <option value="Department Manager"> Department Manager</option>
                    <option  value="Senior Accountant"> Senior Accountant</option>
                    <option value="Chief Finance officer">Chief Finance officer</option>

                </select></td>
            </tr>
            <tr>
                <!-- capture the job position -->
                <td>Department</td>
                
                <td>
                <select name="dept" id="dept">
                <option disabled>Choose your Department</option>
                <?php
                $seldept="select * from department";
                $run_seldept=mysqli_query($con, $seldept);
                while($value=mysqli_fetch_array($run_seldept)){
                    echo "<option value='".$value['dept_code']."'>".$value['dept_code']."</option>";//display the values
                }
                ?>
            </select>
                
            </td>
            </tr>
            <br><br>
            <!-- Submit button   -->
            <tr>
                          <td><button type="submit" name="submit" value="submit" >Register</button></td>
        </tr>
            
        </table>
    </form>
    
        
</body>
<footer>
    
   
    &copy; Copyright 2022 - Budget Management System Kenya
    

</footer>
</html>
 <?php


if(isset($_POST['submit'])){

    $fname =  mysqli_real_escape_string($con, $_POST['fname']);
    $mName =  mysqli_real_escape_string($con, $_POST['middlename']);
    $surname =  mysqli_real_escape_string($con, $_POST['surname']);
    $emailadd =  mysqli_real_escape_string($con, $_POST['email']);
    $username =  mysqli_real_escape_string($con, $_POST['username']);
    $password =  mysqli_real_escape_string($con, $_POST['password']);
    $confPassword =  mysqli_real_escape_string($con, $_POST['confPassword']);
    $gender =  mysqli_real_escape_string($con, $_POST['gender']);
    $dob =  mysqli_real_escape_string($con, $_POST['dob']);
    $home_add =  mysqli_real_escape_string($con, $_POST['home_add']);
    $phone =  mysqli_real_escape_string($con, $_POST['phone']);
    $national =  mysqli_real_escape_string($con, $_POST['nationalid']);
    $marital =  mysqli_real_escape_string($con, $_POST['marital']);
    $job =  mysqli_real_escape_string($con, $_POST['job']);
    $dept= mysqli_real_escape_string($con, $_POST['dept']);
    $hashed_passwd = password_hash($password, PASSWORD_DEFAULT);//php function which can salt and hash a password
    $hashed_confpasswd = password_hash($confPassword, PASSWORD_DEFAULT);
//check if user already exists
$sel_user="SELECT * FROM employee where email='$emailadd'";
$run_seluser=mysqli_query($con, $sel_user);
$checkemployee=mysqli_num_rows($run_seluser);
if($checkemployee>0){
    echo "<script>alert('employee information already exist')</script>";
}
else{
    // if the user does not already exist insert data into table within database
    // $sql = "INSERT INTO employee
    // (fname, middlename, surname, email, username, password, gender, dob, home_add, phone, nationalid, maritalStatus, job,dept_code)
    // VALUES
    // ('$fname', '$mName', '$surname', '$emailadd', '$username', '$hashed_passwd', '$gender', '$dob', '$home_add', '$phone', '$national', '$marital', '$job','$dept')";
    //prepare an insert statement
    $sql = "INSERT INTO employee
    (fname, middlename, surname, email, username, password, gender, dob, home_add, phone, nationalid, maritalStatus, job, dept_code)
    VALUES
    (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssssssssiisss", $fname, $mName, $surname, $emailadd, $username, $hashed_passwd, $gender, $dob, $home_add, $phone, $national, $marital, $job, $dept);
    //execute statement to insert row
   $run_execute = mysqli_stmt_execute($stmt);
    // $run_sql=mysqli_query($con, $sql);
    if($run_execute){
        echo "<script>alert('employee information inserted successful')</script>";
        echo "<script>window.open('loginForm.php','_self')</script>";
    }
}
// Close statement
mysqli_stmt_close($stmt);
// Close connection
mysqli_close($con);
}
?>

  
