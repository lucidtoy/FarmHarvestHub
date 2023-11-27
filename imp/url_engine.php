<?php
//require_once'imp/conn.php';
/*
This is the url engine where all the url are processed we use this to make the application a one page application.
To ensure that we can manage user roles and responsibilities

*/

function url_engine($p){

	$link = url_split($p);

	$count = url_var_count($p);
	
	
	if(!isset($link[0]) or empty($link[0])){
					$link[0] = "HOME";
	}
	$link[0] = page_process($link[0]);

return $link;	
}


function url_var_count($p){
	//to know the number of variables that
	// has been passed from the url
	$count = 0;
	//this is what sorts the initial url incase nuin was passed
	$link = explode("/", $p);
	
	
	foreach($link as $val){
		$count++;
	}
return $count;
}

function url_split($p){
	//to cut out all the variables passed through
	//the url
	$link = explode("/", $p);
	
	return $link;
}



function page_process($page){
	//this will select and return the page url
	global $conn;
	$sqlpage = "select * from page_tbl where page_code ='".strtoupper(mysqli_real_escape_string($conn,$page))."' 
				 limit 1 ";
				
	$xsqlpage = mysqli_query($conn,$sqlpage);
	
	if($xsqlpage){
		if(mysqli_affected_rows($conn)==0){
			//if the page was not found
			//retrieve the page not found
			$xpage ="404";
		}
		else{
			//bring up the initial page that was called
			$xpage = strtoupper($page);
		}
	}
	else{
		//get the erorr page when a problem occurrs while trying
		// to retreive the page
		$xpage = "ERROR";
	}

	return $xpage;
}
?>