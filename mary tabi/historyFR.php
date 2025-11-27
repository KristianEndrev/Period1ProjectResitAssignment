<?php
// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'cultureFR.php':
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
    'en' => ['text' => 'EN', 'page' => 'culture.php'],
    'fr' => ['text' => 'FR', 'page' => 'cultureFR.php'],
    
];

// Remove the current language from options so it doesn't appear in dropdown
unset($lang_options[$current_lang]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue Au Cameroon</title>
    <link rel="stylesheet" href="test.css">
    
</head>
<body>
        <header>

     <div class="navigation">
           
            <div nava-logo>
                <img src="images/images/cam-flag 1.png" alt="flag">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOMEPAGE</a></li>
                     <li><a href="tourism.php">TOURISM</a></li>
                      <li><a href="culture.php">CULTURE</a></li>
                       <li><a href="history.php">HISTORY</a></li>
                        <li><a href="food.php">FOOD</a></li>
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
          </header>
            
          <main>
            <div class="history-page">
        <div class="history-1">
            <h1>Apprendre l'histoire du Cameroun</h1>
            <p>Le Cameroun a une histoire longue et diversifiée, façonnée par ses nombreux peuples et cultures. Il était d'abord habité par diverses communautés indigènes avant l'arrivée des explorateurs européens au XVe siècle. Plus tard, il est devenu une colonie allemande, puis a été divisé entre la France et la Grande-Bretagne après la Première Guerre mondiale. Le Cameroun a obtenu son indépendance en 1960, les régions administrées par les Britanniques l'ont rejoint en 1961, formant ainsi la République du Cameroun que nous connaissons aujourd'hui. </p>
            <img src="images/images/cameroon-2.jpg" alt="image">
        </div>

        <div class="history-2">
            <h2>Le Cameroun après son indépendance</h2>
            <p>Après avoir obtenu son indépendance, le Cameroun a dû relever le défi d'unifier ses différentes régions et groupes ethniques. Le pays a adopté un système fédéral afin de concilier les régions anglophones et francophones, mais les tensions et les changements politiques qui ont marqué ces années ont conduit à la création d'un État unitaire en 1972. Depuis lors, le Cameroun s'est efforcé de développer son économie, ses infrastructures et son éducation tout en préservant son riche patrimoine culturel.
            <img src="images/images/diversite-culturelle-du-Cameroun-1024x585.webp" alt="image">
        </div>

        <div class="history-3">
            <h2>Le Cameroun compte une grande diversité de groupes ethniques</h2>
            <p>Le Cameroun compte plus de 250 groupes ethniques parlant autant de langues et a une population de 40 millions d'habitants selon le recensement effectué en 2023.
            <img src="images/images/free-photo-of-cameroon-reunification-monument-in-capital-city-of-cameroon.jpeg" alt="photo">
        </div>
        
        
        <div class="history-4">
            <h2>Le Cameroun a le président le plus âgé</h2>
            <p>Le Cameroun a le président le plus âgé au monde, il dirige le pays depuis 1982 et il est âgé de 92 ans.</p>
            <img src="images/images/Paul-Biy.png" alt="une image">
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
                    <img src="images/images/email/good_mail.png" alt="Icône e-mail">
                    welcometocameroon@fake.com
                </a>
            </p>
            <p>
                <a href="tel:+237675799739">
                    <img src="images/good_phone.png" alt="Icône téléphone">
                    +237675799739
                </a>
            </p>
        </div>
    </div>
</footer>
            

    

</body>
</html>
