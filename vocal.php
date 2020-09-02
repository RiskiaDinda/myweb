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
                  <!-- j0ng -->
                  <p><img src="profile/jg.jpg" alt=""></p>

                  <h2 align="center" class="title">Jeonghan</h2>

                  <div class="content">
                     <p align="center">
                     Stage Name: Jeonghan (정한)<br>
                     Birth Name: Yoon Jeong Han (윤정한)<br>
                     Position: Lead Vocalist<br>
                     Birthday: 04 October 1995<br>
                     Zodiac sign: Libra<br>
                     Nationality: Korean<br>
                     Birthplace: Seoul, South Korea<br>
                     Height: 178 cm (5’10”)<br>
                     Weight: 62 kg (136 lbs)<br>
                     Blood Type: B<br>
                     Sub-Unit: Vocal Team<br><br>
                     <h5 align="center">Jeonghan facts:</h5><br>
                     <p align="center">
                     – He was born in Seoul, South Korea.<br>
                     – He has a younger sister.<br>
                     – Education: Hyangnam High School (‘14)<br>
                     – He was a trainee for 2 years and 2 months.<br>
                     – His nicknames are: Eldest Maknae, 1004, Angel<br>
                     – He calls himself ‘Angel’ because his birthday is on October 4th (1004 in Korean is “Cheonsa” which means “Angel”).<br>
                     – He ranks himself third best visuals in the group.<br>
                     – He admires SHINee’s Taemin.<br>
                     – Between 20 and Adore U, he prefers 20.<br>
                     – He likes Korean food, especially stews and chicken.<br>
                     – He doesn’t really like candies.<br>
                     – His favourite food is pasta.<br>
                     – His hobbies are sleeping, soccer, basketball, badminton.<br>
                     – He says he’s the weakest member in the group. He gets tired easily and sleeps whenever and wherever he can.<br>
                     – When he feels sleepy at the broadcasting stations, he would tell everyone he needs to use the washroom but he’s secretly sleeping there for 5 minutes.<br>
                     – He says he seems quiet but he’s actually not like that.<br>
                     – He says Joshua was the first member to approach him when he first became a trainee.<br>
                     – He says he’s closest to Joshua among all the Seventeen members.<br>
                     – Between dating someone older or younger, he prefers someone older because he needs someone to take care of him.<br>
                     – He was voted by the other members as the member with the best personality.<br>
                     – The meaning behind his name is that Jeong means “clean” and Han means “Country”.<br>
                     – Jeonghan didn’t really like his long hair at first but the fans loved it and when he got used to it, he liked it.<br>
                     – He always plays various pranks on the members. At first the members hated it, but they let him on a lot to the point where lately, they’ve reached an understanding and just say, “yes, yes, go ahead,” whenever he pranks them. TBH, he’s a really shy person, so he can only play pranks on people he’s close to. He calls it affection. (Japanese Seventeen Magazine)<br>
                     – He listens to the members’ troubles. They confide in him a lot and it makes him really happy.<br>
                     – During their rest days, he mostly sleeps in his bed. When he thinks he slept for too long, he goes outside, but then he ends up returning and going back to sleep anyway. (Japanese Seventeen Magazine)<br>
                     – If he can’t decide on his taste in clothes, he wears clothes according to his mood.<br>
                     – Things that make him a mischievous person: eyes — since he was young, people have told him, “Wow, you have cute eyes.” (Japanese Seventeen Magazine)<br>
                     – When he was a child who could get along with anyone equally as well. He thinks he was pretty ordinary, not too noisy. (Japanese Seventeen Magazine)<br>
                     – Jeonghan is the most savage member in SVT & The smartest member according to DK. (OFD Japan)<br>
                     – Jeonghan said he gets motion sickness really easily. (Episode 1 of “One Fine Day”)<br>
                     – He’s close to Monsta X’s Minhyuk.<br>
                     – Jeonghan appeared in the ‘Playback’ MV by Kiggen Phanto ft. Jinsil and Mad Soul Child, Hanhae in July 26, 2015.<br>
                     – Jeonghan wants to be a RJ and wants to have his own show named Jeonghan’s Cup of Warm Milk. (Akdong Musician’s Volume Up 180718)<br>
                     – Jeonghan’s ideal type is someone who loves them and buys their albums.<br>

