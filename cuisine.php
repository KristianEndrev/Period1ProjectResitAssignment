<?php
$firstName = '';
$lastName  = '';
$email     = '';
$favFood   = '';

$errors = [];
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values
    $firstName = trim($_POST['first_name'] ?? '');
    $lastName  = trim($_POST['last_name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $favFood   = $_POST['fav_food'] ?? '';

    // Validate first name
    if ($firstName === '') {
        $errors[] = 'Please enter your first name.';
    } elseif (!preg_match('/^[a-zA-Z\s-]+$/', $firstName)) {
        $errors[] = 'First name can contain only letters, spaces and dashes.';
    }

    // Validate last name
    if ($lastName === '') {
        $errors[] = 'Please enter your last name.';
    } elseif (!preg_match('/^[a-zA-Z\s-]+$/', $lastName)) {
        $errors[] = 'Last name can contain only letters, spaces and dashes.';
    }

    // Validate email
    if ($email === '') {
        $errors[] = 'Please enter your email address.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address with "@".';
    }

    // Validate favourite food
    $allowedFoods = ['banitsa','mousaka','shkembe','tarator','guvech','zelevi sarmi','shopska salad'];
    if ($favFood === '' || !in_array($favFood, $allowedFoods, true)) {
        $errors[] = 'Please choose your favourite Bulgarian food from the list.';
    }

    // If no errors -> success message
    if (empty($errors)) {
        $successMessage = 'Thank you, ' . htmlspecialchars($firstName . ' ' . $lastName) .
            '! Your favourite Bulgarian food is: ' . htmlspecialchars(ucwords($favFood)) . '.';
        // Optionally clear values
        $firstName = $lastName = $email = $favFood = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cuisine.css">
    <link rel="stylesheet" href="components/header.css">
    <link rel="stylesheet" href="components/footer.css">
    <title>Cuisine</title>
</head>
<body>
     <?php include 'components/header.php' ?>
    <div class="hero-box">
        <img src="images/CUISINE/cuisine-hero.png" alt="hero image">
        <div class="hero-text-box">
            <h1>A Culinary Journey Through Bulgaria</h1>
            <p>Bulgarian Cuisine: 10 Classics to Savor</p>
        </div>
    </div>
    <main>

        <div class="left-box">
            <div class="left-box-text">
                <h1>Banitsa - A symbol of the Bulgarian cuisine</h1>
                <p>Banitsa is a traditional Bulgarian pastry made from layers of flaky filo dough,
                 butter, and salty white cheese, baked until golden and crispy.</p>
            </div>
            <img src="images/CUISINE/banitsa.png" alt="Banitsa">
        </div>

        <div class="align-right">
            <div class="right-box">
                <img src="images/CUISINE/mousaka.png" alt="Mousaka">
                <div class="right-box-text">
                    <h1>Moussaka - A classic Bulgarian comfort dish</h1>
                    <p>Moussaka is a traditional Bulgarian baked dish made with layers
                    of seasoned minced meat, tender potatoes, and a creamy egg-and-yogurt topping. </p>
                </div>
            </div>
        </div>

        <div class="left-box">
            <div class="left-box-text">
                <h1>Tarator - A refreshing Bulgarian summer classic</h1>
                <p>Tarator is a cold Bulgarian soup made with yogurt, cucumbers, garlic, and fresh herbs. Light,
                     creamy, and incredibly refreshing, it's the perfect dish for hot summer days.</p>
            </div>
            <img src="images/CUISINE/tarator.png" alt="Tarator">
        </div>

        <div class="align-right">
            <div class="right-box">
                <img src="images/CUISINE/shopska-salad.png" alt="Shopska salad">
                <div class="right-box-text">
                    <h1>Shopska Salad - Bulgaria's Signature Salad</h1>
                    <p>Shopska salad is a simple and refreshing mix of fresh tomatoes, cucumbers, onions, and peppers, 
                        topped with grated Bulgarian white cheese. Light, crisp, and colorful, 
                        it's one of Bulgaria's most iconic salads. </p>
                </div>
            </div>
        </div>

        <div class="left-box fadeUp">
            <div class="left-box-text">
                <h1>Boza - A traditional Bulgarian fermented drink</h1>
                <p>Boza is a thick, lightly fermented drink made from grains such as wheat or millet. Sweet, slightly tangy, and creamy in texture,
                     it's a nostalgic favorite often enjoyed with pastries like banitsa.</p>
            </div>
            <img src="images/CUISINE/boza.png" alt="Boza">
        </div>

        <div class="align-right">
            <div class="right-box">
                <img src="images/CUISINE/zelevi-sarmi.png" alt="Zelevi sarmi">
                <div class="right-box-text">
                    <h1>Zelevi Sarmi - Traditional stuffed cabbage rolls</h1>
                    <p>Zelevi sarmi are tender cabbage leaves stuffed with a flavorful mixture of rice, minced meat,
                         and herbs, slowly cooked until soft and aromatic. Hearty and comforting, they are a classic dish of Bulgarian home cooking. </p>
                </div>
            </div>
        </div>

        <div id="guvech" class="left-box">
            <div id="guvech-text" class="left-box-text">
                <h1>Guvech - A slow-cooked Balkan vegetable and meat stew</h1>
                <p>Guvech is a traditional Balkan dish made with tender meat, tomatoes, peppers, potatoes, and herbs, slow-cooked in a clay pot. Rich, hearty, 
                    and full of flavor, it's a comforting classic of Bulgarian home cuisine.</p>
            </div>
            <img src="images/CUISINE/guvech.png" alt="Guvech">
        </div>

        <div class="align-right">
            <div class="right-box">
                <img src="images/CUISINE/ayran.png" alt="Ayran">
                <div class="right-box-text">
                    <h1>Ayran - A refreshing Bulgarian yogurt drink</h1>
                    <p>Ayran is a cool, salty drink made from yogurt, water, and a pinch of salt. Light, refreshing
                    and perfectly thirst-quenching, it's a popular companion to meals across Bulgaria. </p>
                </div>
            </div>
        </div>

        <div id="shkembe" class="left-box">
            <div class="left-box-text">
                <h1>Shkembe Chorba - A traditional Bulgarian tripe soup</h1>
                <p>Shkembe chorba is a rich, creamy soup made from beef tripe, garlic, vinegar, and spices. Bold in flavor and deeply comforting,
                     it's often enjoyed as a hearty cure-all and a classic of Bulgarian cuisine.</p>
            </div>
            <img src="images/CUISINE/shkembe-chorba.png" alt="Shkembe chorba">
        </div>

        <div class="align-right">
            <div class="right-box">
                <img src="images/CUISINE/rakija.png" alt="Rakija">
                <div class="right-box-text">
                    <h1>Rakija - Bulgaria's traditional fruit brandy</h1>
                    <p>Rakija is a strong alcoholic drink made from fermented fruits, most commonly grapes, plums, or apricots. Aromatic, powerful, 
                        and deeply rooted in Bulgarian culture, it's often enjoyed during celebrations and family gatherings.</p>
                </div>
            </div>
        </div>
        <div id="stayatform" class="share-food">
            <h1>Stay Updated with Bulgarian Cuisine</h1>
            <p>Join Our Food Newsletter</p>
        </div>
        <section class="cuisine-form-section">
  <?php if (!empty($errors)): ?>
    <div class="form-alert form-alert-error">
      <ul>
        <?php foreach ($errors as $error): ?>
          <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($successMessage): ?>
    <div class="form-alert form-alert-success">
      <?= $successMessage ?>
    </div>
  <?php endif; ?>

  <form method="post" class="cuisine-form" action="#stayatform">
    <div class="form-row">
      <label for="first_name">First name</label>
      <input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($firstName) ?>">
    </div>

    <div class="form-row">
      <label for="last_name">Last name</label>
      <input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($lastName) ?>">
    </div>

    <div class="form-row">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
    </div>

    <div class="form-row">
      <label for="fav_food">Favourite Bulgarian food</label>
      <select id="fav_food" name="fav_food">
        <option value="">-- Choose an option --</option>
        <option value="banitsa"        <?= $favFood === 'banitsa' ? 'selected' : '' ?>>Banitsa</option>
        <option value="mousaka"        <?= $favFood === 'mousaka' ? 'selected' : '' ?>>Mousaka</option>
        <option value="shkembe"        <?= $favFood === 'shkembe' ? 'selected' : '' ?>>Shkembe</option>
        <option value="tarator"        <?= $favFood === 'tarator' ? 'selected' : '' ?>>Tarator</option>
        <option value="guvech"         <?= $favFood === 'guvech' ? 'selected' : '' ?>>Guvech</option>
        <option value="zelevi sarmi"   <?= $favFood === 'zelevi sarmi' ? 'selected' : '' ?>>Zelevi sarmi</option>
        <option value="shopska salad"  <?= $favFood === 'shopska salad' ? 'selected' : '' ?>>Shopska salad</option>
      </select>
    </div>

    <button type="submit" class="cuisine-submit-btn">Send</button>
  </form>
</section>

    </main>
    <?php include 'components/footer.html'?>
</body>
</html>