<?php include 'db.php';
	session_start();

?>

<?php
	if(isset($_POST['login'])){
		$admin_name = mysqli_real_escape_string($_POST['admin_name']);
		$password = mysqli_real_escape_string($_POST['password']);

		$sel_user= "SELECT * FROM admin where admin_name='$admin_name' AND password='$password'";
		$run_user = mysqli_query($con, $sel_user);

		$check_user = mysqli_num_rows($run_user);

		if($check_user==1){
			$_SESSION['admin_name'] = $admin_name;
			echo "<script>window.open('AdminMenu.php?logged_in=You have sucessfully logged in! ','_self')</script>";
			
		} else{
			echo "<script>alert('Password or admin name incorrect') </script>";
		}

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>SBD_ Admin Login</title>
	<?php include 'includes/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			
										
			</div>
		</div>
	</nav>

<div class="adminLog">
	<h1>Admin Login</h1>
			<form method="post" action="AdminMenu.php">
				<input type="text" name="admin_name" placeholder=" Admin name" required="required"/>
				<input type="password" name="password" placeholder="password" required="required"/>
				<button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
						
			</form>
		</div>
</div>
</body>
</html>