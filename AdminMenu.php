
<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php';?>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="HomeNav">
		<div class="container-fluid">	
 		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="about.php"><span class="glyphicon glyphicon-exclamation-sign"></span> About</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			
		      <ul class="nav navbar-nav navbar-right">
	 			<li><a href="logout.php" style="text-decoration:none">Logout</a></li>		
			 </ul>
												
			</div>
		</div>
	</nav>
<div id="menu">
	<a href="AddProduct.php">Add Product</a>
</div>




</body>
</html>