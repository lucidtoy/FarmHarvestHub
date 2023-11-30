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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>HARVEST HUB Australia</span>
                            <h2>Farm Produce <br />100% Organic</h2>
                            <p>Hub For Farmers and Customers</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Store Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                	<?php
						
						
							$farm = farm();
							//var_dump($cat);
							
							if($farm[0]){
								foreach($farm[2] as $val){
									//echo '<li><a href="?p=store&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
									echo '<div class="col-lg-3">
                        					<div class="categories__item set-bg" data-setbg="img/farm/'.$val['farm_id'].'.png">
                           					 <h5><a href="?p=farm&farm='.$val['farm_id'].'">'.$val['farm_name'].'</a></h5>
                       						</div>
                    					</div>';
								}
							}
						?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Store Section End -->

    <br/><br/>