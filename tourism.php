<?php
$country = "Sierra Leone";
$currentYear = date('Y');

$name = "";
$placeChoice = "";
$feedbackMessage = "";
$errors = [];

$places = [
    "Lumley Beach",
    "Tokeh Beach",
    "Banana Island",
    "Tacugama Chimpanzee Sanctuary",
    "Bunce Island"
];

$attractions = [
    [
        "name" => "Bunce Island", "type" => "Heritage", "region" => "Freetown River",
        "description" => "A historic British slave castle. A deeply moving site for those tracing their ancestry."
    ],
    [
        "name" => "Tacugama Sanctuary", "type" => "Wildlife", "region" => "Western Area Forest",
        "description" => "A safe haven for rescued chimpanzees located in the rainforest, offering eco-lodges."
    ],
    [
        "name" => "Banana Island", "type" => "Islands", "region" => "Western Area",
        "description" => "Offshore islands with small communities, calm beaches, and history."
    ]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
    $placeChoice = isset($_POST["place"]) ? trim($_POST["place"]) : "";

    if ($name === "") $errors[] = "Please enter your name.";
    if ($placeChoice === "" || !in_array($placeChoice, $places, true)) $errors[] = "Please select a valid place.";

    if (empty($errors)) {
        $feedbackMessage = "Thank you, " . htmlspecialchars($name) . "! We have noted your interest in " . htmlspecialchars($placeChoice) . ".";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism - <?php echo $country; ?></title>
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
            <a href="culture.php">Culture</a>
            <a href="food.php">Food</a>
            <a href="tourism.php" class="active">Tourism</a>
        </nav>
    </div>
</header>

<main>
    <section class="card section-tourism">
        <h1 class="section-heading">Tourism & Travel</h1>
        
        <div class="tourism-intro">
            <p>
                <?php echo $country; ?> is an emerging tourist destination known as the "Hawaii of Africa" due to its 
                breathtaking scenery. The country offers a unique mix of <strong>Eco-Tourism</strong> (rainforests and wildlife), 
                <strong>Heritage Tourism</strong> (historic slave trade sites), and <strong>Beach Relaxation</strong>.
            </p>
            <p>
                The Freetown Peninsula is famous for beaches such as Lumley Beach, which is lively and close to the city, 
                and Tokeh Beach, which is quieter and more relaxed. Offshore, the Banana Island offer calm beaches, 
                small communities, and opportunities for swimming, snorkelling, and enjoying fresh seafood.
            </p>
        </div>

        <div class="tourism-grid">
            
            <div class="tourism-image-col">
                <img src="images/beach_No2.png" alt="Tropical Beach">
                <figcaption>River Number 2 Beach is one of the most famous spots.</figcaption>
                
                <h3 class="best-time-heading">Best Time to Visit</h3>
                <p class="best-time-text">The dry season (Oct-May) is perfect for sunny beach days.</p>
            </div>

            <div class="tourism-form-wrapper">
                <h3>Share Your Dream Visit</h3>

                <?php if (!empty($errors)) { ?>
                    <div class="error-box">
                        <ul><?php foreach ($errors as $e) echo "<li>$e</li>"; ?></ul>
                    </div>
                <?php } ?>

                <?php if ($feedbackMessage) { ?>
                    <p class="success-box"><?php echo $feedbackMessage; ?></p>
                <?php } ?>
                
                <form method="post" action="" class="simple-form" novalidate>
                    <div class="form-row">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" placeholder="Enter your name">
                    </div>
                    <div class="form-row">
                        <label for="place">Place you would like to visit:</label>
                        <select name="place" id="place">
                            <option value="">-- please select --</option>
                            <?php foreach ($places as $place) { ?>
                                <option value="<?php echo htmlspecialchars($place); ?>" <?php if ($placeChoice === $place) echo "selected"; ?>>
                                    <?php echo htmlspecialchars($place); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </div>

        <div class="attractions-section">
            <h2>Featured Attractions</h2>
            <div class="attractions-grid">
                <?php foreach ($attractions as $spot) { ?>
                    <article class="attraction-card">
                        <h3><?php echo htmlspecialchars($spot["name"]); ?></h3>
                        <p><strong>Type:</strong> <?php echo htmlspecialchars($spot["type"]); ?></p>
                        <p><?php echo htmlspecialchars($spot["description"]); ?></p>
                    </article>
                <?php } ?>
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