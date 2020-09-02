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
   <script src="js/jquery-3.3.1.js"></script>

   <!-- favicons
   ================================================== -->
   <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
   <link rel="icon" href="icon.jpg" type="image/x-icon">

   <script >
      $(document).ready(function () {
         $(".title").click(function () {
            $(".content").slideToggle("slow");
         });
         $(".title1").click(function () {
            $(".content1").slideToggle("slow");
         });
         $(".title2").click(function () {
            $(".content2").slideToggle("slow");
         });
      });
   </script>

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
               <li class="has-children" class="current">
                  <a href="profile.php" title="">Profile</a>
                  <ul class="sub-menu">
                     <li><a href="hiphop.php">Hip-Hop</a></li>
                     <li><a href="popo.php">Perfomance</a></li>
                     <li><a href="vocal.php">Vocal</a></li>
                  </ul>
               </li>
               <li><a href="album.php" title="">Albums</a></li>
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

            <article class="format-gallery">  
                  <!-- SCoups -->
                  <p><img src="profile/sc.jpg" alt=""></p>

                  <h2 align="center" class="title">SCoups</h2>

                  <div class="content">
                     <p align="center">Stage name: S.Coups (에스.쿱스) <br>
                     Birth name: Choi Seung Cheol (최승철)<br>
                     Birthday: 08 August 1995<br>
                     Zodiac sign: Leo<br>
                     Nationality: Korean<br>
                     Birthplace: Daegu, South Korea<br>
                     Height: 178 cm (5’10”)<br>
                     Weight: 65 kg (143 lbs)<br>
                     Blood Type: AB<br>
                     Instagram: @sound_of_coups<br>
                     Sub-Unit: Hip-Hop Team (Leader), SVT Leaders<br><br>
                     <h5 align="center">S.Coups facts:</h5><br>
                     <p align="center">
                     – He was born in Daegu, South Korea.<br>
                     – He has an older brother.<br>
                     – Education: Seoul School of Performing Arts (‘14)<br>
                     – He was a trainee for 6 years.<br>
                     – His nicknames are: 17’s Father, Beagle King<br>
                     – He’s one of the original Pledis Boys.<br>
                     – S.Coups was supposed to debut with NU’EST.<br>
                     – He was formally a member of ‘Tempest’ before Seventeen was created.<br>
                     – He’s the dad of the group.<br>
                     – His favorite Korean Singers are Big Bang’s Taeyang & Seol Kyung Goo.<br>
                     – He wants to meet Taeyang.<br>
                     – His dream is to become an actor.<br>
                     – He’s a black belt in Taekwondo (learned it for 7 Years)<br>
                     – He has dimples.<br>
                     – His eyelashes are 1 cm long. (“Weekly Idol”)<br>
                     – His hobby is reading.<br>
                     – He likes sports.<br>
                     – His favorite colors are Red and White.<br>
                     – His favorite number is 8.<br>
                     – He is competitive when playing games.<br>
                     – He prefers tan skin to white skin.<br>
                     – He can’t eat spicy food.<br>
                     – He doesn’t like lemons.<br>
                     – He doesn’t like roller-coasters.<br>
                     – Between Summer or Winter, he prefers Summer.<br>
                     – Prior debut, he featured on After School/Orange Caramel Raina‘s solo song “Superwoman”.<br>
                     – He starred in After School Blue’s “Wonder Boy” MV and NU’EST’s “Face” MV<br>
                     – He was voted by the other members as the manliest member.<br>
                     – He doesn’t exercise much, but his muscles grow quickly.<br>
                     – He says he hates to show his weaknesses but he’s actually very fragile inside.<br>
                     – He says he’s most confident when it comes to power. He’s stronger than all his friends and hyungs, so he calls himself the Beagle King (being crazy).<br>
                     – He said if he could add another member into the Hip Hop unit, he would add Hoshi so he could choreograph their choreographies for them.<br>
                     – His role models are Uknow Yunho, G-Dragon and Zico.<br>
                     – His stage name S.Coups comes from: S – his name Sungcheol, Coups – Coup d’état. (He created his stage name himself. )<br>
                     – The meaning behind his real name is that Seung means clearly winning/winning and the Cheol means fair. It means to win fairly.<br>
                     – He tries to present himself strongly, but in reality, he is someone who’s easily moved to tears. Whenever the members cry, it makes him cry as well. (From Japanese Seventeen Magazine)<br>
                     – Even if he has things that are troubling, he doesn’t sound things out and just work quietly.<br>
                     – The other members go out and do stuff, but he’s a person who has to sleep when he gets the chance. (From Japanese Seventeen Magazine)<br>
                     – He likes wearing refreshing and cool accessories to give him an edge.<br>
                     – He goes shopping with Mingyu to his recommended stores. (From Japanese Seventeen Magazine)<br>
                     – If anything, he’s reliable. There are many times younger fans ask, “Can I call you Oppa?” and older fans think he looks like a reliable person, which makes him happy. Some people who relies on him are Jeonghan and Seungkwan. When they speak to him about their troubles, he gives them honest answers. (From Japanese Seventeen Magazine)<br>
                     – He’s a mischievous person. He splashes water on his friends who are sleeping with their heads on the table and run away quickly. He’s close with his teachers and keeps in contact with them even now. (From Japanese Seventeen Magazine)<br>
                     – In “One Fine Day” he said he finds cool two types of people: people who can play the piano and people that can cook.<br>
                     – He easily gets scared by many things.<br>
                     – He likes the kind of sport where he could compete with others because he’s a very competitive person.<br>
                     – In One Fine Day Japan, it was said that during trainee year, Mingyu told Jeonghan, who was a new trainee, to call him senior/’sunbae-nim’. Later during a fansign, it was revealed that S.Coups was the mastermind behind it, he was the one telling Mingyu to do so.<br>
                     – If S.Coups was a girl, and would have to pick someone in SVT to date, he would pick himself because he said that he’s good looking. (One Fine Day)<br>
                     – S.Coups’s ideal type is someone who can cook well and who eats a lot.</p>
               </p>
                  </div>

                  <!-- Woozi -->
                  <p><img src="profile/wz.jpg" alt=""></p>

                  <h2 align="center" class="title1">Woozi</h2>

                  <div class="content1">
                     <p align="center">Stage Name: Woozi (우지)<br>
                        Birth Name: Lee Jihoon (이지훈)<br>
                        Birthday: 22 November 1996<br>
                        Zodiac sign: Scorpio/Sagittarius cusp<br>
                        Nationality: Korean<br>
                        Hometown: Busan, South Korea<br>
                        Height: 165 cm (5’5″)<br>
                        Weight: 54kg (119lbs)<br>
                        Blood Type: A<br>
                        Instagram: @woozi_universefactory<br>
                        Sub-Unit: Vocal Team (Leader); SVT Leaders<br><br>
                     <h5 align="center">Woozi facts:</h5><br>
                     <p align="center">
                        – He was born in Busan, South Korea.<br>
                        – He’s an only child.<br>
                        – Education: Hanlim Multi Arts High School (‘15)<br>
                        – He was a trainee for 5 years.<br>
                        – He was a former member of ‘Tempest’ before Seventeen was created.<br>
                        – When he was younger, he did classic music for a long time. He played the clarinet and band instruments.<br>
                        – Because he’s a little too serious sometimes, he has the nickname ‘documentary’.<br>
                        – He plays the guitar & piano.<br>
                        – He enjoys producing, composing, writing lyrics.<br>
                        – He composes and makes the lyrics for most of Seventeen’s songs.<br>
                        – He admitted he feels burdened being Seventeen’s composer because he’s afraid if they fail, it would be his fault.<br>
                        – Woozi has worked with Ailee, Kanto, and composed for 4 other groups (I.O.I included).<br>
                        – Articles have titled him as a composing monster.<br>
                        – Woozi is close to B.A.P‘s Himchan. (B.A.P’s Celuv iTV ‘I am Celeb’)<br>
                        – He wants to meet Justin Bieber.<br>
                        – When he was younger, he did classic music for a long time. He played the clarinet and band instruments.<br>
                        – Woozi was supposed to be in the performance team, but since he’s making songs he got into vocal team.<br>
                        – Woozi never had a girlfriend. (As of 2017)<br>
                        – He was voted by the other members as the most hard working member, along with Soonyoung.<br>
                        – He views himself as being very calm, serious and careful.<br>
                        – DK has chosen him as the member he was awkward with before, so Woozi started calling him Dokyeom-shi (formal).<br>
                        – His hobby is enjoying music.<br>
                        – His favorite food is Jjajangmyun (Black Bean Noodles) & Spicy Ramyun Noodles mix together.<br>
                        – He can’t eat really spicy food.<br>
                        – He likes sports.<br>
                        – He likes dogs.<br>
                        – He’s a fan of the X-Men series. He likes watching films with Hugh Jackman in them.<br>
                        – Between Winter or Summer, he prefers Winter.<br>
                        – He was in Hello Venus’ “Venus” MV, NU’EST’s “Face” MV, and Orange Caramel’s “My Copycat” MV<br>
                        – His role models are Chris Brown and Park Jin Young.<br>
                        – S.Coups felt sorry for Woozi because he felt like Woozi was more of a leader than he is, because Woozi is the one who makes Seventeen work.<br>
                        – He probably seems shy and blunt, but he has profound emotion, and once he becomes close to someone, such a close relationship will continue forever. (Japanese Seventeen Magazine)<br>
                        – He is the album producer. He decides the concept, makes the songs, writes the lyrics, and thinks about what order they should go in. Seventeen’s musical composition is worked on by all the members, but about 80% of it is done by him. It makes him happier than anything when fans says their songs are good. (Japanese Seventeen Magazine)<br>
                        – He spends his time listening to music and playing games on the computer. He’s loved anime since he was young.<br>
                        – He liked exquisite clothes that aren’t too fashionable, but also aren’t too comfortable. he’s the type of person who buys simple yet detailed clothes without hesitation. (Japanese Seventeen Magazine)<br>
                        – He was an active kid, playing baseball as a catcher in elementary school. (Japanese Seventeen Magazine)<br>
                        – The meaning behind his real name is that Ji means ‘know’, Hoon means ‘service’. It means to know my service.<br>
                        – Woozi and Suga (BTS) are said to look alike. Woozi is said to look like Suga’s little brother.<br>
                        – Woozi collaborated with EXO’s Chanyeol for a song entitled “Give Me That”.<br>
                        – Woozi’s ideal type: a girl who is bright and friendly. He’s never had a girlfriend. He doesn’t even have friends that are girls.</p>
               </p>
                  </div>

                 <!--  Hoshi -->
                 <p><img src="profile/hs.jpeg" alt=""></p>

                  <h2 align="center" class="title2">Hoshi</h2>

                  <div class="content2">
                     <p align="center">Stage Name: Hoshi (호시)<br>
                        Birth Name: Kwon Soonyoung (권순영)<br>
                        Position: Performance Team Leader, Main Dancer, Lead Vocalist<br>
                        Birthday: 15 June 1996<br>
                        Zodiac sign: Gemini<br>
                        Nationality: Korean<br>
                        Hometown: Namyangju-si, Gyeonggi-do, South Korea<br>
                        Height: 178 cm (5’10”)<br>
                        Weight: 60 kg (132 lbs)<br>
                        Blood Type: B<br>
                        Sub-Unit: Performance Team (Leader), SVT Leaders; BOOSEOKSOON<br><br>
                     <h5 align="center">Hoshi facts:</h5><br>
                     <p align="center">
                        – He was born in Namyangju-si, Gyeonggi-do, South Korea.<br>
                        – He has an older sister.<br>
                        – Education: Maseok High School<br>
                        – His nicknames are Mr. Dumbbell, 10:10 O’Clock (because of his eyes), Hoshi-tam tam.<br>
                        – He was a trainee for 4 years.<br>
                        – He choreographs most of Seventeen’s routines.<br>
                        – He is a black belt in Taekwondo and was a Taekwondo champion when he was young.<br>
                        – He speaks Japanese very well.<br>
                        – Also, he speaks basic Chinese.<br>
                        – He had braces before, but had them removed.<br>
                        – He likes to collect bizarre photos of the members. He deleted most of them in case he loses his phone. He says he has the most bizarre photos of DK.<br>
                        – His hobby is Taekwondo (he is a black belt in Taekwondo)<br>
                        – He likes Japanese food.<br>
                        – Hoshi’s favorite colors are black & white.<br>
                        – He is a big SHINee fan.<br>
                        – He would like to meet Chris Brown, Usher, Beyonce & SHINee.<br>
                        – He was voted by the other members as the most hard working member, along with Woozi.<br>
                        – He was voted by the other members as the member with the most aegyo.<br>
                        – He is the mood maker, along With SEUNGKWAN and DK.<br>
                        – He said the hardest time in his life was when his friends and family would ask him when he would debut but he couldn’t tell them since he didn’t know himself.<br>
                        – S.Coups chose Hoshi as the member who could be the leader, he says he has a lot of charisma.<br>
                        – His role model is choreographer Keone Madrid. He says his dances are original and attracts people with the beats. He wants to be a person who is original and stylish when it comes to dance.<br>
                        – His stage name means star in Japanese.<br>
                        – The meaning behind his real name is that Kwon means ‘power’, Soon means ‘innocent’ and Young means ‘glorious’. It means be powerful by being innocent and glorious. He thinks he’s a powerful team leader for the Performance team.<br>
                        – Hoshi got accepted into Dong Ah Institute of Media and Arts (2017 freshman class). He’s pursuing a K-pop performance major at the Institute’s Division of Entertainment in Broadcasting. He graduated from high school in February 2015.<br>
                        – He appeared in NU’EST’s “FACE” MV, alongside with Mingyu, Wonwoo, and S.Coups.<br>
                        – If he had to describe himself in a few words, it would be “good personality.” He’s a boy who’s considerate/thoughtful. He understands others well and he’s kind. he would also like if people would notice how he’s full of confidence, cute, and cool! (in Japanese, it sounds more humble)<br>
                        – When everyone’s spirits are low, he stirs up the mood and encourages them. On the contrary, when spirits are too high, he tries being quiet. He’s always looking out for them because he’s a good person. (Japanese Seventeen Magazine)<br>
                        – He likes sushi, okonomiyaki, ramen, sukiyaki, and shabu shabu. he loves the convenience stores since they heat up lunch boxes for him. (Japanese Seventeen Magazine)<br>
                        – His style: big sized knitted clothes, rolled up skinny pants, with black visible socks — he likes this kind of balance. He looks at foreign clothes collections on the Internet. He’s very interested in being fashionable. (Japanese Seventeen Magazine)<br>
                        – As a younger boy, he looked up to their senior artist, SHINee’s Taemin, and from his 3rd year of middle school, he started his life as a trainee and spent every day taking dance and vocal lessons. He also valued his sleep time, but then debut drew close and he frantically worked hard. (Japanese Seventeen Magazine)<br>
                        – Honestly, when their debut was delayed, he became upset, but he didn’t give up and worked tirelessly every day on things he could do. Thus, now he’s able to stand on stage as an artist and perform. (Japanese Seventeen Magazine)
                        – Hoshi is close to B.A.P’s Zelo. (B.A.P’s Celuv iTV ‘I am Celeb’)<br>
                        – He has no experience in dating. His mother told him to study first and date girls later in college.<br>
                        – Hoshi’s ideal type is someone who is fragrant and likes him.</p>
               </p>
                  </div>

                  <div class="author-profile">
                     <img src="hom.jpg" alt="" sizes="4%">

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
                        <input name="nama" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="komentar" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
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