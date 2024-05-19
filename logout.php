<?php
session_start();
unset($_SESSION["emp_id"]);
unset($_SESSION["dept_code"]);
header("Location:loginForm.php");
?>