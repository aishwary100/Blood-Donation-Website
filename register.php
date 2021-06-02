<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$email=$_POST["email"];
$pass=$_POST["psw"];
$con=mysqli_connect("localhost","root","");
if(!$con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,"user_info");
$result=mysqli_query($con,"SELECT * from user_info where email='$email'");
$count1=mysqli_num_rows($result);
if($count1==1)
{
    Echo "ACCOUNT ALREADY EXISTS";
    mysqli_close($con);
    die();
}

$result2=mysqli_query($con,"INSERT INTO user_info (fname, lname, age, email, pass) VALUES ('$fname','$lname','$age','$email','$pass')");
if($result2)
{
Echo "Record successfully inserted";
}
else
{
Echo "There is some problem in inserting record";
}

?>    