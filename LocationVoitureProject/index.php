
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    
    <link  rel="stylesheet" href="css/style1.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }



                



            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







?>

    
<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="aboutus.html">ABOUT</a>
  <a href="services.html">SERVICES</a>
  <a href="contactus.html">CONTACT</a>
  <a href="adminlogin.php" class="admin-link">ADMIN LOGIN</a>
</div>

    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" name="email" class="login__input" placeholder="Enter Email Here">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pass" class="login__input" placeholder="Enter Password Here">
				</div>
                <input class="button login__submit" type="submit" value="Login" name="login"></input>
    
			</form>
			<div class="social-login">
				<h3>Don't have an account?</h3>
                <a href="register.php">Sign up</a> here</a></p>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>

</html>
