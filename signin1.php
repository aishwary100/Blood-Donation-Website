<?php
    $email= $_POST['email'];
    $dob= $_POST['dob'];

    $con=mysqli_connect("localhost","root","");
    if(!$con){

        die("could not connect".mysql_error());
    }
    mysqli_select_db($con,"project");
    $result=mysqli_query($con,"SELECT * FROM donar where email='$email' AND dob='$dob'");
    $row=mysqli_fetch_array($result);
    if($row)
    {
        header('Location: main.html');
    }
    else
    {
        header('Location: signin.html');
    }
    mysqli_close($con);
    ?>
