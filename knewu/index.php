<?php require 'cms/sesionStarter.php'?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="Default-Style" content="Main">
	<title>kNewU</title>
	<!--This part does the styles switcher-->
	<link rel="stylesheet" type="text/css" title="Main" 
	href="css/main.css">
	<link rel="alternate stylesheet" type="text/css" title="High Contrast" 
	href="css/highContrast.css">
	<script type="text/javascript" src="../files/javascripts/styleswitcher.js"></script>
</head>

<body>
	

	<div id="wrapper">
		<!--Top Menu-->	
			<!--<div id="topMenu">	
				<div id="logoTop">
					<a>  <img src="images/icons/logo.png" width="40" height="45" alt="logo">	</a>
				</div>	
				<div id="loginNs">
					<a  href="login.html">	
					<img src="images/icons/login.png" width="30" height="30" alt="Login">	<br /> Log in 	</a>
				</div>     	 	
				<div id="activityNs">
					<a  href="activity.html">	
					<img src="images/icons/activity.png" width="30" height="30" alt="Activity"><br /> 	Activities </a>
				</div>	  	
				<div id="openingNs">
					<a  href="opening.html">
					<img src="images/icons/opening.png" width="30" height="30" alt="Opening"><br /> 	Opening </a>
				</div>  	
				<div id="menuNs">
					<a  href="menu.html">
					<img src="images/icons/menu.png" width="30" height="30" alt="Menu">	<br /> Menu</a>
				</div>		
				<div id="home">
					<a  href="index.html">
					<img src="images/icons/home.png" width="30" height="30" alt="Home">	<br /> Home </a>
				</div>	 
				   
			</div>-->

		<?php
			$labels = array("Home","MakeUp Basics","Gallery","Tutorials");
			$link = array("index","makeupBasics","gallery","tutorials");
			//$labels = array("","","","");
			$currentFile = $_SERVER["PHP_SELF"];
			$parts = Explode('/', $currentFile);
			//this will just take the name of the file   start  end
			$tabName =  substr($parts[count($parts) - 1],  0,   -4);
			/**/echo '
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
							<!-- This is the search engine miniform-->
						<form action="../cms/search.php" method="GET">
									<input type="text" size="15" name="search">
									<input type="submit" name="submit" value="Search">
						</form>
					</div>
			</div><!--tabs-->
				';/**/
			 
			
			echo $tabName;
			/*	echo '
			<div id="tabs"> 
				<ul>
					<li id="selected"><a href="../cms/index.php?adminEntryVerified">Home</a></li>
					<li><a href="../cms/viewProducts.php?adminEntryVerified">Makeup Basics</a></li>
					<li><a href="../cms/lowStockProducts.php?adminEntryVerified">Gallery</a></li>
					<li><a href="../cms/manageAdmin.php?adminEntryVerified">Tutorials</a></li>
					<li>
							<!-- This is the search engine miniform-->
						<form action="../cms/search.php" method="GET">
									<input type="text" size="15" name="search">
									<input type="submit" name="submit" value="Search">
						</form>
					</li>
				</ul>
			</div><!--tabs-->
				';*/

		?>
		<div id="content">

			<p>asdf
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				end
			</p>
		</div><!--content-->
	</div><!--wrapper-->
	
	<br>
	<br>
	<div id="footer">	
		<p><a>&copy; Ada Salazar 2011 - Present</a>
		&nbsp;|&nbsp;
		<a href="disclaimer.html"> Disclaimer</a>
		&nbsp;|&nbsp;
		<a href="#topOfPage">Top of page</a></p>
	</div><!--footer-->
</body>

</html> 