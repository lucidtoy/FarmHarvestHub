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
                             <form method="post" action="">
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
                       
							<h2><?php echo $page_info[2]; ?></h2>
						
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
                            <table><tr><td width="120px">
                            <div style="width: 100px;height: 100px;background-color:#000;border-radius: 50%;color: #fff;text-align: center;line-height: 100px;font-size: 48px;"><?php echo strtoupper(substr($_SESSION['user']['firstname'], 0, 1)).strtoupper(substr($_SESSION['user']['lastname'], 0, 1));?></div>&nbsp;&nbsp;
                            </td><td>
                            Hello,<br/><?php echo $_SESSION['user']['firstname'].'<br/>'.$_SESSION['user']['lastname']; ?>
                            </td></tr></table>
                            
                            
                            
                            
                            <h4><?php echo $page_info[2];?></h4>
                            <?php
								dash_url();
							?>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    
                    <div class="row">
                 
                                    
                    				<?php
										
										
										
										
										$products = get_my_farm_orders($_SESSION['user']['user_id']);
						
										//var_dump($products);
										
						if($products[0]){
							  foreach($products[2] as $val2){
								  //echo '<li><a href="?p=farm&cat='.$val2['category_id'].'">'.$val2['category_name'].'</a></li>';
								  
						echo '<div class="col-lg-12 col-md-12 col-sm-12" style="border-bottom:1px solid #000;border-top:1px solid #000; margin-bottom:5px;">';	
								echo '<table style="width:100%;border:0px solid #000;"><tr><td><b>Order No:</b><h2>'.$val2['order_number'].'</h2></td>
								<td align="right"><b>Ordered at:</b> '.$val2['ordered_at'].'<h3>$'.number_format($val2['total_amount'],2).'</t3></td>
								<td></td>
								</tr>
								<tr><td><b>Shipping Address:</b><br/>'.$val2['ordered_by'].'<br/>'.$val2['shipping_address'].'<br/>'.$val2['shipping_city'].'<br/>'.$val2['shipping_state'].'</td><td valign="top"><b>Email:</b> '.$val2['email'].'<br/><b>Phone:</b> '.$val2['phone'].'</td></tr>';
								
								$order_d = get_order_details($val2['order_id']);
								
								//var_dump($order_d);
								
								if($order_d[0]){
									foreach($order_d[2] as $val3){
										echo '<tr><td><img src="img/product/'.$val3['product_id'].'.png" width="30px" height="30px" /> '.$val3['product_name'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$'.number_format($val3['price'],2).' Per '.$val3['unit_of_measure'].' * '.$val3['quantity'].'</td><td align="right">$'.number_format($val3['sub_total'],2).'</td></tr>';
									}
								}
								
								echo'</table>';
						echo '</div> <hr/>';
					
						

							  }
						}
					?>
										
										
									
									
									
									
                                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->



