<?php
function thecart(){
	global $conn;
	global $cart_total;
echo"<div class=\"panel panel-default\" style='width:100%'>
                <div class=\"panel-heading\">
                <h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> Shopping Cart</h5>
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
						echo"<table border='1px' width='100%' align='center'>"; 
						 foreach($_SESSION['cart'] as $productid => $quantity){
							$lastitem = $productid;
							$numofitems2 = $numofitems2 + $quantity;
							$sql = mysqli_query($conn,"select * from product where product_id = '".$productid."'");
							$rw = mysqli_fetch_array($sql);
							 $price = $quantity * $rw['product_price'];
							 echo"<tr width='100%'><td height='30px' width='50%'><img src='img/product/".$productid.".png' width='80px' height='80px'/>
							 <br/>".$rw['product_name']."
							 </td align='right'>
							 <td>$".$rw['product_price']."</td>
							 <td>X</td>
							 <td>$quantity</td>
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
						
						 
						
						
						                            
                                 /*<div class=\"checkbox\">
                                     <label><input type=\"checkbox\"> Rice N350:00 </label>
                             </div>
                              <div class=\"checkbox\">
                                     <label><input type=\"checkbox\"> Salad N150:00</label>
                             </div>
                              <div class=\"checkbox\">
                                     <label><input type=\"checkbox\">  Beef N200:00</label>
                             </div>*/
							 
                        echo"</div>
                    </form>
                
                </div>
            <div class=\"panel-footer\">
                <div>
							<h4 class=\"text-right\">Total <strong id=\"ttotal\">".$cart_total."</strong></h4>
						</div>
						<div>
							<!--<button type=\"button\" >-->
								<div class='row'>
									<div class='col-lg-3 col-md-3 col-sm-3'>
										<a href=\"?p=store&store=1\" class=\"btn btn-success btn-block\">Continue Shopping</a>
									</div>
									<div class='col-lg-3 col-md-3 col-sm-3'>
									</div>
									<div class='col-lg-3 col-md-3 col-sm-3'>
										<a href=\"?p=basket\" class=\"btn btn-success btn-block\">Proceed To Checkout</a>
									</div>
								</div>
							<!--</button>-->
                            	
						</div><br>
            </div>
                
            </div>
            <!--shoping cart-->
            	
            <!-- Shoing cart end-->";

}

?>
 
    
        <div class="container">
            <div class="row" style="width:100%; border:1px solid #000;">

									 <?php
										thecart();
									?>

 			</div>
         </div>
   


<?php

?>