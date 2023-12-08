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
                 
                                    <p>
                    				<?php
										
										
									
									
									
									?></p>
                                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->



