<?PHP
	require 'core/init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?PHP  echo getTitle(); echo getTagline(); ?></title>
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="left">
				<div class="logo">
					<a href="index.php">
						<?php echo getTitle(); ?>
					</a>
				</div>
			</div>
			<div class="right">
				<div class="login-link">
					Already a member? <a href="login.php">sign in</a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="main-body">
		<div class="container">
			<div class="left">
				<div class="form-box">
					<div class="center">
						<div class="title">
							Register a free account
						</div>
					</div>
					<form action="r.php" method="POST">
						<div class="field">
							<label for="fname">First Name :</label>
							<input type="text" name="fname" id="fname" class="form-control"  onblur="validate()">
						</div>
						<div class="field">
							<label for="lname">Last Name :</label>
							<input type="text" name="lname" id="lname" class="form-control">
						</div>
						<div class="field">
							<label for="username">Username :</label>
							<input type="text" name="username" id="username" class="form-control">
						</div>
						<div class="field">
							<label for="password">Password :</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						<div class="field">
							<label for="cnf_password">Confirm Password :</label>
							<input type="password" name="cnf_password" id="cnf_password" class="form-control">
						</div>
						<div class="field">
							<label for="phone">Contact Number :</label>
							<input type="text" name="phone" id="phone" class="form-control">
						</div>
						<div class="field">
							<div class="center">
								<button class="btn btn-warning"> Create an account</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	<?php echo getTitle(); ?> &copy; 2015
	</div>
</body>
</html>
