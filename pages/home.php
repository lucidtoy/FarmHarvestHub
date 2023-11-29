<?php
/**
Author: Solomon Oladokun
Date: 27-Nov-2023
Home Page
**/


?>
  <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
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
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+61 42.670.0655</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="?p=store" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                	<?php
						
						
							$store = store();
							//var_dump($cat);
							
							if($cat[0]){
								foreach($store[2] as $val){
									//echo '<li><a href="?p=store&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
									echo '<div class="col-lg-3">
                        					<div class="categories__item set-bg" data-setbg="img/store/'.$val['store_id'].'.png">
                           					 <h5><a href="?p=store&store='.$val['store_id'].'">'.$val['store_name'].'</a></h5>
                       						</div>
                    					</div>';
								}
							}
						?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <br/><br/>