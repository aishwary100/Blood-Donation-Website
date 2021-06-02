<?php
$name=$_POST["name"];
$gen=$_POST["gen"];
$add=$_POST["address"];
$mobile=$_POST["phone"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$con=mysqli_connect("localhost","root","");
if(!$con)
{
    die('Connection Failed'.mysql_error());
}
mysqli_select_db($con,"project");
$result=mysqli_query($con,"SELECT * from donar where email='$email'");
$count1=mysqli_num_rows($result);
if($count1 == 1)
{
    Echo "ACCOUNT ALREADY EXISTS";
   
    die();

     mysqli_close($con);
}
$result2=mysqli_query($con,"INSERT INTO  donar (name,dob,gender, email,phone,address) VALUES ('$name','$dob','$gen','$email','$mobile','$add')");
mysqli_close($con);
header("Location: main.html");
?>    