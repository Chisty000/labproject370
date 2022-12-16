<?php
session_start();

	include("classes/connect.php");
	include("classes/login_admin.php");

	$email = "";
	$password = "";
	

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$login = new Login_admin();
		$result = $login->evaluate($_POST);

		if($result != "")
		{

			echo "<div style='text-align:center; font-size: 12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";	
		}else
		{
			header("Location: admin_panel.php");
			die;
		}

		$email = $_POST['email'];
		$password = $_POST['password'];
		
		

	}


	
?>

<html> 

<head>
	<title>Admin | Log in</title>

	</head>

	<style >

		#bar{
			height:100px;
			background-color: #3c5a99;
			color: #d9dfeb;
			padding: 4px;
			}

			

			#bar2{

				background-color: white;
				width: 800px;
				height: 200px;
				margin: auto;
				margin-top: 50px;
				padding: 10px;
				padding-top: 50px;
				text-align: center;
				font-weight: bold;
				padding-bottom: 50px;



			}

			#text{
				height: 40px;
				width: 300px;
				border-radius: 4px;
				border:solid 1px #ccc;
				padding: 4px;
				font-size: 14px;


			}

			#button{
				width: 300px;
				height: 40px;
				border-radius: 4px;
				font-weight: bold;
				border: none;
				background-color: #3c5a99;
				color: white;

			
			}

		

			

			

	</style>




<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin | Login </title>
    <link rel="stylesheet" href="admin_signup.css">
  </head>
  <body>
    <div class="center">
      <h1>ADMIN Login</h1>
      <form method="post">
        <div class="txt_field">
          <input name="email" type="text" >
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input name="password" type="password" >
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup_admin.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
