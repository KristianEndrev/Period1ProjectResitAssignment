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
    <title>Bienvenue Au Cameroon/title>
        <link rel="stylesheet" href="culture.css">
    
    
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

           <div class="love.css">
        <div class="culture-1">
            <h1>Bienvenue dans la diversité culturelle du Cameroun</h1>
            <p>Le Cameroun abrite plus de 250 groupes ethniques et langues, allant des Peuls au nord aux Bamilékés et Bamouns à l'ouest, en passant par les prairies du nord-ouest, les diverses communautés forestières du centre et du sud, les peuples Sawa de la côte et les cultures dynamiques de la région sud-ouest. Chaque groupe apporte ses propres traditions, langues et coutumes, faisant du pays l'un des plus riches et diversifiés d'Afrique sur le plan culturel. </p>
            <img src="images/images/culture1.webp" alt="une image d'une exposition culturelle">
           
        </div>

         
        <div class="culture-2">
            <h2>La culture Grassfields</h2>
            <p>La culture Grassfields de la région nord-ouest du Cameroun est connue pour ses riches traditions, son art dynamique et son fort sens de la communauté. Elle se caractérise par de puissantes chefferies dirigées par des Fons, qui sont à la fois des chefs politiques et spirituels. Les habitants sont réputés pour leurs sculptures sur bois complexes, leurs costumes colorés et leurs danses cérémonielles qui jouent un rôle important dans les festivals et les rites de passage. Profondément respectueuses de leurs ancêtres et de leur héritage, les communautés Grassfields préservent des coutumes transmises de génération en génération. </p>
            <img src="images/images/grassfield1.jpg" alt="costume traditionnel">
 
        </div>

        <div class="culture-3">
            <h2>La culture Sawa</h2>
            <p>La culture Sawa, que l'on trouve principalement le long des régions côtières du Cameroun, est connue pour son lien étroit avec la mer, ses traditions vivantes et ses valeurs communautaires fortes. Les peuples Sawa, tels que les Douala, les Bakweri, les Bakoko et les Bassa, célèbrent leur héritage à travers des festivals colorés comme le Ngondo, où des rituels aquatiques honorent les esprits ancestraux. Leur musique et leurs danses, rythmées par les tambours et les instruments traditionnels, reflètent une identité culturelle vivante. La pêche, la narration d'histoires et le respect des anciens jouent tous un rôle important dans la vie quotidienne, rendant la culture Sawa à la fois profondément enracinée et culturellement expressive.
            <img src="images/images/ngondo 2.jpg" alt="une manifestation culturelle">
            </div>
        
        <div class="culture-4">
            <h3>La culture bamiliké</h3>
            <p>La culture bamiliké de la région occidentale du Cameroun est connue pour ses riches traditions, sa forte éthique du travail et sa vie communautaire très organisée. Les royaumes bamilikés sont dirigés par des Fons, qui sont les gardiens des coutumes et les chefs spirituels. Le peuple est réputé pour ses festivals animés, ses danses masquées et ses sculptures et perles magnifiquement travaillées. L'héritage familial et la lignée jouent un rôle central, et l'agriculture, en particulier la culture du cacao, du café et des légumes, occupe une place importante dans la vie quotidienne. Ensemble, ces traditions font de la culture bamiléké l'une des plus dynamiques et respectées du Cameroun.
            <img src="images/images/bamileke culture.jpg" alt="une image d'une exposition culturelle">
           
        </div>
            
        
    </div>

    
    <div class="form-right">
                <h4>Vous souhaitez en savoir plus sur notre culture ? Envoyez-nous un message</h4>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <input type="text" name=" prénom" id="prénom" placeholder="prénom"><br>
                    <input type="text" name="nom " id="nom"  placeholder="nom"><br>
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <textarea name="message" id="message" rows="4" cols="50" placeholder="Message"></textarea>

                    <div>
                        <input type="submit" name="submit" value="Envoyer">
                        <input type="reset" name="reset" value="Réinitialiser">
                    </div>
                </form>

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
                    <img src="images/images//email/good_mail.png alt="Icône e-mail">
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
