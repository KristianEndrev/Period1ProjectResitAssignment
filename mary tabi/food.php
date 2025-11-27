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

    <div class="food-page">
        <div class="food-1">
            <h1>About Cameroon Cusines</h1>
            <p >Cameroon is often called "Africa in miniature" because of its incredible cultural and culinary diversity. The country has over 250 ethnic groups, each contributing unique flavors and traditional dishes, resulting in a rich variety of cuisines. From stews like Ndolé and Eru to dishes such as Achu Fufu, Ekwang, and Mbongo Tchobi and more. Cameroonian cuisine reflects a vibrant mix of local ingredients, cooking techniques, and regional tastes, making it one of the most diverse culinary landscapes in Africa.</p>
            <h2> Ekwange</2>
            <p>Ekwang is a traditional Cameroonian dish, particularly popular in the Southwest and Northwest regions. It is made from grated cocoyams that are wrapped in cocoyam or plantain leaves, then cooked in a rich and flavorful sauce made with palm oil, spices, and often smoked fish, meat, or vegetables. Ekwang is cherished for its unique texture and savory taste, and it is often served during special occasions and family gatherings as a hearty and comforting meal.</p>
            <img src="images/images/Ekwang-1.jpg" alt="food">
        </div>
         
        <div class="food-2">
            <h2>Ndole and plantains</h2>
            <p>Ndolé and Plantains is a beloved Cameroonian dish combining bitterleaf stew (ndolé) with boiled or fried plantains. Ndolé is made from bitterleaf, peanuts, spices, and often includes meat or fish, creating a rich, flavorful, and slightly nutty stew. The sweet and soft plantains perfectly complement the savory ndolé, making it a hearty and satisfying meal that is a staple at family gatherings and festive occasions across Cameroon.</p>
            <img src="images/images/NODOLE.jpg" alt="food">           
        </div>

        <div class="food-3">
            <h2>Achu</h2>
            <p>Achu is a traditional Cameroonian dish, especially popular among the people of the Northwest region.It consists of pounded cocoyams formed into a smooth, dough-like consistency, often served with a vibrant yellow soup made from palm oil, spices, and sometimes meat or fish. Achu is known for its unique texture and rich, flavorful taste, making it a cherished dish for special occasions, celebrations, and communal meals.</p>
            <img src="images/images/achu .jpg" alt="food">              
        </div>
        
        <div class="food-4">
            <h2>Fufu and Eru</h2>
            <P>Fufu and Eru is a classic dish from Cameroon, particularly enjoyed in the Southwest region. Fufu is a smooth, starchy dough made from cassava, yams, or cocoyams, while Eru is a rich vegetable stew made with finely shredded eru leaves (a type of wild spinach), waterleaf or spinach, palm  oil, and often accompanied by fish or meat. The combination offers a hearty, flavorful, and nutritious meal that is deeply rooted in Cameroonian culinary tradition and is commonly served during family gatherings and celebrations.</P>
            <img src="images/images/Eru.jpg" alt="food">
        </div>
    </div>

     <div class="form-right">
                <h4>Do Want To Know Much About Cameroon? Send  us A Message</h4>
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
