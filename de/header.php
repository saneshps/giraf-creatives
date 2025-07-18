   <?php include("gtag_body.php"); ?>
   <header class="header">
     <div class="toggle-menus">
       <!-- country -->
       <ul class="country-flag">
         <li> <a href="https://girafcreatives.com/de/en"> <img src="./img/united-kingdom-flag.png" alt="flag"> </a> </li>
         <li> <a href="https://girafcreatives.com/de"> <img src="./img/german-flag.png" alt="flag"> </a> </li>
       </ul>
       <!-- country -->
       <span class="menu-text"> Speisekarte </span>
       <button aria-label='Toggle menu' class='nav-button button-lines button-lines-x close' role='button' type='button'>
         <span class='lines'></span>
       </button>
       <!-- logo -->
       <a href="https://girafcreatives.com/de"> <img class="logo" src="./img/logo.png" alt="logo"> </a>
       <!-- logo -->
     </div>
   </header>
   <?php $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>
   <nav class="nav-wrapper">
     <!-- push logo -->
     <img class="push-logo" src="./img/push-logo.png" alt="logo">
     <!-- push logo -->
     <ul class="nav">
       <li class="<?php echo ($curPageName == "index.php") ? 'active' : '' ?>">
         <a href="index.php"> Heim </a>
       </li>
       <li class="<?php echo ($curPageName == "Über-uns.php") ? 'active' : '' ?>">
         <a href="Über-uns.php"> Über uns </a>
       </li>
       <li class="<?php echo ($curPageName == "portfolio.php") ? 'active' : '' ?>">
         <a href="portfolio.php"> Projekte </a>
       </li>
       <li class="<?php echo ($curPageName == "dienstleistungen.php" || $curPageName == "digital-marketing.php" || $curPageName == "branding.php" || $curPageName == "designing.php" || $curPageName == "web-and-app-development.php" || $curPageName == "photography-and-video-production.php" || $curPageName == "animation.php") ? 'active' : '' ?>">
         <a href="dienstleistungen.php"> Unsere Services </a>
       </li>
       <li class="<?php echo ($curPageName == "blogs.php" || $curPageName == "blog-details.php") ? 'active' : '' ?>">
         <a href="blogs.php"> Blogs </a>
       </li>
       <li class="<?php echo ($curPageName == "kontaktiere-uns.php") ? 'active' : '' ?>">
         <a href="kontaktiere-uns.php"> Kontakt </a>
       </li>
     </ul>
     <span class="nav-marker"></span>
   </nav>