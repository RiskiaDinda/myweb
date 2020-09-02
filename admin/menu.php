<html>
<head>
   <meta name="author" content="Suckittrees">
   <link rel="stylesheet" type="text/css" href="menu.css" />
   <link rel="shortcut icon" href="../icon.jpg" type="image/x-icon">
   <link rel="icon" href="../icon.jpg" type="image/x-icon">
</head>
<body style="background: url(bc.png);">
   <div class="header" align="center"><h1 style=" padding-top: 45px; color: blue">Admin Page</h1></div>
   <div id='menu_ver'>
   <ul>
      <li><a href='#'><span>HD Pictures</span></a></li>
      <li><a href='#'><span>Awards</span></a></li>
      <li><a href='#'><span>News</span></a>
         <ul>
            <li><a href='#'><span>Insert</span></a></li>
            <li><a href='#'><span>Update</span></a></li>
            <li><a href='#'><span>Delete</span></a></li>
         </ul>
      </li>
      <li><a href='#'><span>Logout</span></a></li>
   </ul>
   </div>
   <div class="kotak_login">
      <p class="tulisan_login"></p>

      <form>
         <label>Title</label>
         <input type="text" name="username" class="form_login" placeholder="text here">

         <label>Deskripsi</label>
         <input type="field" name="password" class="form_login" placeholder="text here">

         <label>Link</label>
         <input type="link" name="link" class="form_login" placeholder="text here">

         <input type="submit" class="tombol_login" value="INSERT">
         <input type="submit" class="tombol_login" value="DELETE">

         <br/>
         <br>
      </form>
      
   </div>
</body>
</html>