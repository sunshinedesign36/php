<!-- navigation -->

<div class="row">
	<nav class="nav nav-tabs">
		<!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-arrow-down"></span>
                  MENU
                </button>
        </div>
		<div class="collapse navbar-collapse" id="collapse"> -->
            <ul class="nav nav-tabs">
			<?php
			if ($_SESSION['loggedin'] == 'yes') {
				echo '<li><a href="index.php?action=select">Select Business</a></li>
				<li><a href="logout.php">Logout</a></li>';
			}
			else {
				echo '<li><a href="welcome.php">Home</a></li>
				<li><a href="login.php">Login</a></li>';
			}
			?>
			</ul>
		<!-- </div> -->
	</nav>
</div>