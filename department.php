<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<p> DEPARTMENT page</p>
<form id="deptForm" name="deptForm" method="post">
        <table>
            <tr>
                <td>Department code: </td>
                <td><select name="dept_code" id="dept_code">
            <option value= "" disabled selected hidden>Enter the department code"</option>
            <option value="R311-04">R311-04</option>
            <option value="R311-05">R311-05</option>
            <option value="R311-06">R311-06</option>
            <option value="R311-07">R311-07</option>
            <option value="R311-08">R311-08</option>
            <option value="R311-09">R311-09</option>
            <option value="R311-10">R311-10</option>
            <option value="R311-11">R311-11</option>
            <option value="R311-12">R311-12</option>
            <option value="R311-13">R311-13</option>
            <option value="R311-14">R311-14</option>
            <option value="R311-15">R311-15</option>
            <option value="R311-16">R311-16</option>
            <option value="R311-17">R311-17</option>
            <option value="R311-18">R311-18</option>
            <option value="R311-19">R311-19</option>
            <option value="R311-20">R311-20</option>
            <option value="R311-21">R311-21</option>
            <option value="R311-22">R311-22</option>
           

    </select>
                </td>
            </tr>
            <tr>
                <td>Department name:</td>
                <td><input type="text" name="dept_name" id="dept_name" placeholder="Enter the department name"></td>
            </tr>
            <td>Department head:</td>
            <td><input type="text" name="dept_head" id="dept_head" placeholder="Enter name of department head"></td>
            <tr>
                <td>Select Department</td>
                <td>
                <select name="dept" > 
               <option value="" disabled selected hidden>Choose Department...</option>
                    <option value="Health"> </option>
                    <option value="Agriculture"> County division for food,agriculture and forestry</option>
                    <option value="Livestock"> County division for Livestock</option>
                    <option value="Fisheries"> County division for Fisheries</option>
                    <option value="Water and sanitation"> County division for water and sanitation</option>
                    <option value="Education"> County Division for Education</option>
                    <option value="ICT"> County Division for Information Communication and Technology</option>
                    <option value="Medical services">County Division for Medical service</option>
                    <option value="Public Health">County Division for Public Health</option>
                    <option value="Physical Planning">County Division for Physical Planning, Urban Development and Housing </option>
                    <option value="Gender">Gender, Culture, Social services and Sports</option>
                    <option value="Cooperative Development">County Division for Cooperative Development</option>


                    <option value="Environment"> County Division for Enviroment, Natural Resources and Wildlife </option>
                    <option value="Finance">County Division for Finance</option> 
                    <option value="Economic planning">County Division for Economic planning</option>
                    <option value="Roads">Roads, public works and transport</option>
                    <option value="Public Service Board">Public Service Board</option>
                    <option value="Trade & Tourism">County Division for Trade & Tourism</option>
                    <option value="Devolution">Devolution, public service and Disaster Management</option>
                    <option value="Lands & Energy">County Division for Lands and Energy</option>
                    <option value="security">Security</option>
                </select></td>
                <tr>
            <tr>
                <td><button type="submit" name="submit" value="Submit">Submit</button></button></td>

            </tr>
            
        </table>
<?php

$server="localhost";
$user="apeyon";
$password="QWERTY@12345";
$dbname="county";
$con = mysqli_connect($server, $user, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: ");
    
}
echo"connection";

if(isset($_POST['submit'])){
    $deptcode = $_POST['dept_code'];
    $deptname = $_POST['dept_name'];
    $depthead = $_POST['dept_head'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO department (dept_code, dept_name, dept_head, dept) 
    VALUES('$deptcode', '$deptname', '$depthead', '$dept')";
    $run_sql=mysqli_query($con, $sql);
    if($run_sql === TRUE){
        echo "<script>alert('department information inserted successful')</script>";
        
    }
    else{
        echo"Error when inserting department details ";
    }






}
?>