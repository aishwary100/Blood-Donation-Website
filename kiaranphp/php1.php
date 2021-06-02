<?php
$name=$_POST['name'];
$college_name=$_POST['address'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$email=$_POST['email'];
$password=$_POST['password'];
$con = mysqli_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
 }
mysqli_select_db($con,'kiran');
mysqli_query($con,
"INSERT INTO form (name, college_name, sex, event, email, password) VALUES ('$name', '$college_name', '$gender', '$course', '$email', '$password')");
mysqli_close($con);
header("Location: events.html");
 ?>
