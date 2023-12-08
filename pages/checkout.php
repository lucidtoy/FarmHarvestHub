<?php



?>
 
    
        <div class="container">
            <div class="row" style="width:100%; border:0px solid #000;">
            	<?php if(isset($_POST['checkout_s'])){?>
            	<div class="col-lg-12 col-md-12 col-sm-12">
                       		<?php
								if(isset($_POST['checkout_s'])){
									
									$address = $_POST['address'];
									$city = $_POST['city'];
									$state = $_POST['state'];
									$cardname = $_POST['cardname'];
									$card = $_POST['card'];
									$ccmonth = $_POST['ccmonth'];
									$ccyear = $_POST['ccyear'];
									$cvv = $_POST['cvv'];
																		
									$order_number = gen_order_number($_SESSION['user']['user_id']);
									
									$order_status = submit_order($order_number,$_SESSION['user']['user_id'],$_SESSION['farm'],$address,$city,$state,$cardname,$card,$ccmonth,$ccyear, $cvv,$cart_total);
									
									echo"<h2>Order Confirmation #".$order_number."</h2><br/><br/>Dear ".$_SESSION['user']['firstname']. ",<br/> your order with order number <b>".$order_number."</b> has been successfully submitted. you will be notified with your order details by email shortly.<br/>Thank you for using Harvest Hub Australia we hope to see you again soon.<br/><br/>Regards<br/>Management
									
									
									<br/></br><h2>To Continue Shopping...<br/><br/> <a class='site-btn' href='?p=farms'>Continue Shopping</a><br/><br/></h2>";
									
									
									
								}else{
									
									echo 'ggcgchkgjh';	
								}
							
							
							
							?>
                    
                      
 				</div>
                
                
                <?php }elseif(isset($_SESSION['cart'])){
					//if cart is set without any post ?>
				<div class="col-lg-6 col-md-4 col-sm-6">
                       		
                  	<?php
						checkout();
					?>
  
            	</div>
				<div class="col-lg-6 col-md-4 col-sm-6">
            		<br/><br/>
					<?php
						thecart_preview();
					?>  
                      
 				</div>
				
				
				
				
				<?php
				}else{
					////end of the if cart is set
					?>
					<div class="col-lg-6 col-md-4 col-sm-6">
						<h2>Please Continue Shopping...<br/><br/> <a class="site-btn" href="?p=farms">Continue Shopping</a><br/><br/></h2>
					</div>
					<?php
					}?>
         </div>
   	</div>


<?php

?>