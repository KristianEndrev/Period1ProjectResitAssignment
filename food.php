<?php
$country = "Sierra Leone";
$currentYear = date('Y');


$foodImages = [
    [
        "src" => "images/cassava&soup.png",
        "alt" => "Cassava Leaf Sauce",
        "caption" => "Rice with spicy Cassava Leaf sauce."
    ],
    [
        "src" => "images/seafood.png",
        "alt" => "Fresh Seafood",
        "caption" => "Fresh grilled seafood from the coast."
    ]
];

$dishes = [
    "Cassava Leaf Sauce" => "Ground cassava leaves cooked with palm oil, peanut paste, and fish/meat.",
    "Groundnut Soup"     => "A rich, creamy peanut butter stew usually served with rice.",
    "Jollof Rice"        => "Rice cooked in a spicy tomato and onion stew, a West African favorite.",
    "Pepper Soup"        => "A very spicy, medicinal broth made with fresh fish or goat meat.",
    "Fry Fry"            => "Street food consisting of fried plantains, akara (bean cakes), and bread."
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food - <?php echo $country; ?></title>
    <link rel="stylesheet" href="sierraleone.css">
</head>
<body>

<div class="flag-bar">
    <div class="flag-stripe green"></div>
    <div class="flag-stripe white"></div>
    <div class="flag-stripe blue"></div>
</div>

<header>
    <div class="header-container">
        <div class="site-title"><?php echo $country; ?>: Land of Lion Mountains</div>
        <nav class="main-nav">
            <a href="index.php">Home</a>
            <a href="facts.php">Facts</a>
            <a href="culture.php">Culture</a>
            <a href="food.php" class="active">Food</a>
            <a href="tourism.php">Tourism</a>
        </nav>
    </div>
</header>

<main>
    <section class="card section-culture">
        <h1 class="section-heading">Food & Traditional Dishes</h1>
        
        <p>
            There is a popular saying in <?php echo $country; ?>: <em>"If I haven't eaten rice, I haven't eaten today."</em> 
            Rice is the staple food, eaten for lunch and often dinner. It is typically served in large portions with 
            flavorful, spicy sauces made from local vegetables, palm oil, and seafood.
        </p>

        <p style="margin-top: 1rem;">
            <strong>Street Food:</strong> Known as "Fry Fry," street stalls sell fried plantains, yams, and spicy dipping sauces 
            well into the night. Fresh tropical fruits like mangoes, papayas, and pineapples are also abundant and cheap.
        </p>

        <h2>Top 5 Must-Try Dishes</h2>
        <ul class="food-list">
            <?php foreach ($dishes as $name => $desc) { ?>
                <li>
                    <strong><?php echo htmlspecialchars($name); ?>:</strong> 
                    <?php echo htmlspecialchars($desc); ?>
                </li>
            <?php } ?>
        </ul>

        <h3>Beverages</h3>
        <p>
            Locals enjoy <strong>Poyo</strong> (fresh palm wine) tapped directly from palm trees, as well as refreshing 
            ginger beer made from fresh ginger roots.
        </p>

        <h2 style="margin-top: 2rem;">Culinary Gallery</h2>
        <div class="culture-photo-grid">
            <?php foreach ($foodImages as $img) { ?>
                <figure>
                    <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['alt']; ?>">
                    <figcaption><?php echo $img['caption']; ?></figcaption>
                </figure>
            <?php } ?>
        </div>

    </section>
</main>

<footer>
    <div class="footer-container">
        <p>&copy; Umaru Jah, <?php echo $currentYear; ?>. Exploring <?php echo $country; ?>.</p>
    </div>
</footer>

</body>
</html>