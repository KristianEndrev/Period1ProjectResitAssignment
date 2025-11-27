<?php
// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'tourismFR.php':
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
    'en' => ['text' => 'EN', 'page' => 'tourism.php'],
    'fr' => ['text' => 'FR', 'page' => 'tourismFR.php'],
    
];

// Remove the current language from options so it doesn't appear in dropdown
unset($lang_options[$current_lang]);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue Au Cameroon/title>
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
            <div class="tourism-page">
        <div class="tourism-1">
            <h1>Bienvenue au Cameroun, le cœur de l'Afrique, qui n'attend qu'à être exploré</h1>
            <p>
            Le Cameroun est un lieu où se conjuguent la beauté et la diversité de l'Afrique. Le pays possède des montagnes, des cascades, des plages et une faune sauvage, le tout dans une destination époustouflante. </p>
            <img src="images/images/maxre.jpg" alt="une image d'animaux">
        </div>

        <div class="tourism-2">


            <h2>Zoo de Limbé</h2>
                    <p>Le zoo de Limbé, situé dans la ville côtière de Limbé au Cameroun, est un sanctuaire dédié au sauvetage et à la protection de la faune sauvage, en particulier des primates tels que les gorilles, les chimpanzés et les drills. Il sert aujourd'hui de centre éducatif important. Les visiteurs peuvent découvrir la riche biodiversité du Cameroun tout en observant les animaux dans un environnement paisible et bien entretenu, entouré d'une végétation tropicale luxuriante. </p>
                    <img src="images/images/limbe zoo.webp" alt="une image avec des animaux">  
        </div>

        <div class="tourism-3">
            <h2>Parc de Waza</h2>
                        <p>Le parc national de Waza, situé au nord du Cameroun près de la frontière avec le Tchad, est l'une des réserves fauniques les plus importantes du pays. Le parc s'étend sur plus de 1 700 kilomètres carrés et abrite une grande diversité d'animaux, notamment des éléphants, des lions, des girafes, des antilopes et de nombreuses espèces d'oiseaux. Ses vastes savanes, ses zones humides et ses plaines inondables offrent un habitat idéal aux grands mammifères et aux oiseaux migrateurs, faisant du parc de Waza une destination de choix pour les amateurs de faune sauvage et les écotouristes qui souhaitent découvrir la beauté naturelle du Cameroun.
                        <img src="images/images/safari park.jpg" alt="une image d'un parc avec des animaux">
           
        </div>

        <div class="tourism-4">
            <h2>Cascade de Lobe</h2>
            <p>La cascade de Lobe, située près de la ville côtière de Kribi au Cameroun, est une merveille naturelle époustouflante où l'océan Atlantique rencontre la forêt tropicale luxuriante. Unique en son genre avec sa cascade spectaculaire qui se jette directement dans la mer, elle offre une combinaison à couper le souffle de paysages fluviaux, forestiers et océaniques. Entourée de falaises rocheuses et de plages de sable, la cascade de Lobe est une destination prisée des touristes en quête d'aventure et de détente, qui peuvent s'y baigner, prendre des photos et profiter de la riche biodiversité de la région côtière. </p>
            <img src="images/images/lobe fall.jpg" alt="une image d'une cascade">
           
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
                    <img src="images/images/phone/good_phone.png" alt="Icône téléphone">
                    +237675799739
                </a>
            </p>
        </div>
    </div>
</footer>
            

    

</body>
</html>
