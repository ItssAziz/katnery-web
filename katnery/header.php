<?php
// Start output buffering then session
ob_start();
session_start();

// Language initialization
if (isset($_GET['lang'])) {
    $lang = ($_GET['lang'] === 'ar') ? 'ar' : (($_GET['lang'] === 'am') ? 'am' : 'en');
    $_SESSION['lang'] = $lang;
} else {
    $lang = $_SESSION['lang'] ?? 'en';
}
$translations = require "lang/$lang.php";
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= ($lang === 'ar') ? 'rtl' : 'ltr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katnery</title>

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- Tailwind & JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/typed.js/typed.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="assets/js/main.js" defer></script>
</head>
<body>
<header>
  <div class="container">
    <nav class="left-nav">
      <ul>
        <li><a href="rings.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='rings.php'?'active':'' ?>"><?= $translations['rings'] ?></a></li>
        <li><a href="necklaces.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='necklaces.php'?'active':'' ?>"><?= $translations['necklaces'] ?></a></li>
        <li><a href="bracelets.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='bracelets.php'?'active':'' ?>"><?= $translations['bracelets'] ?></a></li>
        <li><a href="earrings.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='earrings.php'?'active':'' ?>"><?= $translations['earrings'] ?></a></li>
      </ul>
    </nav>

    <div class="header-center">
      <div class="logo">
        <a href="index.php?lang=<?= $lang ?>">
          <img src="/assets/img/katnery logo.png" alt="<?= $translations['brand_logo'] ?>">
        </a>
      </div>
    </div>

    <nav class="right-nav">
      <ul>
        <li><a href="index.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>"><?= $translations['home'] ?></a></li>
        <li><a href="about.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='about.php'?'active':'' ?>"><?= $translations['about'] ?></a></li>
        <li><a href="contact.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='contact.php'?'active':'' ?>"><?= $translations['contact'] ?></a></li>
        <li class="language-switcher">
          <a href="?lang=en" class="<?= $lang==='en'?'active':'' ?>">EN</a>
          <span class="text-gray-400">/</span>
          <a href="?lang=ar" class="<?= $lang==='ar'?'active':'' ?>">العربية</a>
          <span class="text-gray-400">/</span>
          <a href="?lang=am" class="<?= $lang==='am'?'active':'' ?>">አማ</a>
        </li>
      </ul>
    </nav>

    <div class="mobile-menu-toggle">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <nav class="mobile-nav" tabindex="-1">
      <div class="mobile-nav-header">
        <span class="mobile-nav-title"><?= $translations['main_nav'] ?></span>
        <button class="mobile-nav-close" aria-label="Close Menu">&times;</button>
      </div>
      <ul>
        <li><a href="index.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>"><?= $translations['home'] ?></a></li>
        <li><a href="rings.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='rings.php'?'active':'' ?>"><?= $translations['rings'] ?></a></li>
        <li><a href="necklaces.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='necklaces.php'?'active':'' ?>"><?= $translations['necklaces'] ?></a></li>
        <li><a href="bracelets.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='bracelets.php'?'active':'' ?>"><?= $translations['bracelets'] ?></a></li>
        <li><a href="earrings.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='earrings.php'?'active':'' ?>"><?= $translations['earrings'] ?></a></li>
        <li><a href="about.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='about.php'?'active':'' ?>"><?= $translations['about'] ?></a></li>
        <li><a href="contact.php?lang=<?= $lang ?>" class="<?= basename($_SERVER['PHP_SELF'])=='contact.php'?'active':'' ?>"><?= $translations['contact'] ?></a></li>
        <li class="mobile-language-switcher">
          <a href="?lang=en" class="<?= $lang==='en'?'active':'' ?>">EN</a>
          <span class="text-gray-400">/</span>
          <a href="?lang=ar" class="<?= $lang==='ar'?'active':'' ?>">العربية</a>
          <span class="text-gray-400">/</span>
          <a href="?lang=am" class="<?= $lang==='am'?'active':'' ?>">አማ</a>
        </li>
      </ul>
    </nav>
    <div class="mobile-nav-backdrop"></div>
  </div>
</header>
</body>
</html>
