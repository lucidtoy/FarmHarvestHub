<?php
/*
login function
*/
function login($email , $password){
	global $conn;
	$status[0] = false;
	$status[1] = "";
						$status[1] = "Invalid Username and / or Password";
	$sql = "select * from users where email='".$email."' and password='".md5($password)."' and ( user_status='ACTIVE')";
				$xsql = mysqli_query($conn,$sql);
				
				
				if($xsql){
					if(mysqli_affected_rows($conn)==0){
						$status[0] = false;
						$status[1] = "Invalid Username and / or Password ";
					}
					else{
						while($rw = mysqli_fetch_array($xsql)){
							
							$_SESSION['user']['user_id'] = $rw['user_id'];
							$_SESSION['user']['email'] = $rw['email'];
							$_SESSION['user']['password'] = $rw['password'];
							$_SESSION['user']['firstname'] = $rw['firstname'];
							$_SESSION['user']['lastname'] = $rw['lastname'];
							$_SESSION['user']['phone_number'] = $rw['phone_number'];
							$_SESSION['user']['address'] = $rw['address'];
							$_SESSION['user']['area'] = $rw['area'];
							$_SESSION['user']['city'] = $rw['city'];
							$_SESSION['user']['state'] = $rw['state'];
							$_SESSION['user']['user_type_id'] = $rw['user_type_id'];
							$_SESSION['user']['login_count'] = ($rw['login_count'] +1 );
							$_SESSION['user']['status'] = $rw['status'];
							$_SESSION['user']['logged_on'] = $rw['logged_on'];
							$_SESSION['user']['last_logon_date'] = $rw['last_logon_date'];
							$_SESSION['user']['created_by'] = $rw['created_by'];
							$_SESSION['user']['creation_date'] = $rw['creation_date'];
							
							
							$sql2 = "UPDATE `dhc_user_tbl` SET `login_count`='".$_SESSION['user']['login_count']."', `logged_on`='Y',`last_logon_date`='".date("Y-m-d H:i:s")."' WHERE email='".$_SESSION['user']['email']."'";
							
							$xsql2 = mysqli_query($conn,$sql2);
							
							if($xsql2){
								$status[0] = true;
								$status[1] = "loggon on successful";
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
				
					"INSERT INTO `users`(`email`, `phone`, `password`, `firstname`, `lastname`,`last_logon`, `user_status`,`user_type_id`, 
					VALUES ('". strtolower($email)."' , '".$phone_number."' , '".md5($cpassword)."' , '". ucfirst(strtolower($firstname))."', '".ucfirst(strtolower($lastname))."' ,  '".date("Y-m-d H:i:s")."' , 'ACTIVE', '".$user_type_id."') ";
				
				//$ins = "INSERT INTO `users`(`email`, `password`, `firstname`, `lastname`, `phone_number`, `user_type_id`, `login_count`, `status`, `email_confirmed`, `logged_on`, `last_logon_date`, `code`, `created_by`, `creation_date`) VALUES ('". strtolower($email)."' , '".md5($cpassword)."' , '". ucfirst(strtolower($firstname))."', '".ucfirst(strtolower($lastname))."' , '".$phone_number."' , '2' , '0' , 'ACTIVE' , 'N' , 'N' , '0000-00-00 00:00:00' , '".md5($email)."' , '0' , '".date("Y-m-d H:i:s")."')";
				
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
			}
		}
	}
	else{
		$status[0] = false;
		$status[1] = "Both Password(s) must be the same";
	}

return $status;		
}
/*
end register function
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


?>