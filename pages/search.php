<?php
/**
Author: Solomon Oladokun
Date: 28-Nov-2023
this is the search page
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


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">

						
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


 <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row" style="border:0px solid #000;">

								<div class="col-lg-12 col-md-12" style="border:0px solid #000;">
                                	<h2><?php echo $page_info[2]; ?></h2>
                                    
                    				<?php
									
										if(isset($_POST['search'])){
											echo 'search results for ' . $_POST['search'] . '...' ;
											
											echo '<div class="row">';
											
											
											$products = search_products($_POST['search']);
											//var_dump($products);
						
						if($products[0]){
							  foreach($products[2] as $val2){
								  //echo '<li><a href="?p=farm&cat='.$val2['category_id'].'">'.$val2['category_name'].'</a></li>';
								  
							  
					echo '
					<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/'.$val2['product_id'].'.png">
                                    
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">'.$val2['product_name'].'</a></h6>
                                    <h5>$'.$val2['product_price'].'</h5>
									<form action="" method="post">
									<input name="prodid" type="hidden" value="'.$val2['product_id'].'" />
									<table align="center"><tr><td>
									<select name="quantity">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select> &nbsp;</td><td> '.$val2['unit_of_measure'].'</td></tr></table><br/>
									<input name="addtocart" type="submit" class="site-btn" value="Add to Cart" />
									</form>
                                </div>
                            </div>
                        </div>';
					

							  }
						}
											
											
											
										echo '</div>';	
											
											
										}else{
										
										?>
                                        <div class="col-lg-6 col-md-4 col-sm-6">
						<h2>Please Continue Shopping...<br/><br/> <a class="site-btn" href="?p=farms">Continue Shopping</a><br/><br/></h2>
					</div>
                                        <?php	
											
										}
									
									
									?>
                                    
                                    
                                    <?php
						
					?>
                                    
                                    
                                    
                                    
								
                                
                                
                                
                            </div>
                            <!--end of row-->




</div>
</div>
</section>