<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Unicorn Hostel - 獨角獸旅舍</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<!--link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'-->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
    
	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/line-icons-pro/styles.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/layer-slider/layerslider/css/layerslider.css">
	<link rel="stylesheet" href="assets/plugins/youtube-player/css/YTPlayer.css">

	<link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!--- added by YunSiang --->
    <link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    <link rel="stylesheet" href="assets/plugins/animated-headline/css/animated-headline.css">
    
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body id="body" class="header-fixed" data-spy="scroll">

    <div class="wrapper">
		<!--=== Header v6 ===-->
		<div class="header-v6 header-dark-transparent header-sticky">
			<!-- Navbar -->

			<div class="navbar mega-menu" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="menu-container">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- Navbar Brand -->
						<div class="navbar-brand">
							<a href="index.html">
								<img class="default-logo" src="images/logo/unicorn_hostel_desktop.png" alt="Logo">
								<img class="shrink-logo" src="images/logo/unicorn_hostel_mobile.png" alt="Logo">
							</a>
						</div>
						<!-- ENd Navbar Brand -->

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="menu-container">
							<ul class="nav navbar-nav">
								<!-- Home -->
								<li class="page-scroll">
									<a href="#body">首頁</a>
								</li>
								<!-- End Home -->

								<!-- Service -->
								<li class="page-scroll">
									<a href="#service">服務</a>
								</li>
								<!-- End Service -->
                                
                                <!-- Location -->
								<li class="page-scroll">
									<a href="#location">位置</a>
								</li>
								<!-- End Location -->

								<!-- Room Type -->
								<li class="page-scroll">
									<a href="#room">房型</a>
								</li>
								<!-- End Room Type -->

								<!-- Booking Room -->
								<li class="page-scroll">
									<a href="#booking">訂房</a>
								</li>
								<!-- End Booking Room -->

								<!--- Contact Us -->
								<li class="page-scroll">
									<a href="#contact">聯絡我們</a>
								</li>
								<!-- End Contact Us -->
							</ul>
						</div>
					</div><!--/navbar-collapse-->
				</div>
			</div>

			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->

        <section id="booking">
			<div class="container">
				<div class="headline-left margin-bottom-40 margin-top-120">
					<h2 class="headline-brd">查 詢 床 位</h2>
				</div><!--/end Headline Left-->

				<!-- Booking Forms -->
                    <div class="tab-pane fade in active" id="home-1">
                        <form action="#" id="sky-form" class="sky-form margin-bottom-60">
                            <header>訂房資料</header>
                            <fieldset>
                                <div class="row">        
                                    <section class="col col-6">
                                        <label class="label">入住時間</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="start" id="start" placeholder="Check-in date">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="label">退房時間</label>
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="finish" id="finish" placeholder="Check-out date">
                                        </label>
                                    </section>
                                </div>
							<div class="row">
                                <section class="col col-6">
                                    <label class="label">選擇房型</label>
                                    <label class="select">
                                        <select name="select1" id="select1">
                                            <option value="0">Select Room Type</option>
                                            <option value="1">雙人獨立房</option>
                                            <option value="2">女生 6 人房</option>
                                            <option value="3">混合 4 人房</option>
                                            <option value="4">混合 6 人房</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">選擇床位</label>
                                    <label class="select">
                                        <select name="select2" id="select2">
                                            <option value="0">&larr;Select Room Type First</option>
                                            <option value="1">1 個床位</option>
                                            <option value="1">2 個床位</option>
                                            <option value="2">1 個床位</option>
                                            <option value="2">2 個床位</option>
                                            <option value="2">3 個床位</option>
                                            <option value="2">4 個床位</option>
                                            <option value="2">5 個床位</option>
                                            <option value="2">6 個床位</option>
                                            <option value="3">1 個床位</option>
                                            <option value="3">2 個床位</option>
                                            <option value="3">3 個床位</option>
                                            <option value="3">4 個床位</option>
                                            <option value="4">1 個床位</option>
                                            <option value="4">2 個床位</option>
                                            <option value="4">3 個床位</option>
                                            <option value="4">4 個床位</option>
                                            <option value="4">5 個床位</option>
                                            <option value="4">6 個床位</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </section>
							</div>
                                
                            <div class="col-md-3">
                                <!-- Red Panel with Equal Height -->
                                <div class="panel panel-red equal-height-column">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="icon-info"></i> 付費注意</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h4>目前只接受現金支付<br/>CASH Only</h4>
                                        <p>本旅宿無法提供發票或收據。</p>
                                    </div>
                                </div>
                                <!-- End Red Panel with Equal Height -->
                            </div>
                                                      
                            <div class="col-md-9">
                                <!-- Red Panel with Equal Height -->
                                <div class="panel panel-red equal-height-column">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="icon-info"></i> 入住時間&nbsp;&nbsp;住房守則</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h4>入住時間：1400&nbsp;&nbsp;&nbsp;&nbsp;退房時間：1200</h4>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>嚴禁吸菸。</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>住房時需提供護照或身分證之有效證件。</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>如果您的抵達時間會超過晚上8點，請您務必在3天之前提早通知我們，否則您有可能會無法入住（我們有提供機場預定接送服務）。</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>若您需要取消預定，請您務必至少在3天之前提早通知我們。</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>任何當日的取消我們將無法退還已支付的費用。</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                <!-- End Red Panel with Equal Height -->
                            </div>                               
                            </fieldset> 
                            
                            
                            <footer>
                                <button type="submit" class="btn-u"> 查 詢 </button>
				            </footer>
                        </form>
                        <div class="margin-bottom-60"></div>
                        
                    </div>
                <!-- End Booking Forms -->
			</div><!--/end container-->
        </section>


		<!--=== Footer Version 1 ===-->
        <section id="contact">
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-8 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="images/logo/unicorn_hostel_footer.png" alt=""></a>
							<p>因為熱愛台灣這塊土地，更熱愛台灣特有的人情味與在地生活，決定在台中成立　Unicorn Hostel/獨角獸青年旅舍，提供給更多旅人認識台灣並互相交流的舒適環境。</p>
                            <p>As for the passion for Taiwan and enjoy unique warmness, friendliness and lifestyle of Taiwan. We decide to establish Unicorn Hoste in Taichung to offer more travelers to know more about Taiwan and own a comfortable environment of exchange.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Address -->
						<div class="col-md-4 map-img md-margin-bottom-40">
							<div class="headline"><h2>聯絡我們</h2></div>
							<address class="md-margin-bottom-40">
								407 台灣台中市西屯區杏林路83巷18號 <br />
								Email: <a href="mailto:scherkimo@gmail.com" class="">scherkimo@gmail.com</a><br />
                                Tel: ＋886 912 378 070<br />
                                QQ: 1526317569<br />
                                微信: Unicorn_1014<br />
                                LINE ID: Unicorn_1014
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; 獨角獸旅舍 All Rights Reserved.
								<a href="#">隱私權</a> | <a href="#">服務條款</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="https://www.facebook.com/unicorntrip/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
        </section>
	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->

	<script src="fix/smoothScroll.js"></script>
    <script>
        $('.nav a').smoothScroll();
    </script>
    <script src="assets/plugins/jquery.easing.min.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/wow-animations/js/wow.min.js"></script>
	<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>

	<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <!--- added by YunSiang --->
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    
    <script type="text/javascript" src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
	
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/masking.js"></script>
	<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			Masking.initMasking();
			Datepicker.initDatepicker();
			Validation.initValidation();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>    
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->


	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/plugins/fancy-box.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			new WOW().init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
    <script type="text/javascript">
        var $select1 = $( '#select1' ),
            $select2 = $( '#select2' ),
        $options = $select2.find( 'option' );

    $select1.on( 'change', function() {
        $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
    } ).trigger( 'change' );
    </script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
