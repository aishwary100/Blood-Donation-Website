<?php
$email=$_POST['email'];
$ndate=$_POST['newdate'];
$ntime=$_POST['newtime'];
$con = mysqli_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
 }
mysqli_select_db($con,'project');
$odate=mysqli_query($con,"SELECT * FROM donation where email='$email'");
$row = mysqli_fetch_array($odate);

$otime=mysqli_query($con,"SELECT donation_time FROM donation where email='$email'");
mysqli_query($con,
"INSERT INTO reshedule(old_donation_date,new_donation_date,old_donation_time,new_donation_time,email) VALUES ('$row["donation_date"]', '$ndate', '$row["donation_time"]', '$ntime','$email')");
mysqli_close($con);
header("Location: main.html");
 ?>
