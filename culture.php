<?php
$country = "Sierra Leone";
$currentYear = date('Y');

$cultureImages = [
    [
        "src" => "images/traditional_dancers.png",
        "alt" => "Traditional Dancers",
        "caption" => "Traditional masquerades appear during holidays."
    ],
    [
        "src" => "images/bondo_cultural_dancer.png", 
        "alt" => "Bondo Cultural Dancers",
        "caption" => "Bondo cultural dancers performing traditional rites."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture - <?php echo $country; ?></title>
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
            <a href="facts.php">Facts</a>
            <a href="culture.php" class="active">Culture</a>
            <a href="food.php">Food</a>
            <a href="tourism.php">Tourism</a>
        </nav>
    </div>
</header>

<main>
    <section class="card culture-section">
        <h1 class="section-heading">Rich Cultural Heritage</h1>

        <div class="culture-text">
            <h3>Religious Harmony</h3>
            <p>
                One of <?php echo $country; ?>'s most beautiful traits is its religious tolerance. 
                The population is roughly divided between Muslims and Christians, yet they live in complete harmony. 
                It is very common to find families where the mother is Christian and the father is Muslim, 
                celebrating both Christmas and Eid al-Fitr together with equal joy. Violence based on religion is virtually unknown.
            </p>

            <h3>Traditional Societies</h3>
            <p>
                In many rural communities, traditional societies play a major role in education and growing up. 
                The <strong>Poro Society</strong> (for men) and the <strong>Bondo Society</strong> (for women) 
                teach young people the responsibilities of adulthood, leadership, and community laws. 
                While modern education is widespread, these traditions remain a respected part of the country's identity.
            </p>

            
            <h3>Hospitality</h3>
            <p>
                Visitors are treated with immense warmth. In traditional settings, a guest might be welcomed 
                with a kola nut, which represents peace and acceptance. The phrase <em>"I gladi for see you"</em> 
                (I am glad to see you) is a genuine sentiment felt everywhere from Freetown to the provinces.
            </p>
        </div>

        <h2 style="margin-top: 2rem;">Cultural Gallery</h2>
        
        <div class="culture-photo-grid">
            <?php foreach ($cultureImages as $img) { ?>
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