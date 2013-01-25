<?php
	session_start(); 
//session_destroy();
	$displayerSelector = "";
	if(isset($_SESSION['username'])){
		$sessionName = $_SESSION['username'];//This line is used for the cart.php
		echo "<p>Welcome ".$_SESSION['username']."!!  ";
		echo '<sub> <small>Not '.$_SESSION['username'].'?? Click <a href="/admin/logout.php">to Logout</a></sub></small></p> ';
	}else{
		$sessionName = 'Guest';
		echo "<p>Welcome Guest!  ";
		echo '<sub><small>Why not <a href="http://localhost/447967/index.php">Log in</a></sub></small>?</p> ';
	}
	require 'cms/databaseCreator.php';
?>
<html>
	<body>
		<img class="left" src="images/LBrush.png" alt="Left brush image not available">
		<img class="center" src="images/Logo.png"  alt="Logo image not available">
		<img class="right" src="images/RBrush.png" alt="Right brush image not available">
		
		<div id="wrapper">
			<!--This part does the styles switcher-->
			<div id="navigation">
					<p id="topOfPage">Different Views:<span class="noprint"> 
						<a href="#" onclick="setActiveStyleSheet('Main'); return false;" title="Default Purple Style">Default</a> |
						<a href="#" onclick="setActiveStyleSheet('High Contrast'); return false;" title="Black &amp; White">High contrast</a></span>
					</p>
			</div> 	<!--End of Navigation-->
			<div id="right">
				<a class="login" href="login.php">Login/Register</a>
				<!-- This is gonna create the database-->
				<?php databaseCreator(); ?>
				
				
			</div>
		</div>

		<body>
	
</html>
