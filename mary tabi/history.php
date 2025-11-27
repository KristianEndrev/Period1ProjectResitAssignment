<?php

// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'historyFR.php':
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
    'en' => ['text' => 'EN', 'page' => 'history.php'],
    'fr' => ['text' => 'FR', 'page' => 'historyFR.php'],
    
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
            <h1>Learning Cameroon History</h1>
            <p>Cameroon has a long and diverse history shaped by its many peoples and cultures. It was first inhabited by various indigenous communities before European explorers arrived in the 15th century. Later, it became a German colony, then was divided between France and Britain after World War I. Cameroon gained independence in 1960, with the British-administered regions joining in 1961, Republic of Cameroon we know today.</p>
            <img src="images/images/cameroon-2.jpg" alt="picture">
        </div>
         
        <div class="history-2">
            <h2>Caneroon After Her Indepences</h2>
            <p>After gaining independence, Cameroon faced the challenge of uniting its diverse regions and ethnic groups. The country adopted a federal system to accommodate the English-speaking and French-speaking regions, but tensions and political changes over the years led to the creation of a unitary state in 1972. Since then, Cameroon has worked to develop its economy, infrastructure, and education while preserving its rich cultural heritage</p>
            <img src="images/images/diversite-culturelle-du-Cameroun-1024x585.webp" alt="picture">
        </div>

        <div class="history-3">
            <h2>Cameroon Has A Variety Of Ethnic Grroups</h2>
            <p>Cameroon has over 250 ethnic groups with so many languages and has a population of of 40 million inhabintants according to the census conducted in 2023.</p>
            <img src="images/images/free-photo-of-cameroon-reunification-monument-in-capital-city-of-cameroon.jpeg" alt="photo">
        </div>
        

        <div class="history-4">
            <h2>Cameroon has the olders president</h2>
            <p>Cameroon has the oldest president in the world,he has been ruling the country since 1982 and he is 92 years old.</p>
            <img src="images/images/Paul-Biy.png" alt="an image">
        </div>

    </div>
    </main>
     <footer>
    <div class="footer-grid">
        
        
    <!-- Address -->
        <div class="footer-address">
           
            <span>OUR LOCATION</span>
            <span>RUE DES AMIE AKWA</span>
            <span>EN FACE AGBC BANK</span>
        </div>
        
        <div class="visiting-hours">
            <ul>
                    <li>Mon - 4pm-5:30pm</li>
                    <li>Thursday - 2pm- 18:00</li>
                    <li>Saturday - 9am - 1pm</li>
                    
                </ul>
        </div>
            
    

        <!-- Contact Info -->
        <div class="footer-contact">
            <p>
                <a href="mailto:welcometocameroon@fake.com">
                    <img src="images/images/email/good_mail.png" alt="Email Icon">
                    welcometocameroon@fake.com
                </a>
            </p>
            <p>
                <a href="tel:+237675799739">
                    <img src="images/images/phone/good_phone.png" alt="Phone Icon">
                    +237675799739
                </a>
            </p>
        </div>
    </div>
</footer>
</body>
</html>
    
    
    
    
    
    
    
    
        
    
    


        

    </main>
    
</body>
</html>