</p>
               </p>
                  </div>

                  <!-- Jisoo-->
                  <p><img src="profile/js.jpg" alt=""></p>

                  <h2 align="center" class="title1">Joshua</h2>

                  <div class="content1">
                     <p align="center">Stage Name: Joshua (조슈아)<br>
                        Birth Name: Joshua Hong<br>
                        Korean Name: Hong Jisoo (홍지수)<br>
                        Position: Lead Vocalist<br>
                        Birthday: 30 December 1995<br>
                        Zodiac sign: Capricorn<br>
                        Nationality: Korean-American<br>
                        Hometown: Los Angeles, California, United States<br>
                        Height: 177 cm (5’10”)<br>
                        Weight: 58 kg (128 lbs)<br>
                        Blood Type: A<br>
                        Sub-Unit: Vocal Team<br><br>
                     <h5 align="center">Joshua facts:</h5><br>
                     <p align="center">
                        – He was born in Los Angeles, California, US.<br>
                        – Education: Downtown Magnets High School.<br>
                        – His parents are both Koreans.<br>
                        – He’s an only child.<br>
                        – He joined Pledis Entertainment and began his training in 2013.<br>
                        – He was a trainee for 2 years and 2 months.<br>
                        – His family is in Los Angeles, but his mom comes from time to time to Korea to see him.<br>
                        – During Weekly Idol he introduced himself as the member who can speak 5 different languages.<br>
                        – When he lived in America, he would speak Korean at home and English at school so he is good at speaking it but not good at writing Korean.<br>
                        – He is a fan of EXO.<br>
                        – His favorite singers are 2BiC, Chris Brown, Usher, and Tupac.<br>
                        – Between 20 and Adore U, he prefers 20.<br>
                        – He likes the Korean drama “Rooftop Prince”.<br>
                        – His hobbies are reading, sleeping, eating, singing, playing the guitar and watching movies.<br>
                        – His favorite colors are Blue, Black, Brown and Pink.<br>
                        – He doesn’t like the color green.<br>
                        – He likes horror movies.<br>
                        – His favorite animals are rabbits.<br>
                        – Joshua loves anime. His favorites are One Piece, Naruto & Bleach.<br>
                        – He can cook.<br>
                        – He loves chicken.<br>
                        – His favorite flavor of ice-cream is kiwi.<br>
                        – His favorite sport is soccer.<br>
                        – He prefers books over movies.<br>
                        – He loves fairy tales.<br>
                        – He likes the British accent.<br>
                        – He said music is his life.<br>
                        – He views himself as a calm person.<br>
                        – He’s a Christian (Catholic).<br>
                        – Joshua was a member of the Praise Team in their church.<br>
                        – The meaning behind his name Joshua is that it’s a name from the Bible.<br>
                        – He attended church often when he lived in America.<br>
                        – He plays the guitar really well.<br>
                        – Joshua has the biggest hands in Seventeen, according to Seungcheol.<br>
                        – He finds it difficult to ask people for favors.<br>
                        – He is named Seventeen’s gentleman because he doesn’t get angry easily and talks softly.<br>
                        – He has a gentle voice and behaves with manners. He says ‘Good Morning’ whenever he wakes up in the morning.<br>
                        – He shares the same birthday (even the year) with BTS’s V. They’ve wished each other happy birthday for the past two years (as of 2017).<br>
                        – He wants to be a dutiful son to his parents and work hard and make them proud.<br>
                        – His parents are his role models.<br>
                        – He has a bright personality. When he’s with the members or close friends, his spirits are often high. He used to have a shy personality, but after living with the members, his real self came out. (Japanese Seventeen Magazine)<br>
                        – Up until a short time ago, he used to be called the ‘gentleman’ of the group, but lately, he’s become more of the joker/position of a person who makes people laugh. The members laugh when he dances with all of his might, and he gets a massive overreaction. He’s told that he looks really quiet, so the difference between his looks and personality are funny. (Japanese Seventeen Magazine)<br>
                        – When the weather is good, he often rides a bike on the bicycle road next to Han River, and afterwards, goes to watch a movie. He likes anime too. (Japanese Seventeen Magazine)<br>
                        – A casual style is his favorite. He also likes buying clothes, and goes shopping when he has the time.<br>
                        – When he laughs, the edges of his mouth rise slightly. (Japanese Seventeen Magazine)<br>
                        – He’s a person who opens up to the person he’s close to, but doesn’t really talk to people he doesn’t know.<br>
                        – When he was in America, he had Japanese friends. (Japanese Seventeen Magazine)<br>
                        – Joshua’s ideal type is someone who is kind.</p>
               </p>
                  </div>

                 <!-- Woozi -->
                  <p><img src="profile/wz.jpg" alt=""></p>

                  <h2 align="center" class="title2">Woozi</h2>

                  <div class="content2">
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

               <!--  DK -->
                 <p><img src="profile/dk.jpeg" alt=""></p>

                  <h2 align="center" class="title3">DK</h2>

                  <div class="content3">
                     <p align="center">Stage Name: DK (도겸)<br>
                        Birth Name: Lee Seokmin (이석민)<br>
                        Birthday: 18 February 1997<br>
                        Zodiac sign: Aquarius<br>
                        Nationality: Korean<br>
                        Hometown: Suji-gu, Yongin-si, Gyeonggi-do, South Korea<br>
                        Height: 179 cm (5’10.5″)<br>
                        Weight: 66 kg (145lbs)<br>
                        Blood Type: O<br>
                        Sub-Unit: Vocal Team; BOOSEOKSOON (Leader)<br><br>
                        <h5 align="center">DK facts:</h5><br>
                     <p align="center">
                        – He was born in Suji-gu, Yongin-si, Gyeonggi-do.<br>
                        – He has an older sister.<br>
                        – Education: Shinli Kindergarten, Seoul High School of Performing Arts (‘16)<br>
                        – He said when he first joined Pledis, he felt scared and lonely but he’s the member that got along with everyone the fastest.<br>
                        – He was a trainee for 2 years and 7 months.<br>
                        – He dreamed of becoming a singer when he saw Yoon Dohyun’s performances in middle school. The amount of energy he had on stage and the way he interacted with the fans and shared their energy was very cool to him.<br>
                        – He sang karaoke a lot when he was in middle school and his friends told him his singing is good.<br>
                        – He loves rock bands. He was a part of a rock band when he was in middle school.<br>
                        – His nicknames are: Mr. Hat, Soonseok Talk, Rockstar, Docutie, Internal voice (the members call him that because he’s noisy when he’s practicing his singing and it sounds like a speaker)<br>
                        – He was previously a student at YP Music Academy.<br>
                        – Vernon, Seungkwan & Joshua think he’s the funniest member.<br>
                        – He shares the same birthday as Vernon.<br>
                        – He’s a very lively but sensitive person.<br>
                        – He wants to be someone who can help others and give them hope.<br>
                        – He says he likes to spend his time cheerfully so he likes to make others feel energetic but sometimes it can get out of control so he needs to have more self control.<br>
                        – He says he has a great passion for the things he likes so sometimes he can get greedy when he sings.<br>
                        – His hobbies are watching movies and singing while wearing earphones while resting<br>
                        – His favorite food is Doenjang Jiggae (which is a Korean soybean paste stew dish)<br>
                        – His favorite number is 17.<br>
                        – His favorite color is black.<br>
                        – DK’s shoe size is 280mm.<br>
                        – He says he likes to spend his time cheerfully so he likes to make others feel energetic but sometimes it can get out of control so he needs to have more self control.<br>
                        – He was voted by the other members as the member that likes to joke the most.<br>
                        – His role model is Yoon Dohyun and Moon Myungjin.<br>
                        – The meaning behind his real name is that Seok means ‘big’ and Min means ‘precious gem stone’. It means to be a big existence like a precious gem stone.<br>
                        – He said that he was afraid of ladybugs because of a nightmare he had when he was younger.<br>
                        – DK bravely shared his story on Sukira radio (160619) of when he used to get bullied for his weight and explained how words can hurt. He suffered through a lot in the past on his own and didn’t want to burden the others. So he worked hard to become the artist he is today.<br>
                        – DK and NCT‘s Jaehyun went to the same school. In a radio interview, DK said that back then he didn’t dare to speak to Jaehyun because he was too handsome.<br>
                        – GOT7‘s Bambam & Yugyeom, BTS‘s Jungkook, Seventeen‘s The8, Mingyu, DK,  NCT‘s Jaehyun and Astro‘s Cha Eunwoo (the ’97 liners) are in a group chat.<br>
                        – Between dating someone younger or older, he prefers someone older because he needs someone to take care of him.<br>
                        – He competed on “King of Masked Singer” (ep 69&70) as Baby Goblin/Baby Demon, making it to the 3rd round.<br>
                        – DK ranks 1st in ” Male Idols You’d like to be Your Sunbae”.<br>
                        – He’s a person who looks forward positively. His dad often said, “you should become a positive person who is considerate of others,” so he’s trying to be like that. Whenever he feels down, he eats delicious food and regains his happiness. (Japanese Seventeen Magazine)<br>
                        – He thinks his role in the group is to liven up their aura. He likes making people laugh. (Japanese Seventeen Magazine)<br>
                        – He watches a lot of movies. He goes to the cinema, and also watches them at home. He likes a variety of genres, but Haikyuu!! and One Piece are his favorite. (Japanese Seventeen Magazine)<br>
                        – He likes refreshing/clean clothes. He prefers moderately tight clothes to baggy clothes. As for colors, black or blue or red is good. He wears quite flashy clothes too. (Japanese Seventeen Magazine)<br>
                        – When he laughs, the outer corners of his eyes wrinkle up and his mouth opens wide. (Japanese Seventeen Magazine)<br>
                        – When he was younger, he was really loud with his friends. He also loved exercising. He wasn’t good at studying, but he did try his best. (Japanese Seventeen Magazine)<br>
                        – He sang the OST of the drama ‘The Great Seducer’, titled “I’m First”.<br>
                        – DK is going to be starring in a Korean Musical called “Excalibur”.<br>
                        – DK’s ideal type is a girl with long dark hair, has aegyo and has long slender legs.</p>
               </p>

               <p><img src="profile/sk.jpg" alt=""></p>

                  <h2 align="center" class="title4">Seungkwan</h2>

                  <div class="content4">
                     <p align="center">Stage Name: Seungkwan (승관)<br>
                        Birth Name: Boo Seung Kwan (부승관)<br>
                        Position: Main Vocalist<br>
                        Birthday: 16 January 1998<br>
                        Zodiac sign: Capricorn<br>
                        Nationality: Korean<br>
                        Hometown: Jeju-do, South Korea (but was born in Busan)<br>
                        Height: 174cm (5’9″)<br>
                        Weight: 58kg (127lbs)<br>
                        Blood Type: B<br>
                        Sub-Unit: Vocal Team; BOOSEOKSOON<br>
                        Instagram: @pledis_boos<br><br>
                        <h5 align="center">Seungkwan facts:</h5><br>
                     <p align="center">
                        – He was born in Busan, but he lived in Jeju since he was little.<br>
                        – He has 2 older sisters.<br>
                        – Education: Seoul Broadcasting High School (‘16)<br>
                        – He was a trainee for 3 years and 2 months.<br>
                        – He was offered to join JYP but he rejected the offer<br>
                        – He joined Pledis Entertainment in June 2012.<br>
                        – He auditioned with Kim Bum Soo’s “Last Love”. He says the song describes him too.<br>
                        – Since his first year of elementary school, he participated in Childrens’ Song Festivals which were held in school.<br>
                        – Since he’s from Jeju, he never thought of becoming a singer. Luckily, he got cast via an internet video (his teacher recorded of him singing at the song festival because he was singing his/her favorite song).<br>
                        – His nicknames are Mr. Mic, MC Boo, DJ Boo<br>
                        – His hobbies are calligraphy, basketball, musical singing.<br>
                        – His favorite food is hamburgers.<br>
                        – He likes goguma pizza (sweet potato stuffed crust pizza).<br>
                        – He is allergic to tomatoes.<br>
                        – Between salty and sweet, he prefers salty.<br>
                        – His favorite Seasons are Summer and Fall. He loves when it rains a lot too.<br>
                        – His favorite sport is basketball, but he also likes volleyball.<br>
                        – He says he remembers all the members birthdays.<br>
                        – He says he wants to be good at everything.<br>
                        – He is Seventeen’s mood maker.<br>
                        – Seungkwan takes care of the members.<br>
                        – His biggest fear is getting no attention at all.<br>
                        – During “Adore U” era, the members went to their hometowns but he’s couldn’t and stayed alone in the dorm. It was raining and while he was showering, he heard a knocking and yelled “WHO’S THERE?” but there was no answer. He looked through the door hole and there was no one. He opened the door and turns out it was just the Chinese food that he ordered.<br>
                        – Seungkwan once handed out tangerines to reporters at 5AM without being asked to do so.<br>
                        – Before “BOOM BOOM” he lost 7 kg, stating that he “didn’t want to lose weight but wanted to show his nice look as a singer”<br>
                        – When one of the members are feeling upset, he mimics voices of people, like their CEO, to make them laugh.<br>
                        – Before vlive broadcasts, he and Hoshi hosted Andromada.<br>
                        – He shares rooms with Vernon the most.<br>
                        – His role model is Kim Junsu. It’s been over 10 years but he does musicals and solo activites and it looks very cool to him. He wants to be successful as a team and then show his solo activities.<br>
                        – The meaning behind his real name is that Boo means ‘adult’, Seung means ‘success and ‘Kwan’ means generous. He wants to be a generous successor. He tries hard to be generous and loves giving energy to other people.<br>
                        – He’s very sensitive. He gets really moved when he sees their fans at concerts, and he takes song lyrics’ meanings very seriously. (Japanese Seventeen Magazine)<br>
                        – When he listens to music, it reflects the feelings he had at that time. (Japanese Seventeen Magazine)<br>
                        – He normally walks by himself on the days when he finishes work early.He likes these kind of moments — not thinking about anything and spending time just feeling the air outside. (Japanese Seventeen Magazine)<br>
                        – A refreshing atmosphere is his standard style. he likes big silhouettes and clothes with food pictures on them. He often shops around Garosu-gil and COEX but he’s indecisive so he takes a lot of time. (Japanese Seventeen Magazine)
                        – He’s lively, energetic, and diligent. (Japanese Seventeen Magazine)<br>
                        – His character hasn’t changed at all since he was a kid — he loved singing and making people laugh. When he was in his 6th year of elementary school, he was the school vice president, but he couldn’t study at all. In his opinion, he was the most popular in his class, but it was an all boys school. (Japanese Seventeen Magazine)<br>
                        – B.A.P’s Daehyun bought Seungkwan (when Seventeen were still rookies) rib eye. Seungkwan said he would pay him back, but Daehyun is still waiting (B.A.P’s Celuv iTV ‘I am Celeb’)<br>
                        – He likes to sing BTOB’s songs and he likes BTOB’s Seo Eunkwang because he sings well.<br>
                        – He is a regular cast member in ‘Unexpected Q’ together with Eun Jiwon (Sechs Kies) and Yoo Seyoon.<br>
                        – Seungkwan is one of the fixed members of tvN’s program “Prison Life of Fools” together with GOT7‘s JB and IZ*ONE‘s Yena.<br>
                        – He won the rookie entertainer award in 2018 for his work on variety shows.<br>
                        – SeungKwan’s ideal type is an easy going girl with big eyes and is like a friend to him.

                        </p>
               </p>
                  

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