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
		

		<?php
			$labels = array("Home","MakeUp Basics","Gallery","Tutorials");
			$link = array("index","makeupBasics","gallery","tutorials");
			//$labels = array("","","","");
			$currentFile = $_SERVER["PHP_SELF"];
			$parts = Explode('/', $currentFile);
			//this will just take the name of the file   start  end
			$tabName =  substr($parts[count($parts) - 1],  0,   -4);
			/**/echo '
				<div id="tabs"> 
				<ul>';
			
			for ($i=0; $i<=3; $i++){
			//echo $link[$i].'  '.$tabName;
				if (strcmp ($link[$i],$tabName) == 0){
					echo '<li id="selected">';
				} else {
					echo '<li>';
				}				
				echo '<a href="'.$link[$i].'.php?adminEntryVerified">'.$labels[$i].'</a></li>';
			 }	
			echo 	'<li>
							<!-- This is the search engine miniform-->
						<form action="../cms/search.php" method="GET">
									<input type="text" size="15" name="search">
									<input type="submit" name="submit" value="Search">
						</form>
					</li>
				</ul>
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