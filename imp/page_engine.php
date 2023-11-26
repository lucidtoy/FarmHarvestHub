<?php

	function page_engine($page_code){
		include 'imp/conn2.php';
		$page_info[0] = 0;
	
		$sqlpage = "select * from page_tbl where page_code='".mysqli_real_escape_string($conn,$page_code)."' limit 1";
		
		$xsqlpage = mysqli_query($conn,$sqlpage);
		
		if($xsqlpage){
			if(mysqli_affected_rows($conn)==0){
				$page_info[0] = 0;
			}
			else{
				while($rw = mysqli_fetch_array($xsqlpage)){
					$page_info[0] = $rw['page_id'];
					//$page_info[1] = $rw['page_name'];
					$page_info[1] = $rw['page_code'];
					$page_info[2] = $rw['page_title'];
					$page_info[3] = $rw['url'];
					$page_info[4] = $rw['description'];
					//$page_info[6] = $rw['defaults'];
					//$page_info[7] = $rw['start_date'];
					//$page_info[8] = $rw['end_date'];
					//$page_info[9] = $rw['created_by'];
					//$page_info[10] = $rw['creation_date'];
					$page_info[5] = $rw['access_level'];
				}
			}
			
		}
		else{
			$page_info[0] = 0;
		}
		
		return $page_info;
	}
?>