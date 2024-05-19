<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
             box-sizing: border-box; /* with and height properties includes content, padding and border */
        }
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
            margin-left: 200px;
            

        }
        header li a{
            color: rgb(255, 255, 255);
            /* text decoration is the line under the text  so we remove that to none */
            text-decoration: none;
           font-weight: bold;
            margin-right: 10px;
            /* spacing between the nav links */
            font-size: 20px;


        }
        footer {
            background: rgb(52, 58, 64);
            color: rgb(255, 255, 255);
            height: 45px;
            text-align: center;
            
            bottom: 0px;/*positioning the footer at the bottom of the page*/
            left: 0px;/*positioning the footer at the left of the page*/
            padding-top: 20px;/*spacing between the footer and the top line of the footer-bottom element*/
            width: 100%;/*width of the footer*/
           margin-top: auto;
           opacity: 90%;
        }
        .quote{
            display: flex;
    flex-direction: column;
    position: absolute;
left: 40%;
top: 5%;
  width: 50%;
  padding: 0 10px;
        }
        h1{
            color: white;
            font-family: cursive;
            font-weight: bold;
            margin-top: 350px;
            margin-right: 150px;

            

        }
        
    </style>
</head>
<body>
    <header>
        
    <nav>
        <ul><li class="active"><a href="index.php">Home</a></li>
      
        <li><a href="loginForm.php">Login</a></li>
        <li><a href="employeeForm.php">Create Account</a></li></ul>
        <li><a href="aboutus.php"> About us</a></li></ul>

    </nav>
</header>
<div class="quote">
    <h1>"A budget is telling your money where to go instead of wondering where it went."
        ~Dave Ramsey
    </h1>
    </div>
</body>
<footer>
    
   
    &copy; Copyright 2022 - Budget Management System Kenya - 1029701
    

</footer>
</html>