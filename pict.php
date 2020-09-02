<?php 
   $koneksi=mysqli_connect("localhost", "root", "", "db_web"); 
   $result=mysqli_query($koneksi, "SELECT *FROM pict");

     
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>All About 세븐틴</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
	<link rel="icon" href="icon.jpg" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo" style="width: 8%">
	         <img src="logo.jpg" style="width: 60%">
	      </div>

	   	<nav id="main-nav-wrap">
        <ul class="main-navigation sf-menu">
          <li><a href="index.html" title="">Home</a></li>
               <li class="has-children">
                  <a href="profile.php" title="">Profile</a>
                  <ul class="sub-menu">
                     <li><a href="hiphop.php">Hip-Hop</a></li>
                     <li><a href="popo.php">Perfomance</a></li>
                     <li><a href="vocal.php">Vocal</a></li>
                  </ul>
               </li>
               <li><a href="album.php" title="">Albums</a></li>
               <li><a href="videos.php" title="">Videos</a></li>
               <li class="current"><a href="pict.php" title="">HD Pictures</a></li>
               <li><a href="konser.php" title="">Concerts</a></li>
               <li><a href="awrd.html" title="">Awards</a></li>
               <li><a href="news.php" title="">News</a></li>
          <li><a href="about.html" title="">Seventeen</a></li>  
          <li><a href="contact.html" title="">Contact Us</a></li>                   
        </ul>
      </nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

          <?php while ($row=mysqli_fetch_assoc($result)): ?>
         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
	                  <img src="svt/<?php echo $row["file"]; ?>" style="width: 120%">             
               </div>

        		</article> <!-- end article -->
            <?php endwhile; ?>

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
	                  <img src="home/hip.jpg" alt="hip-hop">                   
               </div>
               
        		</article> <!-- end article -->

         	<article class="brick entry animate-this">

               <div class="entry-thumb">
	                  <img src="home/vocal.jpeg" alt="vocal">  
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry animate-this" >

               <div class="entry-thumb">
	                  <img src="home/perf.jpg" alt="Perfomance">   
               </div>

        		</article> <!-- end article -->        	

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About This Website</h4>

	               <p>
		          	JUST FOR FUN
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Seventeen Acc</h4>

	      		<ul>
	      			<li><a href="https://twitter.com/pledis_17">@pledis_17</a></li>
						<li><a href="https://id-id.facebook.com/seventeennews/">@seventeennews</a></li>
						<li><a href="https://www.instagram.com/saythename_17/?hl=id">@saythename_17</a></li>
						<li><a href="http://www.seventeen-17.com/">@SEVENTEEN</a></li>
                  <li><a href="http://www.pledis.co.kr/">@pledis</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
						<li><a href="riskiaramadina35@gmail.com">Email</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Me</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>