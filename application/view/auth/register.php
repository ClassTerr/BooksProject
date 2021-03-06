<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sign Up</title>
	<link rel="stylesheet" href=<?=URL . "/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" ?>>
	<link rel="stylesheet" href=<?=URL . "/web/css/styles.css" ?>>

</head>

<body class="register">
	<div class="container">
		<div class="row">
			<div class="col-md-6 book-image" style='background-image: url(<?=URL . "img/landing-book-3.png"?>);'></div>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 center-block">
								<h4 id="login-form-link">Sign Up</h4>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<?php if (!empty($errors)): ?>
								<p class="alert alert-danger">
									<?php foreach ($errors as $error): ?>
									<?= $error . "<br>" ?>
									<?php endforeach; ?>
								</p>
								<?php endif; ?>
								<form id="register-form" name="registerForm" action=<?=URL . "auth/register" ?> method="post">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" class="form-control" value="<?= isset($_POST['email']) ? Helper::safeInput($_POST['email']) : '' ?>"
										 placeholder="Your Email" required>
									</div>
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" name="username" id="username" class="form-control" value="<?= isset($_POST['username']) ? Helper::safeInput($_POST['username']) : '' ?>"
										 placeholder="Username" required>
									</div>
									<div class="form-group">
										<label for="name">Full Name</label>
										<input type="text" name="name" id="name" class="form-control" value="<?= isset($_POST['name']) ? Helper::safeInput($_POST['name']) : '' ?>"
										 placeholder="Your Full Name" required>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<label for="date">Date Of Birth</label>
										<input type="date" name="birth" id="birth" class="form-control" value="<?= isset($_POST['birth']) ? Helper::safeInput($_POST['birth']) : '' ?>"
										 placeholder="Confirm Password" required>
									</div>
									<div class="form-group ">
										<div class="checkbox">
											<label>
												<input type="checkbox" required>I agree with terms and conditions
											</label>
										</div>
									</div>
									<button type="submit" name="register" class="btn btn-success center-block">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>