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

                  <!-- Wonwoo my love -->
                  <p><img src="profile/ww.jpg" alt=""></p>

                  <h2 align="center" class="title1">Wonwoo</h2>

                  <div class="content1">
                     <p align="center">Stage Name: Wonwoo (원우)<br>
                        Birth Name: Jeon Wonwoo (전원우)<br>
                        Position: Lead Rapper<br>
                        Birthday: 17 July 1996<br>
                        Zodiac sign: Cancer<br>
                        Nationality: Korean<br>
                        Hometown: Changwon, Gyeongsangnam-do, South Korea<br>
                        Height: 182 cm (6’0″)<br>
                        Weight: 63 kg (138 lbs)<br>
                        Blood Type: A<br>
                        Sub-Unit: Hip-Hop Team<br><br>
                     <h5 align="center">Wonwoo facts:</h5><br>
                     <p align="center">
                        – He was born in Changwon, Gyeongsangnam-do, South Korea.<br>
                        – He has a little brother named Jeon Bohyuk.<br>
                        – Education: School of Performing Arts Seoul (‘15)<br>
                        – He took guitar classes after he moved to Seoul in his third year of middle school.<br>
                        – He participated in Pledis auditions just for experience but passed the audition.<br>
                        – He was a trainee for 4 years.<br>
                        – He started off as a singer but people told him he had a good voice for rapping. Since then, he looked into the Hip Hop scene and got noticed as a rapper and became a part of the Hip Hop team.<br>
                        – He’s scared of dogs.<br>
                        – He says he looks cold due to his sharp eyes but he’s a warm person.<br>
                        – He said if he could create a new unit, he’d want to be in it with Seungkwan, Mingyu, Hoshi, DK and Dino and he would name it ‘Comics’.<br>
                        – Seventeen voted Wonwoo as the cleanest member.<br>
                        – He ranks himself 3rd or 4th most handsome in the group. He says S.Coups is the most handsome to him because he’s very manly and has good leaderships.<br>
                        – When he’s tired, he stares blankly and people tell him he looks really handsome.<br>
                        – He doesn’t like aeygo.<br>
                        – His hobbies are reading, playing games and watching movies.<br>
                        – WonWoo’s favorite color is blue.<br>
                        – He likes pomegranates.<br>
                        – He loves hamburgers.<br>
                        – He can’t eat seafood.<br>
                        – Between spicy rice cakes and ramen, he prefers ramen.<br>
                        – Between scary or comedy movies, he prefers scary movies.<br>
                        – WonWoo likes listening to sad music before he sleeps.<br>
                        – He says he cries every time while watching the Korean movie “Miracle in Cell No.7″<br>
                        – Wonwoo shoe size is 270mm.<br>
                        – During Weekly Idol he introduced himself as the member with the lowest voice in Seventeen.<br>
                        – Wonwoo has a bad-vision, so he wears contacts or glasses. (vLive)<br>
                        – He appeared in NU’EST’s “Face” MV and Hello Venus’ “Venus” MV<br>
                        – His role models are Lupe Fiasco and Tablo (He also enjoys writing lyrics).<br>
                        – The meaning behind his name is that Won means ‘round’ and Woo means ‘help’. It means to live by helping out with a rounded heart.<br>
                        – He’s quiet shy. When he first meets a person, he’ll only warm up to them a little after meeting them every day for 1-2 months. (Japanese Seventeen Magazine)<br>
                        – He’s in charge of wisdom. He’s liked reading from a very young age, and compared to the members, he thinks he has a wider range of vocabulary. (Japanese Seventeen Magazine)<br>
                        – He’s normally indoors, so many of his rest days are spent at home. At home, he spends time playing games and reading books. (Japanese Seventeen Magazine)<br>
                        – Wonwoo feeds the stray cats in his neighborhood. (According to himself during a fansign)<br>
                        – He has a casual style: parkas, sweatshirts, jerseys, etc. His favorite is the leather jacket he bought in winter. (Japanese Seventeen Magazine)<br>
                        – He thinks there are aspects of him that are manly. (Japanese Seventeen Magazine)<br>
                        – He was active in billiards, bowling, basketball…various sports. He played with his close friends. He enjoyed his studies, and his grades for English, Math, and Korean were good. He wasn’t good at Humanities, but now he reads books about it and it’s quite interesting. (Japanese Seventeen Magazine)<br>
                        – When he was a kid, he watched TV and his dream of wanting to be “a person who sings and dances” was born. (Japanese Seventeen Magazine)<br>
                        – In “One Fine Day” ep.4 Wonwoo said he has xerophthalmia (dry eye syndrome).<br>
                        – Wonwoo wants to be a RJ. (Kim Chang Ryul’s Old School 180718)<br>
                        – Wonwoo is close to B.A.P’s Himchan. (B.A.P’s Celuv iTV ‘I am Celeb’)<br>
                        – He ranks 72nd in The Most Beautiful Faces of 2017.<br>
                        – He does not believe in love at first sight. He believes it’s rare to fall in love that quickly.<br>
                        – Wonwoo’s ideal type is someone who suits him well.</p>
               </p>
                  </div>

                 <!--  Mingyu -->
                 <p><img src="profile/mg.jpg" alt=""></p>

                  <h2 align="center" class="title2">Mingyu</h2>

                  <div class="content2">
                     <p align="center">Stage Name: Mingyu (민규)<br>
                        Birth Name: Kim Mingyu (김민규)<br>
                        Position: Lead Rapper, Face of the Group<br>
                        Birthday: 06 April 1997<br>
                        Zodiac sign: Aries<br>
                        Nationality: Korean<br>
                        Hometown: Anyang-si, Gyeonggi-do, South Korea<br>
                        Height: 187 cm (6’2″)<br>
                        Weight: 80 kg (176 lbs)<br>
                        Blood Type: B<br>
                        Sub-Unit: Hip-Hop Team<br><br>
                     <h5 align="center">Mingyu facts:</h5><br>
                     <p align="center">
                        – He was born in Anyang-si, Gyeonggi-do, South Korea.<br>
                        – He has a younger sister.<br>
                        – Education: Burim Middle School (‘13), Seoul Broadcasting High School (‘16)<br>
                        – He got cast by Pledis in his 2nd year of middle school.<br>
                        – He was a trainee for 4 years.<br>
                        – His nicknames are Mr. Wristband, Technician, Mingyu Shop, Kim-ssi ahjussi.<br>
                        – He is left-handed.<br>
                        – He is the tallest member in the group.<br>
                        – He ranks himself #1 visuals in Hip Hop unit.<br>
                        – He’s in charge of hair styling in the group.<br>
                        – He views himself as a tall kid with dark skin.<br>
                        – If he had the opportunity, he would like to date someone older than him.<br>
                        – He likes to vacuum and clean up the trash in the dorm.<br>
                        – His hobbies are: soccer, basketball, making plastic models/action figures.<br>
                        – Mingyu played soccer since primary school. His team even placed 2nd in national championships. In middle school, he played forward position.<br>
                        – Mingyu used to play bass in a high school band.<br>
                        – He enjoys and wants to try acting someday.<br>
                        – His favorite number is 17.<br>
                        – His favorite color is red.<br>
                        – One of his favorite food is meat.<br>
                        – Between pork belly and pig feet, he prefers pig feet.<br>
                        – He likes spicy foods.<br>
                        – His favorite animals are dogs (and he has a pet dog).<br>
                        – He wants to meet EXO.<br>
                        – He wants to visit Latin America.<br>
                        – He appeared in NU’EST’s “Face” MV and Hello Venus’ “Venus” MV.<br>
                        – He is the member who eats the most in the group.<br>
                        – He is closest to Wonwoo.<br>
                        – He’s the loudest member at their dorm.<br>
                        – He is the member who eats the most, in other words he’s the Shikshin/Eating Machine. XD<br>
                        – He can repair broken things. When he is bored at the dorm, he changes the interior.<br>
                        – He’s also in charge of changing the light bulbs because he’s tall.<br>
                        – He was voted by the other members as the most handsome member.<br>
                        – He was voted by the other members as the member whose looks and personality don’t match.<br>
                        – He cooks well.<br>
                        – Mingyu worked as a Barista/Part timer in a coffee shop before.<br>
                        – S.Coups said during “One Fine Day” that they will have no problem because they have Mingyu. Because Mingyu has the skills to catch fish, cook, and build a house for them. (multi-talented guy)<br>
                        – The members thought Mingyu was older than them when they first met him but after getting to know him, they feel like he’s a younger brother to them now.<br>
                        – He said if he could be any other member, he’d want to be Joshua because he can speak English.<br>
                        – He is an optimistic guy.<br>
                        – The meaning behind his name is that Min means ‘precious gem stone’ and Gyu means ‘star’. He is a precious gem stone that shines like a star.<br>
                        – GOT7‘s Bambam & Yugyeom, BTS‘s Jungkook, Seventeen‘s The8, Mingyu, DK,  NCT‘s Jaehyun and Astro‘s Cha Eunwoo (the ’97 liners) are in a group chat.<br>
                        – Mingyu, DK, The8, BTS’s Jungkook, GOT7’s Bambam & Yugyeom and NCT’s Jaehyun (the ’97 liners) are in a group chat. (Jungkook and Bambam mentioned the ’97 liner squad in their ‘thanks to’ in their recent albums)<br>
                        – He’s a kind of person who ponders about many things, so he’s putting in as much effort as he can to live more positively. (Japanese Seventeen Magazine)<br>
                        – According to the members, he’s the cook, cleaner, and repairman whenever things break. He normally changes lightbulbs in their dorm, and when the light breaks in their bathroom, he uses a clothes hangers to change it. (Japanese Seventeen Magazine)<br>
                        – Rather than reflecting upon past happiness, he likes to find happiness in the current situation. (Japanese Seventeen Magazine)<br>
                        – He’s the type who wants to do things that are meaningful, like eating with friends, watching movies, and going out. (Japanese Seventeen Magazine)<br>
                        – Lately, his favorites are black or beige jackets. (Japanese Seventeen Magazine)<br>
                        – His personality is different to what he looks like. his outward appearance probably gives off the impression that he’s cool, but in reality, he’s brighter than anyone and constantly smiling/laughing. (Japanese Seventeen Magazine)<br>
                        – His schooling years were lively. He was always going out and doing things. He was in his middle school’s soccer team, and they even participated in nationals. (Japanese Seventeen Magazine)<br>
                        – Mingyu made a cameo appearance on the Thai sitcom ‘Luang-ta Maha-chon’.<br>
                        – His role model is Big Bang’s TOP, because he shows his cool images on stage and does well as an actor.<br>
                        – Mingyu’s equation for his handsome face is father + mother – opening his mouth (Seventeen Ask in a Box)<br>
                        – Mingyu is ranked 49th in “The Most Handsome Faces of 2017”.<br>
                        – Mingyu is rank 32nd on TC Candler “The 100 Most Handsome Faces of 2018”.<br>
                        – Mingyu’s ideal type is a girl who is tall, kind-hearted & easy-going.</p>
               </p>

               <!--  Vernon -->
                 <p><img src="profile/vn.jpg" alt=""></p>

                  <h2 align="center" class="title3">Vernon</h2>

                  <div class="content3">
                     <p align="center">Stage Name: Vernon (버논)<br>
                        Birth Name: Hansol Vernon Choi<br>
                        Korean Name: Choi Hansol (최한솔)<br>
                        Position: Main Rapper<br>
                        Birthday: 18 February 1998<br>
                        Zodiac sign: Aquarius<br>
                        Nationality: Korean-American<br>
                        Hometown: New York, United States<br>
                        Height: 178 cm (5’10″)<br>
                        Weight: 62 kg (136 lbs)<br>
                        Blood Type: A<br>
                        Sub-Unit: Hip-Hop Team<br>
                        Instagram: @chwenotchew<br><br>
                     <p align="center">
                        – He’s from New York but moved to Korea when he was 5 years old.<br>
                        – His mother is American and his father is Korean.<br>
                        – He has a little sister named Sofia.<br>
                        – He’s very close to his sister, he even got a temporary tattoo of her name on his arm.<br>
                        – He got cast at a station in front of his middle school.<br>
                        – Vernon was 14 years old when he got street casted.<br>
                        – His family lives in Hongdae but he lives in Gangnam since Seventeen’s dorm is located there.<br>
                        – His mom moved in Korea as well (when he was 5) but since she doesn’t speak Korean, at home they kept talking in English, that’s why Vernon’s English is so good.<br>
                        – His favorite rappers are Drake, T.I, J.Cole, and Kendrick Lamar.<br>
                        – He’s extremely ticklish.<br>
                        – He’s one of the members that gets scared the easiest.<br>
                        – He likes the month December.<br>
                        – He admires David Bowie.<br>
                        – He has an interest for fashion and he owns a lot of hats.<br>
                        – His favorite ice cream is Vanilla ice cream.<br>
                        – His favorite food is chocolate.<br>
                        – He likes chocolate cakes and cheesecakes.<br>
                        – He loves cheeseburgers.<br>
                        – His hobbies are reading webtoons, watching movies, reading.<br>
                        – He likes the actors Brad Pitt, Leonardo DiCaprio & Johnny Depp.<br>
                        – His favorite Korean actor is Lee Byung Han.<br>
                        – He is a Harry Potter fan.<br>
                        – He’s a Star Wars fan and bought a BB-8 robot when he was in Japan (source: SVT Club)<br>
                        – His favorite Seasons are Summer and Fall.<br>
                        – His favorite animals are dogs.<br>
                        – He likes cats and he has his own pet cat, named ‘Dodam’. The name of the cat was picked by his cousin.<br>
                        – He doesn’t have a favorite girl group.<br>
                        – He prefers watching movies over reading.<br>
                        – If he could introduce a member to his family, he would choose Soonyoung.<br>
                        – He received the nickname ‘Twix’ because he had a lot of Twix in their practice room.<br>
                        – He was voted by the other members as the shyest member.<br>
                        – He was voted by the members for acting most cute around girl groups. He says he smiles with his eyes around girls and not around his members.<br>
                        – He was in Man of K’s “Falling” MV, Hello Venus’ “Venus” MV, and Orange Caramel’s “My Copycat” MV.<br>
                        – Vernon had a collaboration with the group M.O.L.A. (Make Our Lives Awesome), which consists of him, 15&’s Jimin, UNIQ’s Luizy (Seungyoun), and Nathan, for the song “Chillin”.<br>
                        – He loves English/British accents and he likes Australian accents.<br>
                        – Vernon said that now he is better in Korean more than his own language, English.<br>
                        – He views himself as a really free person.<br>
                        – His role models are his parents and his teachers, as well as the American rapper J Cole.<br>
                        – The meaning behind his stage name is that it’s his middle name and also his mother’s surname.<br>
                        – Vernon is close with PENTAGON‘s Kino. He even bought Kino a phone case when he was in Japan.<br>
                        – He wishes he could have good speaking skills like SeungKwan does.<br>
                        – He shares rooms with SeungKwan the most.<br>
                        – He’s an easygoing person. He always takes the longest doing whatever everyone else is doing, and the hyungs scold him for it. (Japanese Seventeen Magazine)<br>
                        – He likes a casual style with a little spicy impact. (Japanese Seventeen Magazine)<br>
                        – He looks childish, but actually, he’s a deep person. He places importance in not discriminating against anything/not being prejudice. (Japanese Seventeen Magazine)<br>
                        – He was a pretty ordinary student, playing games with his friends in Internet cafes. Then, when he was in his 2nd year of middle school, he was scouted at an office as he was going home from school on the subway. It changed his life completely. If he wasn’t scouted at that time, he would have no idea where he’d be or what he’d be doing now. (Japanese Seventeen Magazine)<br>
                        – Vernon competed in “Show Me The Money 4” but got eliminated on the Third Round.<br>
                        – Vernon is a cast member on the variety show “Tutor“, along with other Kpop idols like Pentagon’s Hongseok, WJSN‘s Luda, etc. Vernon is an English tutor.<br>
                        – Vernon doesn’t care about appearance. He cares more about the person’s personality and heart. (Japanese Seventeen Magazine)<br>
                        – Vernon’s ideal type is someone his heart can connect with.</p>
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