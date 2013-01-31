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
		<!--<div id="topBanner">
			<div id="leftImg"><img class="brush" src="images/LBrush.png" alt="Left brush image not available"></div>
			<div id="centerImg"><img class="logo" src="images/Logo.png"  alt="Logo image not available"></div>
			<div id="rightImg"><img class="brush" src="images/RBrush.png" alt="Right brush image not available"></div>
		</div>-->
		
		<table id="topBanner">
			<tr>
				<td align="left" width="30%"><img class="brush" src="images/LBrush.png" alt="Left brush image not available">
				</td>
				<td align="center" width="40%"><img class="logo" src="images/Logo.png"  alt="Logo image not available">
				</td>
				<td align="right" width="30%"><img class="brush" src="images/RBrush.png" alt="Right brush image not available">
				</td>
			</tr>
		</table>

		<div id="wrapper">
			<!--This part does the styles switcher-->
				<!--<div id="navigation">
					<p id="topOfPage">Different Views:<span class="noprint"> 
						<a href="#" onclick="setActiveStyleSheet('Main'); return false;" title="Default Purple Style">Default</a> |
						<a href="#" onclick="setActiveStyleSheet('High Contrast'); return false;" title="Black &amp; White">High contrast</a></span>
					</p>
			</div> End of Navigation-->
			<div id="right">
				<a class="login" href="login.php">Login/Register</a>
				<!-- -->
				<?php 
					//This is gonna create the database
					databaseCreator(); 
					
					//This will create the menu
					//$labels = array("HOME","MAKEUP BASICS","GALLERY","TUTORIALS");
					$labels = array("Home","MakeUp Basics","Gallery","Tutorials");
					$link = array("index","makeupBasics","gallery","tutorials");
					//$labels = array("","","","");
					$currentFile = $_SERVER["PHP_SELF"];
					$parts = Explode('/', $currentFile);
					//this will just take the name of the file   start  end
					$tabName =  substr($parts[count($parts) - 1],  0,   -4);
					echo '
						<div id="tabs">';
					
					for ($i=0; $i<=3; $i++){
					//echo $link[$i].'  '.$tabName;
						if (strcmp ($link[$i],$tabName) == 0){
							echo '<div id="selected">';
						} else {
							echo '<div id="noSelected">';
						}				
						echo '<a href="'.$link[$i].'.php?adminEntryVerified">'.$labels[$i].'</a></div>';
					 }	
					echo 	'<div id="noSelected">
								<div id="sForm">
										<!-- This is the search engine miniform-->
									<form action="../cms/search.php" method="GET">
												<input type="text" size="15" name="search">
												<input type="submit" name="submit" value="Search">
									</form>
								</div>
							</div>
					</div><!--tabs-->
						';/**/
				?>
				
				
			</div>
		</div>

		<body>
	
</html>
