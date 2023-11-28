<?php
/**
Author: Solomon Oladokun
Date: 28-Nov-2023
this is the Dashboard account page
**/



?>
                 
                    
                    
                    
 
<section class="hero">
        <div class="container">
            <div class="row">
				<!--<h1>Login Page</h1>-->
			</div>
        </div>
 </section>



 <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">

							<div class="row">
								<div class="col-lg-6 col-md-6" style="border:0px solid #000;">
                                	<h2><?php echo $page_info[2]; ?></h2>
                                    <p>
                    				<?php
										echo 'Welcome ' . $_SESSION['user']['firstname'] . ' '. $_SESSION['user']['lastname'];
									
									
									
									?></p>
                                    
                                    
                                    
								</div>
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                                <div class="col-lg-6 col-md-6" style="border:0px solid #000;">

                                    
                                    
								</div>
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                            </div>
                            <!--end of row-->




</div>
</div>
</section>