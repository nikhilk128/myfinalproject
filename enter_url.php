<?php
session_start();
error_reporting(0);
echo "<p align='right'><b>welcome ".$_SESSION['user']."&nbsp&nbsp&nbsp";
echo "<a href='logout.php'>Logout</a></p>";
$userprofile = $_SESSION['user'];
if($userprofile==true)
{

}
else
{
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="icon" href="aktu_logo.png" sizes="32x32" />
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: #2f4353;
  background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

h1,h2 {
  font-size: 1.5em;
  text-align: center;
  color: #696969;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}
</style>
    <title>Enter url</title>
</head>
</p>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">HOME</a>
  <a href="data_analysis.php">SUBJECT ANALYSIS</a>
  <a href="data_display.php">STUDENT ANALYSIS</a>
  <a href="logout.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<center>
<br><br><br><br>

    <div class="form" style="background-color:">
        <h2 style="font-family: sans-serif">Click on the button below to open AKTU website</h2>
        <form action="https://erp.aktu.ac.in/WebPages/OneView/OneView.aspx" target="_blank";return false;>
    	<input type="submit" value="AKTU One View" style="width: 230px; height:30px; color: grey"/>
		</form>
        <br><br>
        <h2>SELECT SECTION</h2>
        <form action="data_fetching_demo.py " method="post"align="center">
          <br><br>  <b style="color: #023333 ; font-size: 40px">A</b><input type="radio" value="A" name = "section" required> <b style="color: #023333; font-size: 40px">B</b><input type="radio" value="B" name = "section"> <b style="color: #023333; font-size: 40px">C</b><input type="radio" value="C" name = "section"> <b style="color: #023333; font-size: 40px">D</b><input type="radio" value="D" name = "section">
            <br><br><button style="width: 230px; height:30px">Fetch Data</button>
        </form>
<br><br>

    </div>
</center>

</body>
</html>

