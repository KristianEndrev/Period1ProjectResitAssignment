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
        <section  class="history-section">
            <h1>History timeline</h1>
            <p class="history-subtitle">A land of heroes, empires, and timeless traditions — this is the history of Bulgaria.</p>

            <div id="history" class="events-grid">
                <?php for ($i = 0; $i < $show; $i++): ?>
                    <?php $event = $events[$i]; ?>
                    <div class="event-card">
                        <div class="event-header">
                            <div class="event-line"></div>
                            <div>
                                <div id="event" class="event-date"><?= htmlspecialchars($event['date']) ?></div>
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
                    <form method="get" action="#history" class="view-less-form">
                        <input type="hidden" name="show" value="<?= max($perRow, $show - $perRow) ?>">
                        <button type="submit" class="view-less-btn">View less</button>
                    </form>
                <?php endif; ?>

                <?php if ($hasMore): ?>
                    <form method="get" action="#history" class="view-more-form">
                        <input type="hidden" name="show" value="<?= $show + $perRow ?>">
                        <button type="submit" class="view-more-btn">View more</button>
                    </form>
                <?php endif; ?>
            </div>
        </section>
        <section class="quiz-section">
  <button type="button" id="quiz-toggle-btn" class="quiz-toggle-btn">
    Do you want to take the quiz?
  </button>

<div id="quiz-container" class="quiz-container">
  <h2 class="quiz-title">Mini quiz</h2>

  <form id="quiz-form">
    <div class="quiz-question">
      <p>1. In which year was the First Bulgarian Empire founded?</p>
      <label><input type="radio" name="q1" value="681"> 681</label>
      <label><input type="radio" name="q1" value="865"> 865</label>
      <label><input type="radio" name="q1" value="893"> 893</label>
    </div>

    <div class="quiz-question">
      <p>2. Who introduced Christianity to Bulgaria in 865?</p>
      <label><input type="radio" name="q2" value="boris"> Boris I</label>
      <label><input type="radio" name="q2" value="simeon"> Simeon I</label>
      <label><input type="radio" name="q2" value="asparuh"> Asparuh</label>
    </div>

    <div class="quiz-question">
      <p>3. Which Tsar began Bulgaria's Golden Age in 893?</p>
      <label><input type="radio" name="q3" value="Simeon I"> Tsar Simeon I</label>
      <label><input type="radio" name="q3" value="Ivan Asen II"> Tsar Ivan Asen II</label>
      <label><input type="radio" name="q3" value="Boris I"> Prince Boris I</label>
    </div>

    <div class="quiz-question">
      <p>4. In what year did Bulgaria fall under Ottoman rule?</p>
      <label><input type="radio" name="q4" value="1396"> 1396</label>
      <label><input type="radio" name="q4" value="1185"> 1185</label>
      <label><input type="radio" name="q4" value="1878"> 1878</label>
    </div>

    <div class="quiz-question">
      <p>5. Which major uprising occurred in April 1876?</p>
      <label><input type="radio" name="q5" value="April Uprising"> The April Uprising</label>
      <label><input type="radio" name="q5" value="Chiprovtsi Uprising"> Chiprovtsi Uprising</label>
      <label><input type="radio" name="q5" value="Velchova Uprising"> Velchova Uprising</label>
    </div>

    <div class="quiz-question">
      <p>6. What treaty liberated Bulgaria in 1878?</p>
      <label><input type="radio" name="q6" value="Treaty of San Stefano"> Treaty of San Stefano</label>
      <label><input type="radio" name="q6" value="Berlin Treaty"> Berlin Treaty</label>
      <label><input type="radio" name="q6" value="Bucharest Treaty"> Bucharest Treaty</label>
    </div>


    <button type="button" id="check-quiz">Check answers</button>
    <button type="button" id="reset-quiz">Reset quiz</button>
  </form>

  <p id="quiz-message"></p>
</div>

</section>

    </main>
    <?php include 'components/footer.html'?>
<script>
  // Show the minquiz when the button is clicked:
  const showQuizBtn   = document.getElementById('quiz-toggle-btn');
  const quizContainer = document.getElementById('quiz-container');

  showQuizBtn.addEventListener('click', function () {
    quizContainer.style.display = 'block';
    showQuizBtn.style.display = 'none';
  });

  const checkBtn   = document.getElementById('check-quiz');
  const resetBtn   = document.getElementById('reset-quiz');
  const quizForm   = document.getElementById('quiz-form');
  const messageP   = document.getElementById('quiz-message');

  checkBtn.addEventListener('click', function () {
    let total = 6;
    let correct = 0;

    const q1 = quizForm.querySelector('input[name="q1"]:checked');
    if (q1 && q1.value === '681') {
      correct++;
    }

    const q2 = quizForm.querySelector('input[name="q2"]:checked');
    if (q2 && q2.value === 'boris') {
      correct++;
    }

        const q3 = quizForm.querySelector('input[name="q3"]:checked');
    if (q3 && q3.value === 'Simeon I') {
      correct++;
    }

        const q4 = quizForm.querySelector('input[name="q4"]:checked');
    if (q4 && q4.value === '1396') {
      correct++;
    }

        const q5 = quizForm.querySelector('input[name="q5"]:checked');
    if (q5 && q5.value === 'April Uprising') {
      correct++;
    }

        const q6 = quizForm.querySelector('input[name="q6"]:checked');
    if (q6 && q6.value === 'Treaty of San Stefano') {
      correct++;
    }

    messageP.textContent = 'You got ' + correct + ' out of ' + total + ' correct.';
  });

  resetBtn.addEventListener('click', function () {
    quizForm.reset();
    messageP.textContent = '';
  });
</script>



</body>
</html>
