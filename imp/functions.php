<?php
/*
login function
*/
function login($email , $password){
	global $conn;
	$status[0] = false;
	$status[1] = "";
						//$status[1] = "Invalid Username and / or Password";
	$sql = "select * from users where email='".$email."' and password='".md5($password)."' and ( user_status='ACTIVE')";
				$xsql = mysqli_query($conn,$sql);
				
				
				if($xsql){
					if(mysqli_affected_rows($conn)==0){
						$status[0] = false;
						$status[1] = "Invalid Username and / or Password 1";
						$status[2] = $sql;
					}
					else{
						while($rw = mysqli_fetch_array($xsql)){
							
							$_SESSION['user']['user_id'] = $rw['user_id'];
							$_SESSION['user']['email'] = $rw['email'];
							$_SESSION['user']['password'] = $rw['password'];
							$_SESSION['user']['firstname'] = $rw['firstname'];
							$_SESSION['user']['lastname'] = $rw['lastname'];
							$_SESSION['user']['phone_number'] = $rw['phone'];
							$_SESSION['user']['address'] = $rw['address'];
							$_SESSION['user']['city'] = $rw['city'];
							$_SESSION['user']['state'] = $rw['state'];
							$_SESSION['user']['user_type_id'] = $rw['user_type_id'];
							$_SESSION['user']['status'] = $rw['user_status'];
							$_SESSION['user']['last_logon_date'] = $rw['last_logon'];
							
							
							
							$sql2 = "UPDATE `users` SET `last_logon`='".date("Y-m-d H:i:s")."' WHERE email='".$_SESSION['user']['email']."'";
							
							$xsql2 = mysqli_query($conn,$sql2);
							
							if($xsql2){
								$status[0] = true;
								$status[1] = "loggon on successful";
								$status[2] = $sql2;
							}
						}
					}
				}
				else{
					$status[0] = false;
					$status[1] = "server busy, try again";
					
				}
				
	return $status;
}
/*
end login function
*/

/*
register function
*/
function register($email, $cpassword, $vpassword, $firstname, $lastname, $phone_number, $user_type_id){
	global $conn;
	$status[0] = false;
	$status[1] = "";
	
	if($cpassword == $vpassword){		
		$sql = "select * from users where email='".$email."'";
		$xsql = mysqli_query($conn,$sql);
		if($xsql){
			if(mysqli_affected_rows($conn)==0){
				$status[1] = "User does not exist yet";
					$ins = "INSERT INTO `users`(`email`, `phone`, `password`, `firstname`, `lastname`,`last_logon`, `user_status`,`user_type_id`) 
					VALUES ('". strtolower($email)."' , '".$phone_number."' , '".md5($cpassword)."' , '". ucfirst(strtolower($firstname))."', '".ucfirst(strtolower($lastname))."' ,  '".date("Y-m-d H:i:s")."' , 'ACTIVE', '".$user_type_id."') ";
				
				$status[2] = $ins;
				
				//$status[0] = true;
				//$status[1] = "User Successfully Registered";
				$xins = mysqli_query($conn,$ins);
				if($xins){
					$status = login( $email , $cpassword);
				}

			}	
			else{
				$status[0] = false;
				$status[1] = "Email already registered, please login / recover password";
				$status[2] = $ins;
			}
		}
		else{
			$status[1] = "trying to select user failed";
			$status[2] = "User does not exist yet";
		}
	}
	else{
		$status[0] = false;
		$status[1] = $sql;
	}

return $status;		
}
/*
end register function
*/

/*
logout function
*/
function logout($user_id){
	global $conn;
	$sql2 = "UPDATE `users` SET 1=1 WHERE user_id='".$user_id."'";
							
							$xsql2 = mysqli_query($conn,$sql2);
							if($xsql2){
									
								}
								else{
									
								}
}
/*
end logout function
*/

/*
calculate number of items in cart
*/
function calc_num_of_items(){
	
		$numofitems = 0;
		$totalamount = 0;
if(!isset($_SESSION['cart'])){ $numofitems=0.00;}
else{
	  foreach($_SESSION['cart'] as $product_id => $valx){
		  
		  foreach($_SESSION['cart'][$product_id] as $size=>$quantity){
			  $product_id;
			  $size;
			  $quantity;
			  $numofitems = $numofitems + $quantity;
			  
		  }
		  //foreach($product_id as $val => $size){
			  
			  //echo $val .' ' .$size;
		  //}
	  }
}
	 return $numofitems;
}


function calc_total_cart(){
	global $conn;
$numofitems = 0;
$totalamount=0;

if(!isset($_SESSION['cart'])){ $totalamount=0.00;}
else{
foreach($_SESSION['cart'] as $product_id => $valx){
		  
		  foreach($_SESSION['cart'][$product_id] as $size=>$quantity){
			  //$prod_det = fetch_prod($product_id);
			  $product_id;
			  $sql = "select product_price from product where product_id='".$product_id."'";
			  $xsql = mysqli_query($conn,$sql);
			  $size;
			  $quantity;
			  $numofitems = $numofitems + $quantity;
			  if($xsql){
					while($rw=mysqli_fetch_array($xsql)){
							$totalamount = $totalamount + ($rw['prod_price'] *$quantity);		
					} 
				}
			  
		  }

}
}
return number_format((float)($totalamount), 2, '.', '');	
}

/**
category function
**/
function category(){
	global $conn;
	$status[0] = false;
	$status[1] = "";
						//$status[1] = "Invalid Username and / or Password";
	$sql = "select * from product_category";
				$xsql = mysqli_query($conn,$sql);
				
				
				if($xsql){
					if(mysqli_affected_rows($conn)==0){
						$status[0] = false;
						$status[1] = "No category";
					}
					else{
						$count = 0;
						$status[0] = true;
						$status[1] = "success";
						while($rw=mysqli_fetch_array($xsql)){
							
							$status[2][$count]['category_id'] = $rw['category_id'];
							$status[2][$count]['category_name'] = $rw['category_name'];
							$count++;
						}	
					}
				}
				else{
					$status[0] = false;
					$status[1] = "Error";
				}
	return $status;
}
/**
end category function
**/
?>