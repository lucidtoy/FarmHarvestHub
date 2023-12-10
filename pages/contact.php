<?php
/**
Author: Solomon Oladokun
Date: 28-Nov-2023
this is the Dashboard account page
**/



?>
                 
                    
     <!-- Hero Section Begin -->
    <section class="hero" style="margin-bottom:0px;">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                        <?php
						
						
							$cat = category();
							//var_dump($cat);
							
							if($cat[0]){
								foreach($cat[2] as $val){
									echo '<li><a href="?p=store&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
								}
							}
						?>

                        </ul>
                    </div>
                </div>-->
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                             <form method="post" action="?p=search">
                                <div class="hero__search__categories">
                                    All Shops & Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input name="search" type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                       
                    </div>
                    
            </div>
        </div>
    </section>
    <!-- Hero Section End -->     
     
     
     
                    
                    





<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12" style="border:0px solid #000;">
                                	<h2><?php echo $page_info[2]; ?></h2>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <!-- Page -->
	<div class="page-area contact-page">
		<div class="container contact-info-warp">
			<div class="contact-card">
				<div class="contact-info">
					<h4>Sales & Delivery</h4>
					<p>Phone:    +61 426700655</p>
					<p>Email:   sales@harvesthubaustralia.com.au</p>
				</div>
				<div class="contact-info">
					<h4>Informations</h4>
					<p>Phone:    +61 426700655</p>
					<p>Email:   sales@harvesthubaustralia.com.au</p>
				</div>
			</div>
		</div>
		<div class="map-area">
			<!--<div class="map" id="map-canvas"></div>-->

            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.419125029221!2d138.65705127566332!3d-34.69460717292175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0adb81d277969%3A0xd7db84a03feeb5d1!2s40%20Kilmington%20Rd%2C%20Davoren%20Park%20SA%205113!5e0!3m2!1sen!2sau!4v1702193229071!5m2!1sen!2sau" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div> 
	<!-- Page end -->

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
								</div>
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                                
                                
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                            </div>
                            <!--end of row-->


					</div>

</div>
</div>
</section>