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
               <li class="current"><a href="album.php" title="">Albums</a></li>
               <li><a href="videos.php" title="">Videos</a></li>
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

   			<article class="format-audio">  

   				<div class="content-media">
						<div class="post-thumb" align="center">
							<img src="ymmd.jpg" style="width: 30%"> 
						</div>  
						<div class="audio-wrap" align="center">
                  	<audio id="player2" src="ohmy.mp3" width="30%" height="42" controls="controls"></audio>                  	
                  </div> 
					</div>

					<div class="primary-content">
                  <h1 class="entry-title" align="center">You Make My Day</h1>   

                  <ul class="entry-meta">
                     <li class="date">July 16, 2018</li>       
                  </ul>                

                  <p class="lead">You Make My Day is the fifth extended play by South Korean boy band Seventeen. It was released on July 16, 2018, through Pledis Entertainment. Their new album release has been topping charts and Oh My! have won a few weekly music shows already, further proving their status in the industry.</p> 

                  <p><h4>Track List :</h4>
                     1. "Oh My! (어쩌나)" (Title Track)<br>
                     2. "Holiday"<br>
                     3. "Come To Me (나에게로 와)" (Vocal Team)<br>
                     4. "What’s Good" (Hip Hop Team)<br>
                     5. "Moonwalker" (Performance Team)<br>
                     6. "Our Dawn Is Hotter Than Day (우리의 새벽은 낮보다 뜨겁다)"
                  </p>

               <div class="content-media">
                  <div class="post-thumb" align="center">
                     <img src="home/ymmd.jpg" style="width: 30%"> 
                  </div>  
                  <div class="audio-wrap" align="center">
                     <audio id="player2" src="home.mp3" width="30%" height="42" controls="controls"></audio>                     
                  </div> 
               </div>

						<h1 class="entry-title" align="center">You Made My Dawn</h1>	

						<ul class="entry-meta">
							<li class="date">January 21, 2019</li>			
						</ul>						

						<p class="lead">You Made My Dawn is the sixth extended play by South Korean boy band Seventeen. It was released on January 21, 2019, through Pledis Entertainment. It debuted atop the Gaon Album Chart, Oricon Albums Chart and at number four on the US Billboard World Albums chart. Joshua said the title is a continuation of the theme of their previous EP, You Make My Day, in that "You made my darkness into dawn. The sun comes in to make the night a little brighter and it progresses into day, right? That's why we tried to compare the flow of emotions to the sun.</p> 

						<p><h4>Track List :</h4>
							1. "Good to Me"	By WooziBumzu Length 3:09<br>
							2. "Home" By WooziBumzuSeungkwan Length 3:23<br>
							3. "포옹" (Hug) (Vocal team)	By Woozi Length 2:39<br>
							4. "칠리" (Chilli) (Hiphop team)	By SCoupsVernonMingyuWonwoo Length 3:03<br>
							5. "Shhh (Performance team)" By BumzuHoshiDino Length 3:06<br>
							6. "숨이 차" (Getting Closer) By WooziBumzuS.CoupsVernon Length 3:03<br>
						</p>

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

               <div class="pagenav group">
                  <div class="prev-nav">
                     <a href="#" rel="prev">
                        <span>Previous</span>
                     </a>
                  </div>
                  <div class="next-nav">
                     <a href="#" rel="next">
                        <span>Next</span>
                     </a>
                  </div>               
               </div>

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