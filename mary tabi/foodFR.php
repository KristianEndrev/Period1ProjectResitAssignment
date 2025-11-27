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
    <title>Welcome To Cameroon</title>
    <link rel="stylesheet" href="food.css">
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
        <div class="food-page">
        <div class="food-1">
            <h1>À propos de la cuisine camerounaise</h1>
            <p >Le Cameroun est souvent appelé « l'Afrique en miniature » en raison de son incroyable diversité culturelle et culinaire. Le pays compte plus de 250 groupes ethniques, chacun apportant des saveurs et des plats traditionnels uniques, ce qui se traduit par une grande variété de cuisines. Des ragoûts comme le Ndolé et l'Eru aux plats tels que l'Achu Fufu, l'Ekwang et le Mbongo Tchobi, entre autres. La cuisine camerounaise reflète un mélange dynamique d'ingrédients locaux, de techniques culinaires et de saveurs régionales, ce qui en fait l'un des paysages culinaires les plus diversifiés d'Afrique.
            <h2> Ekwange</2>
            <p>L'ekwang est un plat traditionnel camerounais, particulièrement populaire dans les régions du sud-ouest et du nord-ouest. Il est préparé à partir de cocoyams râpés qui sont enveloppés dans des feuilles de cocoyam ou de bananier, puis cuits dans une sauce riche et savoureuse à base d'huile de palme, d'épices et souvent de poisson fumé, de viande ou de légumes. L'ekwang est apprécié pour sa texture unique et son goût savoureux. Il est souvent servi lors d'occasions spéciales et de réunions familiales comme repas copieux et réconfortant.
<img src="images/images/Ekwang-1.jpg" alt="food">
</div>

  
        <div class="food-2">
            <h2>Ndole et bananes plantains</h2>
            <p>Le ndolé et les bananes plantains est un plat camerounais très apprécié qui combine un ragoût de feuilles amères (ndolé) avec des bananes plantains bouillies ou frites. Le ndolé est préparé à partir de feuilles amères, d'arachides et d'épices, et comprend souvent de la viande ou du poisson, ce qui donne un ragoût riche, savoureux et légèrement noiseté. Les plantains doux et moelleux complètent parfaitement le ndolé salé, ce qui en fait un repas copieux et satisfaisant, incontournable lors des réunions de famille et des occasions festives à travers le Cameroun. </p>
            <img src="images/images/NODOLE.jpg" alt="food">           
        </div>

        <div class="food-3">
            <h2>Achu</h2>
            <p>L'achu est un plat traditionnel camerounais, particulièrement populaire parmi les habitants de la région du Nord-Ouest. Il se compose de cocoyams pilés, réduits en une pâte lisse et onctueuse, souvent servis avec une soupe jaune vif à base d'huile de palme, d'épices et parfois de viande ou de poisson. L'achu est connu pour sa texture unique et son goût riche et savoureux, ce qui en fait un plat très apprécié lors d'occasions spéciales, de célébrations et de repas communautaires. </p>
            <img src="images/images/achu .jpg" alt="nourriture">              
        </div>

        
        <div class="food-4">
            <h2>Fufu et Eru</h2>
            <P>Le fufu et l'eru sont des plats traditionnels du Cameroun, particulièrement appréciés dans le sud-ouest du pays. Le fufu est une pâte lisse et riche en amidon à base de manioc, d'igname ou de taro, tandis que l'eru est un ragoût de légumes riche à base de feuilles d'eru finement hachées (une sorte d'épinard sauvage), de feuilles d'eau ou d'épinards, d'huile de palme, souvent accompagné de poisson ou de viande. Cette combinaison offre un repas copieux, savoureux et nutritif, profondément ancré dans la tradition culinaire camerounaise et couramment servi lors des réunions de famille et des célébrations. </P>
            <img src="images/images/Eru.jpg" alt="food">
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
                    <img src="images/images/good_phone.png" alt="Icône téléphone">
                    +237675799739
                </a>
            </p>
        </div>
    </div>
</footer>
    
    
</body>
</html>