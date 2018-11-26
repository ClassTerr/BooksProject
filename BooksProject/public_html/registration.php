<html>

<head lang="en">
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="bootstrap\css\bootstrap.css">
	<title>Registration</title>
</head>
<style>
	.login-panel {
		margin-top: 150px;
	}
</style>

<body>

	<div class="container">
		<!-- container class is used to centered  the body of the browser with some decent width-->
		<div class="row">
			<!-- row class is used for grid system in Bootstrap-->
			<div class="col-md-4 col-md-offset-4">
				<!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
				<div class="login-panel panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Registration</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="registration.php">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="name" type="text" autofocus>
								</div>

								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="pass" type="password" value="">
								</div>


								<input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register">

							</fieldset>
						</form>
						<center>
							<b>Already registered ?</b>
							<br>
							</b>
							<a href="login.php">Login here</a>
						</center>
						<!--for centered text-->
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>

<?php

include_once '../resources/config.php';
$dbcon = OpenDb();

if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }

    
//here query check weather if user already registered so can't register again.
    $check_email_query = "select * from users WHERE user_email=?";
    $stmt = $dbcon->prepare($check_email_query);
    
    $stmt->bind_param("s", $user_email);
    
    $stmt->execute();

    $user = $stmt->fetch();

    if($user != null)
    {
        echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
        exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE (?, ?, ?)";
    $stmt = $dbcon->prepare($insert_user);
    
    $stmt->bind_param("sss", $user_name, $user_pass, $user_email);
    
    if($stmt->execute())
    {
        session_start();
        session_destroy();
        session_start();
        $_SESSION['email'] = $user_email;
        header("Location: books.php");
    }
    else {
        echo "<script>alert('Creating account error')</script>";
    }

}

