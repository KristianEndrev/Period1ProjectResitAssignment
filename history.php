<?php
// HOW MANY ITEMS TO SHOW PER ROW
$perRow = 3;

// All events data
$events = [
    [
        'date' => 'March 681',
        'title' => 'Founding of the First Bulgarian Empire',
        'text' => 'Khan Asparuh establishes Bulgaria as an independent state south of the Danube.',
        'img'  => 'images/HISTORY/681.webp',
    ],
    [
        'date' => 'April 865',
        'title' => 'Christianization of Bulgaria',
        'text' => 'Bulgaria adopts Christianity under Prince Boris I.',
        'img'  => 'images/HISTORY/865-Christianization.jpg',
    ],
    [
        'date' => 'October 893',
        'title' => 'Golden Age under Tsar Simeon I',
        'text' => 'A period of cultural and territorial expansion begins.',
        'img'  => 'images/HISTORY/893-Tsar Simeon.jpg',
    ],
    [
        'date' => 'February 1185',
        'title' => 'Start of the Uprising of Asen and Peter',
        'text' => 'The rebellion leads to the creation of the Second Bulgarian Empire.',
        'img'  => 'images/HISTORY/1185-Peter and Asen.jpeg',
    ],
    [
        'date' => 'July 1396',
        'title' => 'Fall under Ottoman Rule',
        'text' => 'Bulgaria loses its independence after the Battle of Nicopolis.',
        'img'  => 'images/HISTORY/1396-Fall under Ottoman rule.jpg',
    ],
    [
        'date' => 'May 1762',
        'title' => 'Paisiy Hilendarski writes "Istoriya Slavyanobulgarska"',
        'text' => 'The Bulgarian National Revival is sparked by his work.',
        'img'  => 'images/HISTORY/1762-Istoriya Slavyanobulgarska.webp',
    ],
    [
        'date' => 'April 1876',
        'title' => 'The April Uprising',
        'text' => 'A key event in the struggle for liberation from Ottoman rule.',
        'img'  => 'images/HISTORY/1876-The April uprising.jpg',
    ],
    [
        'date' => 'March 1878',
        'title' => 'Liberation of Bulgaria',
        'text' => 'The Treaty of San Stefano establishes Bulgaria as an autonomous principality.',
        'img'  => 'images/HISTORY/1878-Liberation of Bulgaria.jpg',
    ],
    [
        'date' => 'September 1908',
        'title' => 'Independence of Bulgaria',
        'text' => 'Prince Ferdinand declares full Bulgarian independence.',
        'img'  => 'images/HISTORY/1908-Independence of Bulgaria.jpg',
    ],
];


$perRow = 3;
$total  = count($events);

// how many to show now
$show = isset($_GET['show']) ? (int)$_GET['show'] : $perRow;

// clamp value
if ($show < $perRow) {
    $show = $perRow;
}
if ($show > $total) {
    $show = $total;
}

$hasMore = $show < $total;      // there is at least one hidden item
$hasLess = $show > $perRow;     // we are showing more than the first row
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History</title>
    <link rel="stylesheet" href="history.css">
    <link rel="stylesheet" href="components/header.css">
    <link rel="stylesheet" href="components/footer.css">
</head>
<body>
    <?php include 'components/header.php' ?>
    <main>
        <section class="history-section">
            <h1>History timeline</h1>
            <p class="history-subtitle">
                A land of heroes, empires, and timeless traditions — this is the history of Bulgaria.
            </p>

            <div class="events-grid">
                <?php for ($i = 0; $i < $show; $i++): ?>
                    <?php $event = $events[$i]; ?>
                    <div class="event-card">
                        <div class="event-header">
                            <div class="event-line"></div>
                            <div>
                                <div class="event-date"><?= htmlspecialchars($event['date']) ?></div>
                                <div class="event-title"><?= htmlspecialchars($event['title']) ?></div>
                            </div>
                        </div>
                        <div class="event-image-wrapper">
                            <img src="<?= htmlspecialchars($event['img']) ?>" alt="">
                        </div>
                        <p class="event-text"><?= htmlspecialchars($event['text']) ?></p>
                </div>
                <?php endfor; ?>
            </div>
            <div class="view-buttons">
                <?php if ($hasLess): ?>
                    <form method="get" class="view-less-form">
                        <input type="hidden" name="show" value="<?= max($perRow, $show - $perRow) ?>">
                        <button type="submit" class="view-less-btn">View less</button>
                    </form>
                <?php endif; ?>

                <?php if ($hasMore): ?>
                    <form method="get" class="view-more-form">
                        <input type="hidden" name="show" value="<?= $show + $perRow ?>">
                        <button type="submit" class="view-more-btn">View more</button>
                    </form>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <?php include 'components/footer.html'?>
</body>
</html>
