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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="../css/up.css">
	<script src="../js/up.js"></script>
	
	

  </head>

 <body>
	<div class="container">
		  <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="index.html">The G.T.R Collection</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="../index.html">Home</a></li>
			  <li><a href="../oldschool.php">GTR-OLD-SCHOOL</a></li>
			  <li><a href="../R34.php">GTR-R34</a></li>
			  <li><a href="../R35.php">GTR-R35</a></li>
			  <li><a href="../others.php">GTR-Fun-Land</a></li>
			  <li><a href="../php/upload.php">Upload</a></li>
			  <form class="navbar-form navbar-left">
			  <div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="../register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
	</div>
	
	<?php
         include ("trans.php");
         if ( isset($_FILES['fic'], $_POST['cat']))
		 {
			 if(!empty($_POST['cat']))
         {
             transfert();
         }
		 }
      ?>
	  

<form enctype="multipart/form-data" action="#" method="post">
	<div class="container">
		<div class="col-md-6">
			<div class="form-group">
				<label>Upload Image</label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse… <input type="file" name=fic size=50 id="imgInp">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
					<img id='img-upload'/>
					GTR-OLD-SCHOOL<input type="radio" name="cat" value="GTR-OLD-SCHOOL">
					GTR-R34<input type="radio" name="cat" value="GTR-R34">
					GTR-R35<input type="radio" name="cat" value="GTR-R35">
					GTR-Fun-Land<input type="radio" name="cat" value="GTR-Fun-Land">
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input type="submit" name="submit" class="btn btn-info" value="Send">
			</div>
		</div>
	</div>
</form>
    <!-- Page Content -->
</body>