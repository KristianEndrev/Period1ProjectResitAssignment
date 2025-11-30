<?php

// Determine current page language by current PHP filename
$current_file = basename($_SERVER['PHP_SELF']);

switch ($current_file) {
    case 'foodFR.php':
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
    'en' => ['text' => 'EN', 'page' => 'food.php'],
    'fr' => ['text' => 'FR', 'page' => 'foodFR.php'],
    
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
    <link rel="stylesheet" href="tourism.css">
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
            <h1>Welcome To Cameroon The Heart Of Africa, Awaiting To Be Explore</h1>
            <p>
            Cameroon is a place where Africa's beauty and diversity comes together.The nations has montaintains, waterfalls, beaches and wildlife all in one stunning destination</p>
            <img src="images/images/maxre.jpg" alt="an image of animals">
        </div>
         
        <div class="tourism-2">


            <h2>Limbe Zoo</h2>
                    <p>Limbe Zoo, located in the coastal town of Limbe in Cameroon, is a sanctuary dedicated to rescuing and protecting wildlife, especially primates like gorillas, chimpanzees, and drills, and now serve as an important educational center. Visitors can learn about Cameroon’s rich biodiversity while observing animals in a peaceful, well-maintained environment surrounded by lush tropical greenery.</p>
                    <img src="images/images/limbe zoo.webp" alt="an image with animals">  
        </div>

        <div class="tourism-3">
            <h2>Waza Park</h2>
                        <p>Waza National Park, located in northern Cameroon near the border with Chad, is one of the country's most important wildlife reserves. The park spans over 1,700 square kilometers and is home to a rich diversity of animals, including elephants, lions, giraffes, antelopes, and numerous bird species. Its vast savannahs, wetlands, and floodplains provide ideal habitats for both large mammals and migratory birds, making Waza Park a prime destination for wildlife enthusiasts and eco-tourists seeking to experience the natural beauty of Cameroon</p>
                        <img src="images/images/safari park.jpg" alt="an image of a park with animals">
           
        </div>
        

        <div class="tourism-4">
            <h2>Lobe Water-fall</h2>
            <p>The Lobe Waterfall, located near the coastal town of Kribi in Cameroon, is a stunning natural wonder where the Atlantic Ocean meets lush tropical rainforest. Unique for its dramatic cascade directly into the sea, the falls offer a breathtaking combination of river, forest, and ocean scenery. Surrounded by rocky cliffs and sandy beaches, Lobe Waterfall is a popular destination for tourists seeking both adventure and relaxation, providing opportunities for swimming, photography, and enjoying the rich biodiversity of the coastal region.</p>
            <img src="images/images/lobe fall.jpg" alt="an image of a waterfall">
           
        </div>
        

    </div>

     <div class="form-right">
                <h4>Do Want To Know Much About The Cameroon Tourism Sector? Send  us A Message</h4>
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