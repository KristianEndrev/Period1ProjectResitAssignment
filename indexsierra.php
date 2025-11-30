<?php
$country = "Sierra Leone";
$currentYear = date('Y');

date_default_timezone_set('Africa/Freetown'); 
$hour = date('H');

if ($hour < 12) {
    $greeting = "Good Morning";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $country; ?></title>
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
        <div class="site-title"><?php echo $country; ?>: Lion Mountains</div>
        <nav class="main-nav">
            <a href="indexsierra.php" class="active">Home</a>
            <a href="facts.php">Facts</a>
            <a href="culture.php">Culture</a>
            <a href="food.php">Food</a>
            <a href="tourism.php">Tourism</a>
        </nav>
    </div>
</header>

<main>
    
    <div class="greeting-banner">
        <?php echo "$greeting, welcome to the official guide of Sierra Leone!"; ?>
    </div>

    <section class="card">
        <h1 class="section-heading">Welcome to Sierra Leone</h1>
        
        <div class="hero-grid">
            <div class="hero-text">
                <p>
                    <strong>Sierra Leone</strong> is a lush, tropical country located on the southwest coast 
                    of West Africa. Known for its warm hospitality, it is bordered by Guinea, 
                    Liberia, and the Atlantic Ocean. The name comes from the Portuguese 
                    words <em>"Serra Lyoa"</em>, meaning "Lion Mountains," describing the 
                    impressive mountain range that rises from the harbor in Freetown.
                </p>
                <p style="margin-top: 1rem;">
                    Despite its small size, it offers diverse landscapes ranging from 
                    rainforests and savannahs to some of the most beautiful white-sand 
                    beaches in the world. The country is currently enjoying a period of 
                    peace, rebuilding, and vibrant cultural expression.
                </p>

                <h2>Geography & Climate</h2>
                <p>
                    The country has a tropical climate with two distinct seasons: the rainy 
                    season (May to October) and the dry season (November to April). The 
                    geography includes coastal mangroves, a wooded hill country, an 
                    upland plateau, and the eastern mountains, including Mount Bintumani, 
                    the highest peak in West Africa.
                </p>
            </div>

            <div class="hero-image">
                <img src="images/lumley_beach.png" alt="Sierra Leone Coastline" style="width: 100%; border-radius: 8px;">
                <figcaption>The stunning coastline where the mountains meet the sea in Freetown.</figcaption>
            </div>
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