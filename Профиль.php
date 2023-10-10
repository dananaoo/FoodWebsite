<?php 
session_start();

if (isset($_SESSION['StudentID']) && isset($_SESSION['logins'])) {

 ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Профиль</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Профиль.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Профиль">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-20aa"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" data-page-id="675910366" style="padding: 10px 60px;">Главная</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Главная.html#sec-0dbb" data-page-id="675910366">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Главная.html#carousel_4ee7" data-page-id="675910366">Рецепты</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Профиль.html" style="padding: 10px 60px;">Профиль</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Контакты.html" style="padding: 10px 60px;">Контакты</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="registr.php" style="padding: 10px 60px;">Регистрация</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="logins.php"style="padding: 0px 50px 0px 0px;">Вход</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="logout.php"style="padding: 0px 0px 0px 0px;">Выход</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" data-page-id="675910366">Главная</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html#sec-0dbb" data-page-id="675910366">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html#carousel_4ee7" data-page-id="675910366">Рецепты</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Профиль.html">Профиль</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Контакты.html">Контакты</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="registr.php">Регистрация</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logins.php" >Вход</a>
                      </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php">Выход</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <h5 class="u-custom-font u-font-lobster u-text u-text-default u-text-1">Recipe finder</h5>
      </div></header> 
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-3eef">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="980" data-image-height="980"></div>
        <h4 class="u-text u-text-default u-text-1">Привет <?php echo $_SESSION['Name']; ?> !</h4>
        <a href="favourite.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-4-dark-3 u-radius-50 u-btn-1">Любимые рецепты</a>
        <a href="profil.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-4-dark-3 u-radius-50 u-btn-2">Редактировать профиль</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-4-dark-2 u-footer" id="sec-eb02"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h5 class="u-custom-font u-font-georgia u-text u-text-default u-text-1">Recipe finder</h5>
        <h6 class="u-custom-font u-font-arial u-text u-text-default u-text-grey-75 u-text-2">Наши контакты:&nbsp;<br>+7 777 856 9256<br>+7 778 111 5802
        </h6>
      </div></footer>
  
</html>
<?php 
}else{
     header("Location: logins.php");
     exit();
}
 ?>