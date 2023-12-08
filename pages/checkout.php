<?php



?>
 
    
        <div class="container">
            <div class="row" style="width:100%; border:0px solid #000;">
            	<?php if(!isset($_SESSION['cart']) and isset($_POST['checkout_s'])){?>
            	<div class="col-lg-12 col-md-12 col-sm-12">
                       		<?php
								if(isset($_POST['checkout_s'])){
									
									$address = $_POST['address'];
									$city = $_POST['city'];
									$state = $_POST['state'];
									$address = $_POST['address'];
									$cardname = $_POST['cardname'];
									$card = $_POST['card'];
									$ccmonth = $_POST['ccmonth'];
									$ccyear = $_POST['ccyear'];
									$cvv = $_POST['cvv'];
																		
									
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
						<h2>Please Continue Shopping...<br/><br/> <a class="site-btn" href="?p=farms">Continue Shopping</a></h2>
					</div>
					<?php
					}?>
         </div>
   	</div>


<?php

?>