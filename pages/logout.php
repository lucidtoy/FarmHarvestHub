<?php
/**
Author: Solomon Oladokun.
Date: 28-Nov-2023
this is the homepage
**/
		logout($_SESSION['user']['user_id']);

		session_destroy();
		echo"<meta http-equiv=\"refresh\" content=\"0;URL=";
		if(isset($_GET['u'])){
			echo $_GET['u'];
		}
		else{
			echo "?p=home";
		}
		echo"\" />";


?>
<br/><br/><br/><br/><br/><br/>