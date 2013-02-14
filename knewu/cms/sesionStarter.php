
		<div id="topBanner">
			<div id="leftImg"><img src="images/banner+logo.png" alt="Right brush image not available"></div>
			<!--<div id="rightImg"><img class="brush" src="images/RBrush.png" align="right" alt="Right brush image not available"></div>
			<div id="centerImg"><img class="logo" src="images/Logo.png"  alt="Logo image not available"></div>
			<div id="leftImg"><img class="brush" src="images/LBrush.png" alt="Left brush image not available"></div>-->
			<div id="rightImg">
				<a href="http://www.youtube.com/user/AbiSalazarPro"><img src="images/youtube.png" height="25px" width="25px"></a>
				<a href="https://twitter.com/AbiSalazar1"><img src="images/twitter.png" height="25px" width="25px"></a>
				<a href="http://www.flickr.com/photos/abisalazarpro/"><img src="images/flickr.png" height="25px" width="25px">	</a>
				<a href="https://www.facebook.com/AbiSalazarPro"><img src="images/fb.png" height="25px" width="25px"></a>	
			</div>		
		</div>
		<?php
			session_start(); 
			//session_destroy();
			$displayerSelector = "";
			if(isset($_SESSION['username'])){
				$sessionName = $_SESSION['username'];//This line is used for the cart.php
				echo '<p class="login" >Welcome '.$_SESSION['username'].'!!  ';
				echo '<sub> <small>Not '.$_SESSION['username'].'?? Click <a href="/admin/logout.php">to Logout</a></sub></small></p> ';
			}else{
				$sessionName = 'Guest';
				echo '<p class="login" >Welcome Guest! <br /> ';
				echo '<sub><small>Why not <a href="admin/login.php">Log in</a> or <a href="admin/register.php">Sign Up</a></sub></small>?</p> ';
			}
			require 'cms/databaseCreator.php';
		?>
