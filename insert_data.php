<?php
use PHPMailer\PHPMailer\PHPMailer;
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="result_demo";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("Connection failed");
if (isset($_POST['submit']))

	 {
	 	echo "harshit";

	 	$name = mysqli_real_escape_string($conn, $_POST['username']);

    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			//$ccode=$_POST['countryCode'];
			$//msg = mysqli_real_escape_string($conn, $_POST['msg']);
			$query_stat="INSERT INTO `query_data`(`name`, `email`, `mobile`, ) VALUES ('".$name."', '".$email."','".$mobile."')";
			echo $query_stat;
			
				mysqli_query($conn, $query_stat);
				echo "\n"+(mysqli_query($conn, $query_stat));
				if(mysqli_query($conn, $query_stat)){
					echo "success";
				require_once "PHPMailer/PHPMailer.php";
		        require_once "PHPMailer/SMTP.php";
		        require_once "PHPMailer/Exception.php";
		        $mail = new PHPMailer();

		        //SMTP Settings
		        $mail->isSMTP();
		        $mail->Host = "smtp.hostinger.in";
		        $mail->SMTPAuth = true;
		        $mail->Username = "info@kmideoli.in";
		        $mail->Password = 'pappu@123';
		        $mail->Port = 465; //587
		        $mail->SMTPSecure = "ssl"; //tls

		        //Email Settings
		        $mail->isHTML(true);	
		        $mail->setFrom("info@kmideoli.in", 'KIRAN MINERAL INDUSTRIES');
		        $mail->addAddress($email);
		        $mail->Subject = 'Verification' ;
		        $mail->Body = '
					 
					Thanks for Taking a Interest!
					We have got your query and we will be reaching you soon with the details provided by you!
					';

		        if ($mail->send()) {
		            $status = "success";
		            $response = "Email is sent!";
		        } else {
		            $status = "failed";
		            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
		        }
		        $mail_self = new PHPMailer();

		        //SMTP Settings
		        $mail_self->isSMTP();
		        $mail_self->Host = "smtp.hostinger.in";
		        $mail_self->SMTPAuth = true;
		        $mail_self->Username = "info@kmideoli.in";
		        $mail_self->Password = 'pappu@123';
		        $mail_self->Port = 465; //587
		        $mail_self->SMTPSecure = "ssl"; //tls

		        //Email Settings
		        $mail_self->isHTML(true);
		        $mail_self->setFrom("info@kmideoli.in", 'KIRAN MINERAL INDUSTRIES');
		        $mail_self->addAddress("info@kmideoli.in");
		        $mail_self->Subject = $name.'New Client Logged a Query' ;
		        
		        $mail_self->Body = '
					 
					New Client Has Taken Interest!<br Name :
					'.$name.'<br> Email : '.$email.'<br> Mobile : +'.strval($ccode).' '.$mobile.'<br>Message Query : '.$msg;

		        if ($mail_self->send()) {
		            $status = "success";
		            $response = "Email is sent!";
		        } else {
		            $status = "failed";
		            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
		        }
				}
			else{
					echo "harshit";
				}

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