<?php
/**
Author: Solomon Oladokun
Date: 27-Nov-2023
Farms Page
**/


?>
   <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>All Farms</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                        <li class="active" data-filter="*">All</li>
                        <?php
						
						
							$cat = category();
							//var_dump($cat);
							
							if($cat[0]){
								foreach($cat[2] as $val){
									//echo '<li><a href="?p=farm&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
									echo '<li data-filter=".cat'.$val['category_id'].'">'.$val['category_name'].'</li>';
								}
							}
						?> 
                       </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php
						
						
							$farm = farm();
							//var_dump($cat);
							
							if($farm[0]){
								foreach($farm[2] as $val){
									//echo '<li><a href="?p=store&cat='.$val['category_id'].'">'.$val['category_name'].'</a></li>';
									/*echo '<div class="col-lg-3">
                        					<div class="categories__item set-bg" data-setbg="img/farm/'.$val['farm_id'].'.png">
                           					 <h5><a href="?p=farm&farm='.$val['farm_id'].'">'.$val['farm_name'].'</a></h5>
                       						</div>
                    					</div>';*/
										
							
							$get_farm_product_cat = get_product_cat_id($val['farm_id']);
							$cat_list = " ";
							//echo $val['farm_id'];
							//var_dump($get_farm_product_cat);
							
							if($get_farm_product_cat[0]){
								
								foreach($get_farm_product_cat[2] as $val1){
									$cat_list .= 'cat'.$val1['category_id']. ' ';
								}
							}
										
			echo'<div class="col-lg-3 col-md-4 col-sm-6 mix'. $cat_list.'">
                    <div class="featured__item">
                       <div class="featured__item__pic set-bg" data-setbg="img/farm/'.$val['farm_id'].'.png">
                       
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="?p=farm&farm='.$val['farm_id'].'">'.$val['farm_name'].'</a></h6>
                            <h5>'.$val['phone'].'</h5>
                        </div>
                    </div>
                </div>';
								}
							}
						?>
                
               
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

   

    <br/><br/>