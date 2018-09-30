<!DOCTYPE.html>
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
	

  </head>

 <body>
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
	<?php
		
		include ("php/connexion.php");
		$query = "SELECT * FROM pictures WHERE img_cat = 'GTR-Fun-Land'";
		$res = mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
			echo "<div><a href='php/aff.php?id=".$row['img_id']."\'><img src=\"php/aff.php?id=".$row['img_id']."\" /></a></div>";
		}
	?>
    <!-- Page Content -->
</body>