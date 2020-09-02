<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Admin</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		
	</head>
	<body>
		
		
		<!--=====================================================
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#intro' class='section-toggle' data-section='intro' >
								Home
							</a>
						</li>
						
						<li>
							<a href='#news' class='section-toggle' data-section='news' >
								News
							</a>
						</li>

						<li>
							<a href='#aww' class='section-toggle' data-section='aww' >
								Concerts and Tours
							</a>
						</li>

						<li>
							<a href='login.php' class='section-toggle' data-section='aww' >
								Logout
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1>WELCOME TO ADMIN PAGE</h1>
									
									<p>
										SEVENTEEN's FANSSITE
									</p>
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				<!--=====================================================
					News Section
				=====================================================-->
				<section id='news' class='section about-section border-d' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1 style="color: blue;">ADMIN PAGE</h1>
									
									<p style="color: blue;">
										EDIT NEWS
									</p>

									<div class='intro-btns'>
										
										<a href='insertn.php' class='btn-custom section-toggle' style="color: blue;">
											Insert
										</a>
										
										<a href='updaten.php' class='btn-custom section-toggle' style="color: blue;">
											Update
										</a>

										<a href='datanews.php' class='btn-custom section-toggle' style="color: blue;">
											Datas
										</a>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				<!--=====================================================
					Awward Section
				=====================================================-->
				<section id='aww' class='section about-section border-d' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1 style="color: blue;">ADMIN PAGE</h1>
									
									<p style="color: blue;">
										EDIT CONCERTS & TOURS
									</p>

									<div class='intro-btns'>
										
										<a href='insertk.php' class='btn-custom section-toggle' style="color: blue;">
											Insert
										</a>
										
										<a href='updatek.php' class='btn-custom section-toggle' style="color: blue;">
											Update
										</a>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
			</div>
			
		</div>
		
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		
	</body>
</html>