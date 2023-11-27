<?php

	function page_engine($page_code){
		global $conn;
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
					$page_info[1] = $rw['page_code'];
					$page_info[2] = $rw['page_title'];
					$page_info[3] = $rw['url'];
					$page_info[4] = $rw['description'];
					$page_info[5] = $rw['access_level'];
					$page_info[6] = $rw['defaults'];
					
				}
			}
			
		}
		else{
			$page_info[0] = 0;
		}
		
		return $page_info;
	}
?>