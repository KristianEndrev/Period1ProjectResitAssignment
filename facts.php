<?php
$country = "Sierra Leone";
$currentYear = date('Y');

$quickFacts = [
    "Population"        => "Approx. 8.4 million people",
    "Capital City"      => "Freetown",
    "Independence Day"  => "April 27, 1961 (from the UK)",
    "Currency"          => "New Leone (SLE)",
    "Official Language" => "English (used in government/schools)",
    "Lingua Franca"     => "Krio (spoken by 97% of people)",
    "Major Exports"     => "Diamonds, Rutile, Cocoa, Coffee, Fish"
];

$regions = [
    "Western Area (Urban & Rural)",
    "Northern Province",
    "North West Province",
    "Southern Province",
    "Eastern Province"
];

$districts = [
    "Bo", "Bombali", "Bonthe", "Falaba", "Kailahun", 
    "Kambia", "Karene", "Kenema", "Koinadugu", "Kono", 
    "Moyamba", "Port Loko", "Pujehun", "Tonkolili", 
    "Western Area Rural", "Western Area Urban"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facts - <?php echo $country; ?></title>
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
            <a href="indexsierra.php">Home</a>
            <a href="facts.php" class="active">Facts</a>
            <a href="culture.php">Culture</a>
            <a href="food.php">Food</a>
            <a href="tourism.php">Tourism</a>
        </nav>
    </div>
</header>

<main>
    <section class="card section-facts">
        <h1 class="section-heading">Key Facts & Figures</h1>
        
        <div class="facts-grid">
            
            <div class="facts-left-col">
                <p class="intro-text">
                    Understanding the basics of <?php echo $country; ?> helps appreciate its uniqueness. 
                    Below is a snapshot of the nation's profile.
                </p>

                <h2>Quick Profile</h2>
                <ul class="facts-list">
                    <?php foreach ($quickFacts as $key => $value) { ?>
                        <li>
                            <strong><?php echo htmlspecialchars($key); ?>:</strong>
                            <?php echo htmlspecialchars($value); ?>
                        </li>
                    <?php } ?>
                </ul>

                <div class="flag-section">
                    <h2>The National Flag</h2>
                    <p>The tricolor flag has specific meanings:</p>
                    <ul class="sub-list flag-meaning-list">
                        <li><strong>Green:</strong> Agriculture & Mountains</li>
                        <li><strong>White:</strong> Unity & Justice</li>
                        <li><strong>Blue:</strong> Natural Harbor & Peace</li>
                    </ul>
                    <img src="images/sierra_leone_flag.png" alt="Flag of Sierra Leone" class="flag-image">
                </div>
            </div>

            <div class="facts-right-col">
                
                <figure class="scenery-figure">
                    <img src="images/lumley_beach.png" alt="Sierra Leone Scenery" class="scenery-image">
                    <figcaption>The Western Area Peninsula is the hub of tourism and administration.</figcaption>
                </figure>

                <div class="regions-section">
                    <h2>Administrative Regions</h2>
                    <p><?php echo $country; ?> is divided into five main regions:</p>
                    <ul class="sub-list">
                        <?php foreach ($regions as $region) { ?>
                            <li><?php echo htmlspecialchars($region); ?></li>
                        <?php } ?>
                    </ul>

                    <h3 class="districts-heading">The 16 Districts</h3>
                    <p>These regions are further divided into the following districts:</p>
                    <p class="districts-text">
                        <?php echo implode(", ", $districts); ?>.
                    </p>
                </div>
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