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
    			</span>VIMUABAN<span>.com </span> </a>


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
    <!-- /.header 
        ####### FIND BAR #######
      -->

     <div class="intro" style="background-image: url(<?php echo 'http://' . $_SERVER['SERVER_NAME'] .'/services/frontend/web/images/bg3.jpg'?>);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Tìm là thấy </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                        Find local classified ads on bootclassified in Minutes
                    </p>

                    <div class="row search-row animated fadeInUp">
                        <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                            <i class="icon-location-2 icon-append"></i>
                            <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="City/Zipcode..." value="">

                        </div>
                        <div class="col-xl-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon"
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block"><i
                                    class="icon-search"></i><strong>Find</strong></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> 
    <!-- /.intro -->
    <!-- ################ CONTENT ##################-->
    <div class="main-container">
    <div class="container">
                <h1>This is content  </h1>

    </div>
    <!-- /.main-container -->

    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising department
                    at (000) 555-5556</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">

    		</div>
    	</div>
    </footer>
    </div>