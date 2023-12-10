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
                                    
                                    
                                    
                                    
                                    
                                    
                                    
      <div class="row" id="product-filter">
            		<h2>Brief history of our company</h2>
<table width="100%">
<tr><td width="65%">
                  Welcome to Harvest Hub Australia, your premier destination for a seamless and personalized farm-to-table experience. At Harvest Hub, we are committed to revolutionizing the way farmers connect with end-users, creating a thriving online marketplace for fresh and locally-sourced farm produce.
                  <br/><br/>
                  
                  At Harvest Hub Australia, we are not just a platform; we are a community united by a shared passion for quality, freshness, and supporting local farmers. Join us in cultivating a future where the journey from harvest to table is seamless, enriching, and beneficial for farmers and consumers alike. Thank you for choosing Harvest Hub Australia—your farm's bounty, just a click away!
</td>
<td width="35%" valign="top"><img src="img/about_us.png" />
</td>
</tr></table>					
                    
 
<br/><br/>
<table width="100%">
<tr><td align="center" width="50%"><img src="img/our_mission.png" /></td>
<td align="center" width="50%"><img src="img/our_vision.png" /></td></tr>
<tr><td>
Our mission at Harvest Hub Australia is to empower farmers and enhance the accessibility of quality farm produce for end-users. We strive to bridge the gap between producers and consumers, fostering a sustainable agricultural ecosystem. Through innovative technology and a customer-centric approach, we aim to make the process of buying and selling farm products convenient, transparent, and rewarding.
</td><td>
Our vision is to establish Harvest Hub Australia as the go-to platform for farmers and end-users seeking a reliable and efficient marketplace for farm produce. We envision a future where farmers can showcase their products to a wide audience, and consumers can access a diverse range of fresh, locally-sourced goods with just a few clicks. Ultimately, we aspire to contribute to the growth of local agriculture, promote sustainability, and redefine the farm-to-table experience for everyone involved.

</td>
</tr>
</table>




            </div><!--row-->

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
								</div>
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                                
                                
                                <!--end of the product description col-lg-6 col-md-6-->
                                
                            </div>
                            <!--end of row-->


					</div>

</div>
</div>
</section>