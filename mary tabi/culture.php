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
    <title>Welcome To Cameroon</title>
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

    <div class="culture-page">
        <div class="culture-1">
            <h1>Welcome To The Cultural Divesity Of Cameroon</h1>
            <p>Cameroon is home to more than 250 ethnic groups and languages, ranging from the Fulani in the North to the Bamileke and Bamoun in the West, the grassfild in the north west, the diverse forest communities in the Center and South, the coastal Sawa peoples, and the vibrant cultures of the South West region. Each group contributes its own traditions, languages, and customs, making the country one of the most culturally rich and diverse in Africa.</p>
            <img src="images/images/culture1.webp" alt="an image of a cultural display">
           
        </div>
         
        <div class="culture-2">
            <h2>The Grassfields culture</h2>
            <p>The Grassfield culture of Cameroon’s North West region is known for its rich traditions, vibrant artistry, and strong sense of community. It features powerful chiefdoms led by Fons, who serve as both political and spiritual leaders. The people are renowned for their intricate woodcarvings, colorful regalia, and ceremonial dances that play important roles in festivals and rites of passage. With a deep respect for ancestry and heritage, Grassfield communities preserve customs that have been passed down for generations.</p>
            <img src="images/images/grassfield1.jpg" alt="traditional atire">
 
        </div>

        <div class="culture-3">
            <h2>The Sawa Culture</h2>
            <p>The Sawa culture, found mainly along Cameroon’s coastal regions, is known for its close connection to the sea, vibrant traditions, and strong communal values. The Sawa peoples—such as the Douala, Bakweri, Bakoko, and Bassa—celebrate their heritage through colorful festivals like the Ngondo, where water rituals honor ancestral spirits. Their music and dance, featuring rhythms of drums and traditional instruments, reflect a lively cultural identity. Fishing, storytelling, and respect for elders all play important roles in daily life, making Sawa culture both deeply rooted and culturally expressive.</p>
            <img src="images/images/ngondo 2.jpg" alt="a cutural display">
            
        </div>
        
        <div class="culture-4">
            <h3>The Bamilike Culture</h3>
            <p>The Bamileke culture of Cameroon’s West region is known for its rich traditions, strong work ethic, and highly organized community life. Bamileke kingdoms are led by Fons, who serve as guardians of customs and spiritual leaders. The people are renowned for their vibrant festivals, masked dances, and beautifully crafted beadwork and sculptures. Family heritage and lineage play central roles, and farming—especially of crops like cocoa, coffee, and vegetables—is an important part of daily life. Together, these traditions make Bamileke culture one of the most dynamic and respected in Cameroon.</p>
            <img src="images/images/bamileke culture.jpg" alt="an image of a cutural display">
           
        </div>
            
        
    </div>

    <div class="form-right">
                <h4>Do Want To Know More About Our culture? Send  us A Message</h4>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <input type="text" name=" first name" id="first name" placeholder="first name"><br>
                    <input type="text" name="last name " id="last name"  placeholder="last name"><br>
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <textarea name="message" id="message" rows="4" cols="50" placeholder="Message"></textarea>

                    <div>
                        <input type="submit" name="submit" value="Send">
                        <input type="reset" name="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>

    </main><br><br>

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
    
    



    







    
    
</body>
</html>