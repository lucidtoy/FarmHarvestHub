<?php
function cc(){
?>
<div class="padding">
<div class="row">
<div class="col-sm-6">
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
<input class="form-control" id="name" type="text" placeholder="Enter your name">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label for="ccnumber">Credit Card Number</label>


<div class="input-group">
<input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
<div class="input-group-append">
<span class="input-group-text">
<i class="mdi mdi-credit-card"></i>
</span>
</div>
</div> 
</div>
</div>
</div>

<div class="row">
<div class="form-group col-sm-4">
<label for="ccmonth">Month</label>
<select class="form-control" id="ccmonth">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>
</div>
<div class="form-group col-sm-4">
<label for="ccyear">Year</label>
<select class="form-control" id="ccyear">
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
</select>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="cvv">CVV/CVC</label>
<input class="form-control" id="cvv" type="text" placeholder="123">
</div>
</div>
</div>

</div>
<div class="card-footer">
<button class="btn btn-sm btn-success float-right" type="submit">
<i class="mdi mdi-gamepad-circle"></i> Continue</button>
<button class="btn btn-sm btn-danger" type="reset">
<i class="mdi mdi-lock-reset"></i> Reset</button>
</div>
</div>
</div>
</div>
</div>

<?php
}
function thecart(){
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

?>
 
    
        <div class="container">
            <div class="row" style="width:100%; border:0px solid #000;">
            			<div class="col-lg-6 col-md-4 col-sm-6">
                       		
                            
                            
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
                                <div class="form-group"><br/>Billing:
                                </div>
                                <div class="row">
                                
                                <?php
									cc();
								?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Verify Password" name="vpassword" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" name="phone_number" type="phone" value="" required>
                                </div>
                                <div class="form-group">
                                	<select name="user_type_id" class="form-control"   required>
                                    	<option value="3" >User</option>
                                        <option value="2" >Farmer</option>
                                    </select>
                                   
                                   <!-- <input class="form-control" placeholder="Phone Number" name="phone_number" type="phone" value="" required>-->
                                </div>
                                 
                                 <div class="form-group">
                                 
                                <div class="checkbox">
                                
                                    <label>
                                    <br/><br/>
                                        <input name="terms" type="checkbox" value="I Agree to Terms and Conditions" required>I Agree to Terms and Conditions
                                    </label>
                                </div>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="register" type="submit" class="site-btn" value="Register" />
                                <!--class="btn btn-lg btn-danger btn-block"-->
                            </fieldset>
                        </form>
                    </div>
                </div>
                            
                            
                            
                            
                            
                            
                        </div>
						<div class="col-lg-6 col-md-4 col-sm-6">
									 <?php
										thecart();
									?>
                        </datalist>

 			</div>
         </div>
   	</div>


<?php

?>