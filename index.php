<?php
ob_start();
session_start();
require_once'imp/conn.php';
require_once'imp/url_engine.php';
require_once'imp/page_engine.php';
require_once'imp/gui.php';
require_once'imp/functions.php';


		//incase url is null
 		if(!empty($_GET['p'])){
  			$p = $_GET['p'];
  		 }
		 else{
		 	$p ="HOME";
		}
		//incase url is null

		//screened url/pages...incase 		
		$links = url_engine($p);
				
	
	$num_of_items = calc_num_of_items();
	
	$cart_total = calc_total_cart() ;
	
	//after the urls has been returned, the url engine has to take control
	//populate the required pages and links controlling the application
	//page contents is processed here
		$page_info = page_engine($links[0]);
		$page_url = $page_info[3];
		$page_title = " Farm Harvest Hub | ".$page_info[2]." ";
		$access_level = $page_info[5];

headers();
?>




<?php
		//process page incase its a private page
		if($access_level=="PRIVATE"){
			//session
			if(empty($_SESSION['user']['user_id'])){
				include "pages/login.php";
			}
			else{
				
				//check if user has the priviledge to access page
				$sql = "select * from resp_tbl where page_id='".$page_info[0]."' and user_type_id = '".$_SESSION['user']['user_type_id']."'";
				$xsql = mysqli_query($conn,$sql);
				
				if($xsql){
					if(mysqli_affected_rows($conn) == 0){
						include "pages/404.php";
					}
					else{
						include $page_url;
						//echo $page_url;
					}
				}
				else{
					include "pages/404.php";
				}
			}
			
		}else{	
			include $page_url;
			
			//echo $page_url;
		}
		
footers();
?>		