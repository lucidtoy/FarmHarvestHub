<?php
/**
Author: Solomon Oladokun
Date: 27-Nov-2023
Farm Page
**/


?>
 <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                        <?php
						
							if(isset($_GET['farm'])){
								$farm_id = $_GET['farm'];
								$_SESSION['farm'] = $farm_id;
							}
							else{
								$farm_id = null;
							}
							$cat = category();
							//var_dump($cat);
							
							if($cat[0]){
								foreach($cat[2] as $val){
									echo '<li><a href="?p=farm&farm='.$farm_id.'&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
								}
							}
						?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form method="post" action="?p=search">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input name="search" type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
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
                        <?php
                        		if(isset($_GET['farm'])){
									$farm_info = get_farm($_GET['farm']);
									
									if($farm_info[0]){
										echo '<h2>'.$farm_info[2][0]['farm_name'] .' ('.$farm_info[2][0]['phone'].') </h2>';
										
										echo'<div class="breadcrumb__option">';
										echo '<span>'.$farm_info[2][0]['address'].' | '.$farm_info[2][0]['email']  .'</span>';
										echo '</div>';
									}	
								}
								
						
						?>
                        
                        
                            
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Category</h4>
                            <ul>
                                <?php
						
						
									  $cat = category();
									  //var_dump($cat);
									  
									  if($cat[0]){
										  foreach($cat[2] as $val){
											  //echo '<li><a href="?p=farm&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
											  echo '<li><a href="?p=farm&farm='.$farm_id.'&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
										  }
									  }
								?>
                            </ul>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    
                    <div class="row">
                    <?php
						$products = get_products($farm_id);
						
						
						if($products[0]){
							  foreach($products[2] as $val2){
								  //echo '<li><a href="?p=farm&cat='.$val2['category_id'].'">'.$val2['category_name'].'</a></li>';
								  
							if(isset($_GET['cat'])){
								if($val2['category_id']==$_GET['cat']){
									
									
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
							}else{	  
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
							}//end if category_id is set for filter

							  }
						}
					?>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->