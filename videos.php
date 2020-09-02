<?php 
   $koneksi=mysqli_connect("localhost", "root", "", "db_web"); 
   $result=mysqli_query($koneksi, "SELECT *FROM komen");

     
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
               <li class="current"><a href="videos.php" title="">Videos</a></li>
               <li><a href="pict.php" title="">HD Pictures</a></li>
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


   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-video">  

   				<div class="content-media">
					<div class="entry-thumb video-image" align="center">
                  		<a href="https://www.youtube.com/watch?v=9M7k9ZV67c0" data-lity>
	                 		<img src="video/mansae.jpg" alt="" style="width: 60%">                   
                  		</a>
               		</div>

                     <h1 class="entry-title" align="center">Mansae</h1>

					</div>

               <div class="content-media">
               <div class="entry-thumb video-image" align="center">
                        <a href="https://www.youtube.com/watch?v=BgR_HJ7aGDY" data-lity>
                        <img src="call.jpg" alt="" style="width: 60%">                   
                        </a>
                     </div>

                     <h1 class="entry-title" align="center">Call Call Call</h1>

               </div>

					<div class="primary-content">	

                  <div class="author-profile">
                     <img src="hom.jpg" alt="">

                     <div class="about">
                        <h4><a href="#">Riskia Dinda R</a></h4>
                     
                        <p>Riskia Dinda R.
                        </p>

                        <ul class="author-social">
                           <li><a href="#">Facebook</a></li>
                           <li><a href="#">Twitter</a></li>
                           <li><a href="#">GooglePlus</a></li>
                           <li><a href="#">Instagram</i></a></li>                      
                        </ul>
                     </div>
                  </div> <!-- end author-profile -->                 

               </div> <!-- end entry-primary -->                  

            </article>
         

         </div> <!-- end col-twelve -->
      </div> <!-- end row -->

      <div class="comments-wrap">
         <div id="comments" class="row">
            <div class="col-full">

               <h3>Comments</h3>

               <!-- commentlist -->
               <ol class="commentlist">

                  <li class="depth-1">

                     <div class="comment-content">

                        <?php while ($row=mysqli_fetch_assoc($result)): ?>
                        <div class="comment-info">
                           <cite><?php echo $row["nama"]; ?><br></cite>
                        </div>

                        <div class="comment-text">
                           <p><?php echo $row["komentar"]; ?></p>
                        </div>
                        <?php endwhile; ?>

                     </div>

                  </li>

               </ol> <!-- Commentlist End -->                

               <!-- respond -->
               <div class="respond">

                  <h3>Leave a Comment</h3>

                  <form name="contactForm" id="contactForm" method="post" action="komen_proses.php">
                  <fieldset>

                     <div class="form-field">
                        <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                     </div>

                     <button type="submit" class="submit button-primary">Submit</button>

                  </fieldset>
                  </form> <!-- Form End -->

               </div> <!-- Respond End -->

            </div> <!-- end col-full -->
         </div> <!-- end row comments -->
      </div> <!-- end comments-wrap -->

   </section> <!-- end content -->


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