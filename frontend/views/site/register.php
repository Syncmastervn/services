<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
        <div class="header">
        	<nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
        		 role="navigation">
        		<div class="container">

                <div class="navbar-identity">


        			<a href="index.html" class="navbar-brand logo logo-title">
        			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
        			</span>BOOT<span>CLASSIFIED </span> </a>


        			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
        					type="button">

        				<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>


        			</button>


        			<button
        					class="flag-menu country-flag d-block d-md-none btn btn-secondary hidden pull-right"
        					href="#select-country" data-toggle="modal">	<span class="flag-icon flag-icon-us"></span>  <span class="caret"></span>
        			</button>

                </div>



        			<div class="navbar-collapse collapse">
        				<ul class="nav navbar-nav navbar-left">
        					<li class="flag-menu country-flag tooltipHere hidden-xs nav-item" data-toggle="tooltip"
        						data-placement="bottom" title="Select Country">	<a href="#select-country" data-toggle="modal" class="nav-link">

        						<span class="flag-icon flag-icon-us"></span> <span class="caret"></span>

        					</a>
        					</li>
        				</ul>
        				<ul class="nav navbar-nav ml-auto navbar-right">
        					<li class="nav-item"><a href="category.html" class="nav-link"><i class="icon-th-thumb"></i> All Ads</a>
        					</li>
        					<li class="dropdown no-arrow nav-item"><a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

        						<span>Jhon Doe</span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
        						<ul
        								class="dropdown-menu user-menu dropdown-menu-right">
        							<li class="active dropdown-item"><a href="account-home.html"><i class="icon-home"></i> Personal Home

        							</a>
        							</li>
        							<li class="dropdown-item"><a href="account-myads.html"><i class="icon-th-thumb"></i> My ads </a>
        							</li>
        							<li class="dropdown-item"><a href="account-favourite-ads.html"><i class="icon-heart"></i> Favourite ads </a>
        							</li>
        							<li class="dropdown-item"><a href="account-saved-search.html"><i class="icon-star-circled"></i> Saved search

        							</a>
        							</li>
        							<li class="dropdown-item"><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Archived ads

        							</a>
        							</li>
        							<li class="dropdown-item"><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending

        								approval </a>
        							</li>
        							<li class="dropdown-item"><a href="statements.html"><i class=" icon-money "></i> Payment history </a>
        							</li>
        							<li class="dropdown-item"><a href="login.html"><i class=" icon-logout "></i> Log out </a>
        							</li>
        						</ul>
        					</li>
        					<li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link" href="post-ads.html">Post Free Add</a>
        					</li>
        					<li class="dropdown  lang-menu nav-item">
        						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
        							<span class="lang-title">EN</span>

        						</button>
        						<ul class="dropdown-menu dropdown-menu-right user-menu" role="menu">
        							<li class="dropdown-item"><a class="active">

        								<span class="lang-name">English</span></a>
        							</li>
        							<li class="dropdown-item"><a><span class="lang-name">Dutch</span></a>
        							</li>
        							<li class="dropdown-item"><a><span class="lang-name">fran&#xE7;ais </span></a>
        							</li>
        							<li class="dropdown-item"><a><span class="lang-name">Deutsch</span></a>
        							</li>
        							<li class="dropdown-item"><a> <span class="lang-name">Arabic</span></a>
        							</li>
        							<li class="dropdown-item"><a><span class="lang-name">Spanish</span></a>
        							</li>
        						</ul>
        					</li>
        				</ul>
        			</div>
        			<!--/.nav-collapse -->
        		</div>
        		<!-- /.container-fluid -->
        	</nav>
        </div>
        <!-- /.header -->

    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <h1>This is regiser fields </h1>
                                        <p>
                                            <select class="selectpicker district">
                                                <option value="14k">14k</option>
                                                <option value="18k">18k</option>
                                                <option value="10k">10k</option>
                                            </select>
                                        </p>
                                        <p>
                                            <select class="selectpicker province">
                                                <option value="Huyện thị">Huyện thị</option>
                                                <option value="Chưa chọn">Chưa chọn tỉnh thành</option>
                                            </select>
                                        </p>
                                        <br><br><br><br><br><br><br><br>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Classified</strong></h3>

                            <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>
                        <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                            <h3><strong>Create and Manage Items</strong></h3>

                            <p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
                                Praesent tristique elit pharetra magna efficitur laoreet.</p>
                        </div>
                        <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Create your Favorite ads list.</strong></h3>

                            <p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
                                Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-container -->

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			<div class="row">

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">About us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">About Company</a></li>
    							<li><a href="#">For Business</a></li>
    							<li><a href="#">Our Partners</a></li>
    							<li><a href="#">Press Contact</a></li>
    							<li><a href="#">Careers</a></li>
    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Help & Contact</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">
    								Stay Safe Online
    							</a></li>
    							<li><a href="#">
    								How to Sell</a></li>
    							<li><a href="#">
    								How to Buy
    							</a></li>
    							<li><a href="#">Posting Rules
    							</a></li>

    							<li><a href="#">
    								Promote Your Ad
    							</a></li>

    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">More From Us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="faq.html">FAQ
    							</a></li>
    							<li><a href="blogs.html">Blog
    							</a></li>
    							<li><a href="#">
    								Popular Searches
    							</a></li>
    							<li><a href="#"> Site Map
    							</a></li> <li><a href="#"> Customer Reviews
    						</a></li>


    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Account</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="account-home.html"> Manage Account
    							</a></li>
    							<li><a href="login.html">Login
    							</a></li>
    							<li><a href="signup.html">Register
    							</a></li>
    							<li><a href="account-myads.html"> My ads
    							</a></li>
    							<li><a href="seller-profile.html"> Profile
    							</a></li>
    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-4 col-xl-4 col-md-4 col-12">
    					<div class="footer-col row">

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="mobile-app-content">
    								<h4 class="footer-title">Mobile Apps</h4>
    								<div class="row ">
    									<div class="col-6  ">
    										<a class="app-icon" target="_blank"  href="https://itunes.apple.com/">
    											<span class="hide-visually">iOS app</span>
    											<img src="<?= $imageFolder ?>site/app_store_badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    									<div class="col-6  ">
    										<a class="app-icon"  target="_blank" href="https://play.google.com/store/">
    											<span class="hide-visually">Android App</span>
    											<img src="<?= $imageFolder ?>site/google-play-badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    								</div>
    							</div>
    						</div>

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="hero-subscribe">
    								<h4 class="footer-title no-margin">Follow us on</h4>
    								<ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
    									<li><a class="icon-color fb" title="Facebook" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i> </a></li>
    									<li><a class="icon-color tw" title="Twitter" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i> </a></li>
    									<li><a class="icon-color gp" title="Google+" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i> </a></li>
    									<li><a class="icon-color lin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i> </a></li>
    									<li><a class="icon-color pin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fa fa-pinterest-p"></i> </a></li>
    								</ul>
    							</div>

    						</div>
    					</div>
    				</div>
    				<div style="clear: both"></div>

    				<div class="col-xl-12">
    					<div class=" text-center paymanet-method-logo">

    						<img src="<?= $imageFolder ?>site/payment/master_card.png" alt="img">
    						<img alt="img" src="<?= $imageFolder ?>site/payment/visa_card.png">
    						<img alt="img" src="<?= $imageFolder ?>site/payment/paypal.png">
    						<img alt="img" src="<?= $imageFolder ?>site/payment/american_express_card.png"> <img alt="img" src="<?= $imageFolder ?>site/payment/discover_network_card.png">
    						<img alt="img" src="<?= $imageFolder ?>site/payment/google_wallet.png">
    					</div>

    					<div class="copy-info text-center">
    						&copy; 2017 BootClassified. All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>
    <!--/.footer-->
