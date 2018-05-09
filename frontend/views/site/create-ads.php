<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use frontend\models\Province;
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
                <div class="col-md-3 page-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class="user-panel-sidebar">
                                <div class="collapse-box">
                                    <h5 class="collapse-title no-border"> My Classified <a href="#MyClassified"  aria-expanded="true"  data-toggle="collapse"
                                                                                           class="pull-right"><i
                                            class="fa fa-angle-down"></i></a></h5>

                                    <div class="panel-collapse collapse show" id="MyClassified">
                                        <ul class="acc-list">
                                            <li><a class="active" href="account-home.html"><i class="icon-home"></i>
                                                Personal Home </a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->
                                <div class="collapse-box">
                                    <h5 class="collapse-title"> My Ads <a href="#MyAds" aria-expanded="true"  data-toggle="collapse"
                                                                          class="pull-right"><i
                                            class="fa fa-angle-down"></i></a></h5>

                                    <div class="panel-collapse collapse show" id="MyAds">
                                        <ul class="acc-list">
                                            <li><a href="account-myads.html"><i class="icon-docs"></i> My ads <span
                                                    class="badge">42</span> </a></li>
                                            <li><a href="account-favourite-ads.html"><i class="icon-heart"></i>
                                                Favourite ads <span class="badge badge-secondary">42</span> </a></li>
                                            <li><a href="account-saved-search.html"><i class="icon-star-circled"></i>
                                                Saved search <span class="badge badge-secondary">42</span> </a></li>
                                            <li><a href="account-archived-ads.html"><i class="icon-folder-close"></i>
                                                Archived ads <span class="badge badge-secondary">42</span></a></li>
                                            <li><a href="account-pending-approval-ads.html"><i
                                                    class="icon-hourglass"></i> Pending approval <span
                                                    class="badge">42</span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->

                                <div class="collapse-box">
                                    <h5 class="collapse-title"> Terminate Account <a href="#TerminateAccount"
                                                                                     aria-expanded="true"  data-toggle="collapse"
                                                                                     class="pull-right"><i
                                            class="fa fa-angle-down"></i></a></h5>

                                    <div class="panel-collapse collapse show" id="TerminateAccount">
                                        <ul class="acc-list">
                                            <li><a href="account-close.html"><i class="icon-cancel-circled "></i> Close
                                                account </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.collapse-box  -->
                            </div>
                        </div>
                        <!-- /.inner-box  -->

                    </aside>
                </div>
                <!--/.page-sidebar-->

                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <div class="row">
                            <div class="col-md-5 col-xs-4 col-xxs-12">
                                <h3 class="no-padding text-center-480 useradmin"><a href=""><img class="userImg"
                                                                                                 src="<?= $imageFolder ?>user.jpg"
                                                                                                 alt="user"> Jhon Doe
                                </a></h3>
                            </div>
                            <div class="col-md-7 col-xs-8 col-xxs-12">
                                <div class="header-data text-center-xs">

                                    <!-- Traffic data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with red background -->
                                            <i class="fa fa-eye ln-shadow"></i></div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">7000</a> <em>visits</em></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- revenue data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with green background -->
                                            <i class="icon-th-thumb ln-shadow"></i></div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">12</a><em>Ads</em></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- revenue data -->
                                    <div class="hdata">
                                        <div class="mcol-left">
                                            <!-- Icon with blue background -->
                                            <i class="fa fa-user ln-shadow"></i></div>
                                        <div class="mcol-right">
                                            <!-- Number of visitors -->
                                            <p><a href="#">18</a> <em>Favorites </em></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner-box">
                        <div class="welcome-msg">
                            <h3 class="page-sub-header2 clearfix no-padding">Hello Jhon Doe </h3>
                            <span class="page-sub-header-sub small">You last logged in at: 01-01-2014 12:40 AM [UK time (GMT + 6:00hrs)]</span>
                        </div>
                        <?php $form = ActiveForm::begin(['id'=>'createAds-form']); ?>
                        <div id="accordion" class="panel-group">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title"><a href="#collapseB1" aria-expanded="true"  data-toggle="collapse" > Nội dung </a></h4>
                                </div>
                                <div class="panel-collapse collapse show" id="collapseB1">
                                    <div class="card-body">
                                        <p>
                                        <?= $form->field($model,'header'); ?>
                                        <?= $form->field($model,'brief_content')->textarea(['rows'=>3]); ?>
                                        <?= $form->field($model,'content')->textarea(['rows'=>15]); ?>
                                        <?= $form->field($model,'price')->textInput(['type'=>'number']); ?>
                                        <?= $form->field($model,'discount')->textInput(['type'=>'number']); ?>
                                        <?= $form->field($model,'province')->dropDownList(
                                        ArrayHelper::map(Province::find()->all(),'id','name'),
                                                    [
                                                        'prompt' => 'Tỉnh/thành phố'
                                                    ]
                                    ); ?>
                                        <?= $form->field($model, 'district')->dropDownList([
                                                '0' => 'Chọn huyện/thị'
                                        ]); ?>
                                        <?= $form->field($model, 'ward')->dropDownList([
                                                '0' => 'Chọn xã/phường'
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title"><a href="#collapseB2" aria-expanded="true"  data-toggle="collapse" > Những điều khoản và quy định </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapseB2">
                                    <div class="card-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    THÔNG TIN  

Chương trình Amadeus Rewards nhằm tri ân sự ủng hộ và đóng góp của tất cả các thành viên sử dụng Amadeus với nhiều loại quà tặng đa dạng, phong phú. Trang web này được sở hữu và điều hành bởi Amadeus Việt Nam.

Là thành vien của Amadeus Rewards, mỗi đặt chỗ trên Amadeus sẽ được tích lũy điểm thưởng tương ứng vào tài khoản của thành viên và dễ dàng dùng để đổi quà hoặc các tặng phẩm có trong chương trình.

Sau đây là bản tóm tắt các điều khoản và điều kiện của Amadeus Reward. Các điều khoản và điều kiện có thể được sửa đổi bởi Amadeus Việt Nam mà không cần báo trước, Amadeus Việt Nam có quyền duy nhất đế áp dụng các điều khoản này

 

THÀNH VIÊN

Thành viên được giới hạn cho các cá nhân từ 18 tuổi trở lên cư trú tại Việt Nam, những người sử dụng hệ thống đặt giữ chỗ Amadeus,

Mỗi thành viên chỉ duy trì một tài khoản, dựa Mã Đăng Nhập (Sign-in) và Mã Đại lý (Office ID) của đại lý đã đăng ký với Amadeus

Để tham gia chương trình Amadeus Reward, thành viên phải hoàn thành bản đăng ký trực tuyến có sẵn trên trang chủ Amadeus Rewards và chấp nhận các Điều khoản & Điều kiện của chương trình.

Thành viên phải đăng ký đầy đủ các thông tin trong bản đăng ký. Thành viên có thể giữ lại tài khoản cá nhân trong trường hợp thay đổi Sign-in, Office ID hoặc thay đổi công ty làm việc - vẫn hoạt động trong ngành du lịch và là khách hàng Amadeus, và phải thông báo để Amadeus Việt Nam cập nhật tài khoản. 

 

TÀI KHOẢN VÀ ĐIỂM

Sau khi hoàn thành các bước đăng ký, thành viên sẽ nhận được email xác nhận thông tin và tài khoản của thành viên sẽ được kích hoạt sau khi các thông tin đăng ký được Amadeus Rewards kiểm tra và xác nhận. Điểm sẽ được tính kể từ lúc tài khoản được khởi tạo xong.

Thành viên sẽ sử dụng email và mật khẩu đã đăng ký để đăng nhập và sử dụng Amadeus Rewards. Thành viên phải tự bảo quản thông tin đăng nhập, nếu có bất cứ nghi ngờ về việc xâm nhập hay sử dụng từ bên thứ 3 hãy thông báo ngay cho bộ phân hỗ trợ của Amadeus Rewards. Amadeus Rewards sẽ không chịu trách nhiệm với những tổn thất do các trường hợp trên nếu không nhận được thông báo từ thành viên

Điểm của thành viên sẽ được tính bằng các công thức dựa trên segment thành viên tạo ra cộng với những chương trình thưởng điểm do Amadeus Việt Nam tổ chức. Điểm của thành viên sẽ không được quy đổi thành tiền mặt

Điểm sẽ hết hạn trong vòng 24 tháng kể từ ngày điểm được tạo ra và chưa được sử dụng. Tài khoản nếu không có điểm phát sinh nào trong vòng 12 tháng hoặc những tài khoản không còn Sign-in đăng ký sẽ bị hủy và điểm trong tài khoản đó sẽ được coi như là hết hạn.

 

QUY ĐỊNH CHẤM DỨT, LOẠI TRỪ THÀNH VIÊN

Bất kỳ sự không tuân theo quy định, hoặc sự lạm dùng quyền hạn của chương trình gây tổn hại đến lợi ích, hình ảnh của Amadeus, hoặc các trường hợp sử dụng tài khoản sai mục đích sẽ dẫn đến việc chấm dứt quyền đăng nhập của thành viên.

Amadeus có quyền đóng băng tài khoản trong các trường hợp nghi ngờ mục đích sử dụng tài khoản của thành viên trong thời gian kiểm tra thông tin tài khoản.

 

PHÁP LÝ

Các điều khoản và điều kiện này sẽ được điều chỉnh theo quy định của pháp luật Việt Nam. Trường hợp có một trong các quy định trên là không hợp lệ, điều này không ảnh hưởng đến các điều khoản còn lại.

Trang web và tất cả văn bản, hình ảnh, thông tin bao gồm đều thuộc sở hữu và cấp phép cho Amadeus Việt Nam. Bản quyền và các tài sản sở hữu trí tuệ khác trong nội dung của trang web thuộc về duy nhất và dành riêng cho Amadeus Việt Nam

Mọi thắc mắc hoặc yêu cầu vui lòng liên hệ với ban quản trị Amadeus Rewards Administrator

 

Amadeus Việt Nam
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            <p><p>
                            <?= Html::submitButton('Post',['class'=>'btn btn-success']); ?>
                        </div>
                        <?php $form = ActiveForm::end(); ?>
                        <!--/.row-box End-->

                    </div>
                </div>
                <!--/.page-content-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
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
						<img alt="img" src="<?= $imageFolder ?>site/payment/american_express_card.png"> <img alt="img" src="images/site/payment/discover_network_card.png">
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
 