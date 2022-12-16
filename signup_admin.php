<?php
    include("classes/connect.php");
    include("classes/signup_admin.php");
     
    
    $name = "";
    $email = "";
    $contact = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup_admin();
        $result = $signup->evaluate($_POST);

        if($result != ""){
            
            echo "<div style='text-align:center; font-size: 12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
        }else{

            header("Location: login_admin.php");
            die;
        }

        $name = $_POST['name'];
        $email =$_POST['email'] ;
        $contact = $_POST['contact'];
    
        
    }

   

?>
<html>
    <head> 
    <meta charset="utf-8">
        <title>Admin | Sign up</title>
        <link rel="stylesheet" href="admin_signup.css"/>
    <body>
        
        <div class="center">
        <h1>ADMIN Registration</h1>
        <form method="post" action="" >
        <div class="txt_field">
        <input value="<?php echo $name ?>" name="name" type="text"  >
          <label>Fullname</label>
        </div>
        <div class="txt_field">
        <input value="<?php echo $email ?>" name="email" type="text"  >
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
        <input value="<?php echo $contact ?>" name="contact" type="text" >
          <span></span>
          <label>Contact</label>
        </div>
        <div class="txt_field">
        <input name="password" type="password"  >
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="SignUp">
        <div class="signup_link">
         Already a member? <a href="login_admin.php">Login</a>
        </div>
            
        </form>
        </div>
        
          
    
        </body>


    </head>

    </html>
