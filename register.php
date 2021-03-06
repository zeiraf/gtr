<!DOCTYPE>
<lang="en"/>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GTR Collection</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="css/full.css">
	<link rel="stylesheet" href="css/register.css">
  </head>
<body id="LoginForm">
<div class="container">
		  <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.html">The G.T.R Collection</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="index.html">Home</a></li>
			  <li><a href="oldschool.php">GTR-OLD-SCHOOL</a></li>
			  <li><a href="R34.php">GTR-R34</a></li>
			  <li><a href="R35.php">GTR-R35</a></li>
			  <li><a href="others.php">GTR-Fun-Land</a></li>
			  <li><a href="php/upload.php">Upload</a></li>
			  <form class="navbar-form navbar-left">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
	</div>
	<div class="login-form">
	<div class="main-div">
    <div class="signup-form">
    <form action="confirmation.php" method="post">
		<h2>Register</h2>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Log in</a></div>
</div>
</div>
</div>

</body>
</html>
