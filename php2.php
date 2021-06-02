<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
html{
  background-color: black;
}
table{
  width:100%;
  table-layout: fixed;
  background-color: black;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 20px solid rgba(255,255,255,0.3);
}
th{
  border: 2px solid white;
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border: 2px solid rgba(255,255,255,0.1);
}






  header{
      background-image: linear-gradient(rgba(0,0,0,1),rgba(0,0,0,0)), url(home-banner.jpg);
      height: 10%;
      background-size: cover;
      background-position: center;
      margin-left: 0px;
      width: 100%;


    }
  .logo img{
        float: left;
        width: 150px;
        height: auto;
    }
  .new ul {
      float: right;
      list-style-type: none;
      margin-top: 25px;
    }

  .new ul li {
      display: inline-block;
    }

    ul li a {
      text-decoration: none;
      color: #fff;
      padding: 5px 20px;
      border: 1px solid transparent;
      transition: 0.6s ease;
    }

    ul li a:hover{
      background-color: #fff;
      color: #000;
    }

    ul li.active a{
      background-color: #fff;
      color: #000;
    }


</style>
</head>
<body>
  <header class="header">
              <div class="logo">
                  <img src="logo.png">
              </div>
              <div class="new">
              <ul>

                      <li><a href="home.html">HOME</a></li>
                      <li><a href="login.html">LOG IN</a></li>
                      <li><a href="aboutus.html">ABOUT US</a></li>
                      <li><a href="events.html">EVENTS</a></li>
                      <li><a href="contactus.html">CONTACT US</a></li>
                    </ul>
                  </div>
  </header>



<br>
<br>
<table>
<tr>
  <th>Name</th>
  <th>College Name</th>
  <th>Sex</th>
  <th>Event</th>
  <th>Email</th>
  <th>Password</th>
</tr>
<?php
$email=$_POST["email"];
$con = mysqli_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
 }
mysqli_select_db($con,'kiran');
$sql=mysqli_query($con,"SELECT * from form where email='$email'");
 if($sql)
 {
   while ($row=mysqli_fetch_row($sql)){
echo "<tr><td>" . $row[0]. "</td><td>" . $row[1] . "</td><td>"
. $row[2]. "</td>6<td>" . $row[3]. "</td><td>" . $row[4]. "</td><td>" . $row[5]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
mysqli_close($con);
?>
</table>
</body>
</html>
