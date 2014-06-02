<!-- Inventory Form -->
<?php
session_start(); 
$busName = $_SESSION['busName'];
$items = $_SESSION['items'];

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
			    	<h1>Inventory App</h1>
			    </div>
			</header>
			<?php include 'nav.php';?>
		    <!-- row 3 -->
		    <div class="row">
				<div class="col-md-6">
					<h2>Your Business: <?php echo $busName;?></h2>
			    </div>
			    <div class="col-md-6">
					
			    </div>
		    </div>
		    <!-- row 4 -->
		    <div class="row">
				<div class="col-md-6">
			    	<h3>Your Items: </h3>
			    	<?php 
			    	foreach($updated as $value){
			    		echo "$value<br/>";
			    	}
			    	echo $error;
			    	echo '<form action="index.php" method="POST">';
			    	
			    	foreach ($items as $value) {
			    	 	echo $value['name'] .":  <input type='text' name='$value[productId]' value='$value[quantity]'>".'<br/><br/>';
			    	 } 
			    	 ?>
			    	 
			    	 <input type="submit" name="submit" value="Update Inventory">
			    	 </form>
			    </div>
			    <div class="col-md-6">
			    </div>
		    </div>
		    </div> <!-- end container -->
		<!-- javascript -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>