<?php
$tab = $_GET['tab'] ?? 'music';

$title = '';
$text  = '';
$img   = '';

switch ($tab) {
    case 'traditions':
        $title = 'Kukeri';
        $text  = 'Kukeri are traditional Bulgarian masked dancers who perform rituals to chase away evil spirits and bring good fortune. Wearing hand-crafted costumes, bells, and elaborate masks, they parade through villages during winter celebrations.';
        $img   = 'images/CULTURE/kukeri.jpg';
        break;

    case 'festivals':
        $title = 'Rose festival';
        $text  = 'The Rose Festival celebrates Bulgaria’s famous oil-bearing roses, grown in the Rose Valley. Every year in early June, towns like Kazanlak come alive with parades, folk music, and rose-picking rituals that honor this centuries-old tradition.';
        $img   = 'images/CULTURE/rose-festival.jpeg';
        break;

    case 'symbols':
        $title = 'Martenitsa';
        $text  = 'Martenitsa is a traditional Bulgarian symbol of health and new beginnings, worn every year on March 1st. The red-and-white threads represent life, purity, and protection. People exchange them to welcome spring and celebrate Baba Marta.';
        $img   = 'images/CULTURE/martenitsa.jpg';
        break;

    case 'music':
    default:
        // fallback: music tab
        $tab   = 'music';
        $title = 'Gaida';
        $text  = 'The gaida is one of Bulgaria’s most iconic traditional instruments, known for its warm, haunting sound. It is commonly played at celebrations, folk dances, and cultural festivals across the country.';
        $img   = 'images/CULTURE/gaida.jpg';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="culture.css">
    <link rel="stylesheet" href="components/header.css">
    <link rel="stylesheet" href="components/footer.css">
    <title>Culture</title>
</head>
<body>
    <?php include 'components/header.php' ?>
    <div class="hero-box">
        <img src="images/CULTURE/culture-hero.png" alt="Hero image">
        <div class="hero-text">
            <h1>Bulgarian Culture</h1>
            <p>A harmony between ancient traditions and a vibrant modern identity.</p>
        </div>
    </div>
    <main id="culture">
    <div class="tabs">
        <div class="tab-buttons">
            <a href="?tab=music#culture" class="tab-button <?= $tab === 'music' ? 'active' : '' ?>">Music</a>
            <a href="?tab=traditions#culture" class="tab-button <?= $tab === 'traditions' ? 'active' : '' ?>">Traditions</a>
            <a href="?tab=festivals#culture" class="tab-button <?= $tab === 'festivals' ? 'active' : '' ?>">Festivals</a>
            <a href="?tab=symbols#culture" class="tab-button <?= $tab === 'symbols' ? 'active' : '' ?>">Symbols</a>
        </div>
        <div class="horizontal-line"></div>
    </div>
    <div class="culture-box">
        <img src="<?= htmlspecialchars($img) ?>" alt="">
        <div class="culture-text">
            <h1><?= htmlspecialchars($title) ?></h1>
            <p><?= htmlspecialchars($text) ?></p>
        </div>
    </div>
    </main>
    <?php include 'components/footer.html'?>
</body>
</html>