<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
	$user_id = $_POST['user_id'];
	$result = mysqli_query($conn,"SELECT * FROM user where EMAIL='" . $_POST['user_id'] . "'");
	$row = mysqli_fetch_row($result);
	$fetch_user_id=$row[0];
	#$email_id=$row['email_id'];
	$password=$row[1];
	if($user_id==$fetch_user_id) {
		$to = $fetch_user_id;
		$subject = "Password";
		$txt = "Your password is : $password.";
		$headers = "From: nikhilk128@gmail.com" . "\r\n" .
		"CC: nikhilk128@gmail.com";
		if(mail($to,$subject,$txt,$headers))
		{
			echo "<p>Password is sent to you Email</p>";
		}
	}
	else{
		echo 'invalid userid';
	}


        // new code
        //$to_email = 'name @ company . com';
		//$subject = 'Testing PHP Mail';
		//$message = 'This mail is sent using the PHP mail function';
		//$headers = 'From: noreply @ company . com';
		//if(mail($to_email,$subject,$message,$headers))
		//{
		//	echo "<p>Password is sent to you Email</p>";
		//}


}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Forget Password</title>
<link rel="icon" href="aktu_logo.png" sizes="32x32" />
<style type="text/css">
 h1{
  color:grey;
  font-size:30px;
  text-align:center;
 }
body {
  background-color: #2f4353;
background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
  background-size: cover;
  background-attachment: fixed;
  font-family: 'Roboto', sans-serif;
}
input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: #708090;
  outline: none;
  border: 1px solid #708090;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 20%;
  margin: 2em 0;
  letter-spacing: 4px;
}
.form{
    position: relative;
    z-index: 1;
    background: rgba(0, 0, 0, 0.18);;
    max-width: 360px;
    padding: 45px;
    text-align: center;
}
input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #778899;
}
.form button{
    font-size: .9em;
  color: #fff;
  background: #708090;
  outline: none;
  border: 1px solid #708090;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
    }
    input[type="text"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #ffffff;
  font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit' style="width: 100% ;height:20%;" /></td></tr>
</table>
</form>
<form action="login.php" align='center'>
    <input type="submit" value="LOGIN Page" />
</form>
</body>
</html>