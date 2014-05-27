<!-- login page -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inventory</title>
		<!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="js/respond.js"></script>
	</head>
	<body>
		<div class="container">
		    <!-- row 1 -->
		    <header class="row">
			    <div class="col-md-6">
			    	<h1>Inventory</h1>
			    </div>
			</header>
		    <!-- row 2 -->
		    <div class="row">
				<div class="col-md-6">
					<h2>Login</h2>
				</div>
				
			</div>
			<!-- row 3 -->
			<div class="row">
				<div class="col-md-6">
					<p><?php echo $error;?></p>
					<form action="index.php" method="POST">
					Email: <input type="email" name="email"><br/><br/>
					Password: <input type="password" name="password"><br/><br/>
					<input type="submit" name="submit" value="Login">
					</form>
			    </div>
			   <div class="col-md-4">
					<p>With Inventory you can keep track of the products in your business! Simply create a business category and add your items. Then you can update the items and their quantities with ease!</p>
					<p>Don't have an account yet? Go ahead and click Register to get started!</p>
					<form action='index.php'method='GET'>
						<input type="submit" name="register" value="Register">
					</form>
				</div>	
		    </div>
		    
		</div> <!-- end container -->
		<!-- javascript -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>