<?php

function headers(){
	?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php global $page_title;?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    
        <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
               <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>-->
                <li><a href="?p=cart"><i class="fa fa-shopping-bag"></i> <span><?php global $num_of_items; echo $num_of_items; ?></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$<?php global $cart_total; echo $cart_total;?></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <!--<ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>-->
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="?p=farms">Farms</a></li>
               <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        
                    </ul>
                </li>-->
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
           
        </div>
        
    </div>
    <!-- Humberger End -->
    
    
    
     <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            
                            
                               
                                <?php
								
									if(isset($_SESSION['user']['user_id'])){
										echo '<div class="header__top__right__language" style="border:0px solid #000;">';
									echo '<a href="?p=account"><i class="fa fa-user"></i>('. $_SESSION['user']['firstname'] . ')</a>'; 
									echo '</div>';
									
								}
								?>
                            
                            <div class="header__top__right__auth" style="border:0px solid #000;">
                            <?php
								if(isset($_SESSION['user']['user_id'])){
									echo '<a href="?p=logout"><i class="fa fa-user"></i> Logout </a>';
								}
								else{
									echo '<a href="?p=account&reg=1">Login | Register </a>';
									//echo '<a href="?p=account&reg=1"><i class="fa fa-user"></i> Login</a> | <a href="?p=account&reg=2"><i class="fa fa-user"></i>Register</a>';	
								}
							
							?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="?p=home">Home</a></li>
                            <li><a href="?p=farms">Farms</a></li>
                            <!--
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>-->
                            <li><a href="?p=about">About</a></li>
                            <li><a href="?p=contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!--<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>-->
                            <li><a href="?p=cart"><i class="fa fa-shopping-bag"></i> <span><?php global $num_of_items; echo $num_of_items;?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$<?php global $cart_total; echo $cart_total;?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    
    
    <?php
}


function footers(){
	?>
     <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
               
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  <?php echo 'copyright &copy;'. date("Y") .'| Harvest Hub Australia'; ?></p></div>
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
    
    <?php
}


function checkout(){
	?>
    
     <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Shipping Information</h3><br/>
                        
                    </div>
                    <div class="panel-body">
                    	
                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">Shipping Name:
                                    <input class="form-control" value="<?php echo $_SESSION['user']['firstname'] .' '.$_SESSION['user']['lastname'];?>" name="fullname" type="text" disabled>
                                </div>
                                <div class="form-group">Shipping Address:
                                    <input class="form-control" name="address" placeholder="Address" value="<?php echo $_SESSION['user']['address'];?>" type="text">
                                </div>
                                <div class="form-group">
                                	<div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-6">
                                    City: 
                                    <input class="form-control" placeholder="City" name="city" value="<?php echo $_SESSION['user']['city'];?>" type="text" required>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-6">
                                    State:
                                    <input class="form-control" placeholder="State" name="state" type="text" value="<?php echo $_SESSION['user']['state'];?>" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group"><br/>Payment: <img src="img/payment-item-card.png" />
                                </div>
                                <div class="row" style="border:0px solid #000;margin:10px;">
                                
                                
                                
                                <!--the card-->
                                <div class="padding">
<div class="row">
<div class="card">
<div class="card-header">
<strong>Credit Card</strong>
<small>enter your card details</small>
</div>
<div class="card-body">
<div class="row">
<div class="col-sm-12">
<div class="form-group">
    

    
<label for="name">Name</label>
<input name="cardname" class="form-control" id="name" type="text" placeholder="Enter your name" required>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label for="ccnumber">Credit Card Number</label>


<div class="input-group">
<input name="card" class="form-control" type="card" placeholder="0000 0000 0000 0000" required>
<div class="input-group-append">
<span class="input-group-text">
<i class="mdi mdi-credit-card"></i>
</span>
</div>
</div> 
</div>
</div>

<div class="row" style="margin-left:5px;">
<div class="form-group col-sm-4">
<label for="ccmonth">Month</label><br/>
<select name="ccmonth" class="form-control" id="ccmonth">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
<div class="form-group col-sm-4">
<label for="ccyear">Year</label><br/>
<select name="ccyear" class="form-control" id="ccyear">
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
</select>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="cvv">CVV/CVC</label>
<input name="cvv" class="form-control" id="cvv" type="text" placeholder="123" required>
</div>
</div>
</div>

</div>
<div class="card-footer" style="padding:20px;">
<button name="checkout_s" class="site-btn float-right" type="submit">
<i class="mdi mdi-gamepad-circle"></i> Continue</button>
<button class="btn btn-danger" type="reset">
<i class="mdi mdi-lock-reset"></i> Reset</button>
</div>
</div>
</div>
</div>
</div>
                                <!--end the card-->
                                
                                
                                </div>
                                
                               
                                 
                                 <div class="form-group">
                                 
                                
                                </div>
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
<?php
}
	
	
	
function thecart_preview(){
	global $conn;
	global $cart_total;
echo"<div class=\"panel panel-default\" style='width:100%'>
                <div class=\"panel-heading\">
                <h2><span class=\"glyphicon glyphicon-shopping-cart\"></span> Order</h2>
                <!--<button type=\"button\" class=\"btn btn-primary btn-sm pull-right\">
									<span class=\"glyphicon glyphicon-share-alt\"></span> Continue shopping
								</button>-->
                </div>
                		
                <div class=\"panel-body\">
                    <form>
                         <div class=\"form-group\">  ";
						 if(isset($_SESSION['cart'])){
						
						
						$lastitem = "";
						$numofitems2 = 0; 
						echo"<table border='0px' width='100%' align='center'>"; 
						 foreach($_SESSION['cart'] as $productid => $quantity){
							$lastitem = $productid;
							$numofitems2 = $numofitems2 + $quantity;
							$sql = mysqli_query($conn,"select * from product where product_id = '".$productid."'");
							$rw = mysqli_fetch_array($sql);
							 $price = $quantity * $rw['product_price'];
							 echo"<tr width='100%'><td height='30px' width='50%'><img src='img/product/".$productid.".png' width='80px' height='80px'/>
							 &nbsp;&nbsp;".$rw['product_name']."
							 </td align='right'>
							 <td>$".$rw['product_price']."</td>
							 <td>X</td>
							 <td>$quantity ".$rw['unit_of_measure']."</td>
							 <td><p style=\"text-align: right;\">$".number_format((float)$price, 2, '.', '')."</p></td></tr>";
						}
						if($numofitems2<1){
						echo"</table>";
						echo"<center><b><h3>empty cart</h3></b></center>";
						}
						else{
						echo"</table>";
						}
						
						}else{
							echo"<center><b><h3>empty cart</h3></b></center>";
						}
						
						 
						
							 
                        echo"</div>
                    </form>
                
                </div>
            <div class=\"panel-footer\">
                <div>
							<h4 class=\"text-right\">Total <strong id=\"ttotal\">$".$cart_total."</strong></h4>
						</div>
						
            </div>
                
            </div>
            <!--shoping cart-->
            	
            <!-- Shoing cart end-->";

}


function dash_url(){
	echo '<ul>
			<li><a href="?p=account">Accounts</a></li>';
			
			if($_SESSION['user']['user_type_id']==2){
				echo '<li><a href="?p=fohistory">Farm Order History</a></li>';
			}
			
			echo'<li><a href="?p=ohistory">Order History</a></li>
			<li><a href="?p=cpassword">Change Password</a></li>
			<li><a href="?p=logout">Logout</a></li>
		</ul>';
	}
?>