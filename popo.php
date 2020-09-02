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
         $(".title3").click(function () {
            $(".content3").slideToggle("slow");
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
                  <!-- jun -->
                  <p><img src="profile/jun.jpg" alt=""></p>

                  <h2 align="center" class="title">Jun</h2>

                  <div class="content">
                     <p align="center">Stage Name: Jun (준)<br>
                     Birth Name: Wen Junhui (文俊辉)<br>
                     Position: Lead Dancer, Sub Vocalist<br>
                     Birthday: 10 June 1996<br>
                     Zodiac sign: Gemini<br>
                     Nationality: Chinese<br>
                     Hometown: Shenzhen, Guangdong, China<br>
                     Height: 182 cm (6’0″)<br>
                     Weight: 66 kg (145 lbs)<br>
                     Blood Type: B<br>
                     Sub-Unit: Performance Team<br>
                     Weibo: wenjunhui<br><br>
                     <h5 align="center">Jun facts:</h5><br>
                     <p align="center">
                     – He was born in Shenzhen, Guangdong China.<br>
                        – He has a younger brother (10 years younger than Jun).<br>
                        – Education: Buji Senior High School<br>
                        – He was a trainee for 2 years and 7 months.<br>
                        – He says many Chinese students love kpop and that’s how he became curious about it and moved to Korea.<br>
                        – He was a child actor in China.<br>
                        – He is known for looking like Super Junior’s Heechul.<br>
                        – He speaks Mandarin, Cantonese, Korean.<br>
                        – He said it was good to learn Korean but the pronunciation was very hard for him.<br>
                        – He is good at martial arts.<br>
                        – Jun did Wushu.<br>
                        – He is good at Kung Fu and acting.<br>
                        – Between dressing up or dressing down, he prefers dressing up.<br>
                        – His hobbies are acting, singing, martial arts, playing the piano, reading on the phone.<br>
                        – He likes spicy foods and sour foods.<br>
                        – Jun doesn’t like plain white rice, so he often gives his share to Woozi.<br>
                        – Jun can’t eat eggplant. (Seventeen One Fine Day ep 3)<br>
                        – He likes to read books.<br>
                        – He likes to hide a lot of Chinese and Korean snacks in his bag. He doesn’t eat them all at once, but eats them many times but the members eat all his snacks sometimes.<br>
                        – Jelly snacks are his favorite (He especially likes 2+1).<br>
                        – He can play the piano.<br>
                        – He admires NU’EST’s Ren.<br>
                        – He likes to sing Chinese songs but he feels a little shy singing them in front of the members.<br>
                        – According to Seungkwan, Junhui is known as the mother of the group.<br>
                        – He ranks himself third most handsome in the group.<br>
                        – He mentioned he sleeps with his eyes open sometimes and that it scares the members if they happen to walk by. (“The Collaboration”)<br>
                        – His role models are Zhoumi and Henry because he wants to receive a lot of love from China and Korea like them. He wants to be an all-round entertainer and show the nice images of Seventeen to Chinese people.<br>
                        – Jun and The8, who left their loved ones in China to pursue their dreams in a foreign country, do not see SVT as work, but rather, as their own family.<br>
                        – Jun and The8 are friends with Pentagon’s Yanan.<br>
                        – His stage name Jun came from his real name Junhui.<br>
                        – The meaning behind his real name is that Moon means ‘good at studying’, Jun means ‘handsome’ and Hui means ‘i can do better’.<br>
                        – He thinks he has the stereotypical Gemini personality (fickle, awkward). His emotions change frequently, and sometimes he feels like there’s another person inside of him. (Japanese Seventeen Magazine)<br>
                        – He’s everyone’s ‘alarm.’ He’s good at waking up early, so eventually, it just became his responsibility. He wakes up about 10 minutes earlier than everyone else, so he tells them, “It’s about time to wake up~” but Seungkwan and DK, who are notorious sleepyheads, are always troublesome to wake up. (Japanese Seventeen Magazine)<br>
                        – He likes being at ease at home, and he spends time reading fantasy novels and playing games.<br>
                        – It depends on the day, but his standard style is casual. Sometimes, he tries a hip-hop style like The8 or Vernon, and other times, he tries to copy Joshua’s stylish vibe. (Japanese Seventeen Magazine)<br>
                        – After someone gets to know him, he’s often told, “Your image is different~” (Japanese Seventeen Magazine)<br>
                        – In China, he was a child actor from the age of 3, but he fell into a slump as he wasn’t sure if he wanted to continue down the path. It was at this time that he was scouted and he’s thankful for that fateful encounter.<br>
                        – “A human’s life is long. Try out the things you’re interested in! If you do that, I think you’ll be able to grow naturally.” (Japanese Seventeen Magazine)<br>
                        – He is in the Chinese show “The Collaboration” along with Seventeen’s THE8 and Samuel.<br>
                        – Jun’s ideal type of girl is someone who looks pure. He also likes sexy girls.</p>
               </p>
                  </div>

                  <!--  Hoshi -->
                 <p><img src="profile/hs.jpeg" alt=""></p>

                  <h2 align="center" class="title1">Hoshi</h2>

                  <div class="content1">
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

                 <!--  The 8 -->
                 <p><img src="profile/8.jpg" alt=""></p>

                  <h2 align="center" class="title2">The 8</h2>

                  <div class="content2">
                     <p align="center">Stage Name: THE8 (디에잇)<br>
                        Birth Name: Xu Minghao (徐明浩)<br>
                        Korean Name: Seo Myung Ho (서명호)<br>
                        Position: Lead Dancer, Sub Vocalist, Sub Rapper<br>
                        Birthday: 07 November 1997<br>
                        Zodiac sign: Scorpio<br>
                        Nationality: Chinese<br>
                        Hometown: Anshan, Liaoning, China<br>
                        Height: 178 cm (5’10″)<br>
                        Weight: 58 kg (128 lbs)<br>
                        Blood Type: O<br>
                        Sub-Unit: Performance Team<br>
                        Instagram: @xuminghao_o<br>
                        Weibo: xuminghao_The8<br><br>
                     <h5 align="center">The 8 facts:</h5><br>
                     <p align="center">
                        – He was born in Anshan, Liaoning, China.<br>
                        – He’s an only child.<br>
                        – His nicknames are Little 8 and Fairy.<br>
                        – His Korean name is Seo Myung Ho (서명호).<br>
                        – He did b-boying in China for 6 years.<br>
                        – He was a trainee for 1 year and 5 months.<br>
                        – He is in charge of b-boying in performance team.<br>
                        – He has been practicing Chinese Wushu (martial art) since he was 5 years old.<br>
                        – He participated and won first prize at the National Children’s martial arts competition.<br>
                        – He wanted to be a superstar since he was young. He got into an audition at school when he was in China.<br>
                        – He said he watched a lot of variety shows when he was in China and he wanted to be a superstar, so that’s why he became a singer in Korea.<br>
                        – His favorite season is Summer.<br>
                        – His favorite number is 7.<br>
                        – His shoe size is 260.<br>
                        – His hobbies are break dancing, martial arts and watching dramas.<br>
                        – When he is sad or stressed, he reads. (“The Collaboration”)<br>
                        – Between Korean food or Chinese food, he prefers Chinese food.<br>
                        – He always makes sure to eat his meals without skipping any.<br>
                        – The8’s stomach aches when he eats too much cold foods so he doesn’t really eat ice cream.<br>
                        – GOT7‘s Bambam & Yugyeom, BTS‘s Jungkook, Seventeen‘s The8, Mingyu, DK,  NCT‘s Jaehyun and Astro‘s Cha Eunwoo (the ’97 liners) are in a group chat.<br>
                        – The8 and Jun are also friends with Pentagon’s Yanan.<br>
                        – The8 and Jun, who left their loved ones in China to pursue their dreams in a foreign country, do not see SVT as work, but rather, as their own family.<br>
                        – His role models are his parents and Henry (Super Junior M).<br>
                        – The meaning behind his stage name is that when the 8 is laid down, the infinite sign appears. Many Chinese people like number 8.<br>
                        – He’s firm on his own thoughts, but he can also accommodate others’ opinions. He also plays pranks often on people he’s close with. (Japanese Seventeen Magazine)<br>
                        – He likes cleanliness, so whenever their dorm is messy, he often cleans it up. His roommates are Jun, Hoshi, Wonwoo, Vernon, and Dino, and the one who’s often untidy is everyone except him. (Japanese Seventeen Magazine)<br>
                        – The8 has his driver license. (Going Seventeen ep 21)<br>
                        – There are times that he goes out with the members and spending time riding bicycles and watching movies.<br>
                        – He has an individual, hip-hop-like style. (Japanese Seventeen Magazine)<br>
                        – When he’s up on stage, he wonders if he’s kind of cool and sexy. If he looks like that, he’ll be happy. Also, whenever he speaks Korean, he’s not that good so he’s told that he’s “cute.” (Japanese Seventeen Magazine)<br>
                        – He studied enthusiastically when he was in elementary school, so in tests, he got the top score of his year group. He became obsessed with breakdancing in middle school, so after graduating, to learn more about dance, he left home to go to a far-away arts school. (Japanese Seventeen Magazine)<br>
                        – NCT’s Winwin said he is close to The8.<br>
                        – He is in the Chinese show “The Collaboration” along with Seventeen’s Jun and Samuel.<br>
                        – The8 was chosen as a dance mentor on season 2 of “Idol Producer”.<br>
                        – The8’s ideal type is someone who is cute and kind.</p>
               </p>

               <!--  dino -->
                 <p><img src="profile/dn.jpeg" alt=""></p>

                  <h2 align="center" class="title3">Dino</h2>

                  <div class="content3">
                     <p align="center">Stage Name: Dino (디노)<br>
                        Birth Name: Lee Chan (이찬)<br>
                        Position: Main Dancer, Sub Rapper, Maknae<br>
                        Birthday: 11 February 1999<br>
                        Zodiac sign: Aquarius<br>
                        Nationality: Korean<br>
                        Hometown: Iksan-si, Jeollakbu-do, South Korea<br>
                        Height: 174 cm (5’9″)<br>
                        Weight: 56 kg (123 lbs)<br>
                        Blood Type: A<br>
                        Sub-Unit: Performance Team<br><br>
                        <h5 align="center">Dino facts:</h5><br>
                     <p align="center">
                        – He was born in Iksan-si, Jeollabuk-do.<br>
                        – He has a younger brother.<br>
                        – Education: Sangbong Middle School (‘14), Seoul Broadcasting High School (Dino graduated high school in February, 2017).<br>
                        – He was a trainee for 3 years.<br>
                        – His nicknames are Mr. Bagpack, Side Dish, Lee Dino, Maknae On Top<br>
                        – His parents are dancers. His father opened up a dance class and thought taught him how to dance.<br>
                        – He explained that, in a family tree, his name is written as “Lee Joong Chan” but that his real name is actually Lee Chan. (During an interview for tenasia.co.kr)<br>
                        – He got a daesang at Jeonju’s Youths’ dance tournament. That was when he got cast.<br>
                        – He made the choreography for their song ‘Jam Jam’.<br>
                        – He also made the choreography for their song “Flower” (Going Seventeen ep 12)<br>
                        – He’s the one who talked at the end of Seventeen TV Ver. 3 Teaser.<br>
                        – He is a big fan of Michael Jackson.<br>
                        – Between laughing or making someone laugh, he prefers making someone laugh.<br>
                        – His favorite fruits are apple and grape.<br>
                        – He likes fried squid with spicy sauce.<br>
                        – His favorite holiday is Sunday.<br>
                        – He is a fan of EXO.<br>
                        – He’s one of the members with the worst sleeping habits.<br>
                        – He’s a heavy sleeper. He likes to hug things when he sleeps.<br>
                        – He wishes he was taller.<br>
                        – He views himself as a little giant.<br>
                        – He can’t handle not being able to say what he wants to say.<br>
                        – His weakness is when people tell him he’s not good and then he feels down.<br>
                        – He tries to show his own color and have more originality within himself.<br>
                        – He appeared in Orange Caramel’s “Copycat” MV<br>
                        – His role models are Michael Jackson (He listens to “Beat It” a lot and says “Billie Jean” is a song that describes him and gives him a lot of energy) and Dynamic Duo’s Gaeko.<br>
                        – His stage name is an abbreviation of the word Dinosaur. It was given to him because he will dominate the stage.<br>
                        – Dino ranked himself first best in visuals. He selected S.Coups in second and then Wonwoo as third. (One Fine Day in Japan)<br>
                        – He’s a person who ‘has the ability to develop/grow.’ He always looks towards the future and challenges himself. he’s not good at doing things properly, and he’s the type who wants to work hard. (Japanese Seventeen Magazine)<br>
                        – He’s the youngest, so he has the responsibility of being powerful. Everyone’s older, so they always worry about him — eg. “Have you eaten yet?” It feels like he has a lot of older brothers. (Japanese Seventeen Magazine)<br>
                        – On rest days, he makes an effort to ‘do absolutely nothing.’ He watches a lot of TV. He likes variety shows — His favorite is called “Gag Concert,” where comedians make appearances. (Japanese Seventeen Magazine)<br>
                        – For clothing, he likes a street kind of style. while working, there’s lots of flashy clothes, and in private, he wants to wear casual, loose clothes that are suitable for his age. (Japanese Seventeen Magazine)<br>
                        – If he’s not wearing makeup, he gives off a young impression, but when he wears makeup, he has a crisp appearance. he likes that transformation. (Japanese Seventeen Magazine)<br>
                        – He is friends with Red Velvet’s Yeri.<br>
                        – When he was younger, he was the type of person who, at things like events, would always stand at the front and assign everyone roles. Since that time, he was good at dancing so he had a feeling he was noticed for that. (Japanese Seventeen Magazine)<br>
                        – Dino’s ideal type is a pretty girl who does aegyo.</p>
               </p>
                  Vernon

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