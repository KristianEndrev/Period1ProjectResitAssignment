<?php
// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'indexFR.php':
        $current_lang = 'fr';
        $current_lang_text = 'FR';
        break;
    default:
        $current_lang = 'en';
        $current_lang_text = 'EN';
        break;
}

// Dropdown language options excluding current language using associative arrays and keys
$lang_options = [
    'en' => ['text' => 'EN', 'page' => 'index.php'],
    'fr' => ['text' => 'FR', 'page' => 'indexFR.php'],
    
];

// Remove the current language from options so it doesn't appear in dropdown
unset($lang_options[$current_lang]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>

     <div class="navigation">
           
            <div nava-logo>
                <img src="images/images/cam-flag 1.png" alt="flag">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">PAGE D'ACCUEIL</a></li>
                     <li><a href="tourism.php">TOURISME</a></li>
                      <li><a href="culture.php">CULTURE</a></li>
                       <li><a href="history.php">HISTOIRE</a></li>
                        <li><a href="food.php">GASTRONOMIE</a></li>
                </ul>
            </nav>
            
                  <div class="navactions">
      <div class="language-dropdown">
      <button class="lang-select">
          <img src="images/images/english/en.png" alt="<?php echo $current_lang_text; ?> Flag" class="flag-icon">
          <?php echo $current_lang_text; ?>
          <span class="arrow">&#9662;</span>
      </button>
      <ul class="lang-menu">
          <?php foreach($lang_options as $lang_code => $lang): ?>
              <li>
                  <a href="<?php echo $lang['page']; ?>">
                      <img src="images/images/french/fr.png" alt="<?php echo $lang['text']; ?> Flag" class="flag-icon">
                      <?php echo $lang['text']; ?>
                  </a>
              </li>
          <?php endforeach; ?>
     </div>
     </div>

    </header>

    <main>
        
    <div class="hero-page">
        <div class="welcome-home">
            <h1>BIENVENUE AU CAMEROUN</h1>
     </div>

    </div>
    </main>

     <footer>
    <div class="footer-grid">
        
        
    <!-- Adresse -->
        <div class="footer-address">
           
            <span>NOTRE EMPLACEMENT</span>
            <span>RUE DES AMIE AKWA</span>
            <span>EN FACE DE LA BANQUE AGBC</span>
        </div>
        
        <div class="visiting-hours">
            <ul>
                    <li>Lundi - 16h-17h30</li>
                    <li>Jeudi - 14h-18h</li>
                    <li>Samedi - 9h-13h</li>
                    
                </ul>
        </div>
            
    

        <!-- Coordonnées -->
        <div class="footer-contact">
            <p>
                <a href="mailto:welcometocameroon@fake.com">
                    <img src="images/images//email/good_mail.png" alt="Icône e-mail">
                    welcometocameroon@fake.com
                </a>
            </p>
            <p>
                <a href="tel:+237675799739">
                    <img src="images/images/good_phone.png" alt="Icône téléphone">
                    +237675799739
                </a>
            </p>
        </div>
    </div>
</footer>
    
    
</body>
</html>