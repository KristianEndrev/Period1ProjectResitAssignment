<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nature.css">
    <link rel="stylesheet" href="components/header.css">
    <link rel="stylesheet" href="components/footer.css">
    <title>Nature</title>
</head>
<body>
     <?php include 'components/header.php' ?>
     <main>
        <div class="hero">
            <div class="hero-text">
                <h1>Discover Bulgaria's wild beauty</h1>
                <p>mountains, lakes, and coastlines waiting to be explored.</p>
            </div>
            <div class="hero-image">
            <img src="images/NATURE/Nature_hero_img.jpeg" alt="nature hero image">
            </div>
        </div>
        <h1 class="top-main-text">Explore the rich colors and diverse scenery that make Bulgaria unique.</h1>
    <section class="nature">
            <h1 class="mountains">MOUNTAINS</h1>
                <div class="horizontal-line"></div>
        <div class="musala-white-box reveal-mountain">
                <img src="images/NATURE/Musala.jpg" alt="">
                <p>“At 2,925 meters, Musala peak rises above the Balkans, offering unforgettable views for every hiker.”</p>
        </div>
            <div class="top-peak reveal">
                <img src="images/NATURE/Circle-VitoshaPeak.png" alt="Vitosha peak">
                <p>Vitosha peak</p>
            </div>
        <div class="bottom-peaks">
            <div class="left-peak reveal-left">
                <img src="images/NATURE/Circle-BotevPeak.png" alt="Vitosha peak">
                <p>Botev peak</p>
            </div>
            <div class="right-peak reveal-right">
                <img src="images/NATURE/Circle-MalyovicaPeak.png" alt="Vitosha peak">
                <p>Malyovica peak</p>
            </div>
        </div>
                <h1 class="sea">SEA</h1>
                <div class="horizontal-line"></div>
                <div class="sea-white-box reveal-left">
                    <img src="images/NATURE/Sozopol.jpg" alt="Sozopol">
                    <p>"Sozopol"</p>
                </div>
                <div class="sea-white-box-sunnybeach reveal-right">
                    <img src="images/NATURE/sunnybeach.png" alt="Sunny beach">
                    <p>"Sunny beach"</p>
                </div>
                <div class="sea-white-box-sinemorec reveal-left">
                    <img src="images/NATURE/sinemorec.jpg" alt="Sinemorec">
                    <p>"Sinemorec"</p>
                </div>
                    <h1 class="mountains">LAKES</h1>
                    <div class="horizontal-line"></div>
                <div class="rila-lakes-white-box reveal-mountain">
                <img src="images/NATURE/sedemte-rilski-ezera.jpg" alt="7 Rila lakes">
                <p>“The Seven Rila Lakes form one of Bulgaria's most famous natural landmarks, known for their crystal-clear water and scenic mountain views.”</p>
        </div>
            <?php
                $place = $_POST['place'] ?? '';
                $images = [
                'musala'      => 'images/NATURE/Musala.jpg',
                'vitosha'     => 'images/NATURE/Vitosha_peak.jpg',
                'botev'       => 'images/NATURE/Botev_Peak.jpg',
                'malyovitsa'  => 'images/NATURE/Malyovica_peak.png',
                'sozopol'     => 'images/NATURE/Sozopol.jpg',
                'sunny-beach' => 'images/NATURE/sunnybeach.png',
                'sinemorec'   => 'images/NATURE/sinemorec.jpg',
                'seven-rila'  => 'images/NATURE/sedemte-rilski-ezera.jpg',
                ];

                if (!empty($place)) {
                    // Map value -> query text for Booking.com
                    $queries = [
                    'musala'      => 'Musala Bulgaria',
                    'vitosha'     => 'Vitosha Bulgaria',
                    'botev'       => 'Botev peak Bulgaria',
                    'malyovitsa'  => 'Malyovitsa Bulgaria',
                    'sozopol'     => 'Sozopol',
                    'sunny-beach' => 'Sunny Beach',
                    'sinemorec'   => 'Sinemorec',
                    'seven-rila'  => 'Seven Rila Lakes',
                    ];
                    $bookingUrl = '';

                    if (isset($_POST['go']) && !empty($place) && isset($queries[$place])) {
                        $q = urlencode($queries[$place]);
                        $bookingUrl = "https://www.booking.com/searchresults.en-gb.html?ss={$q}";
                    }

                }
                ?>
                <div class="destination-box reveal">
                <form method="post">
                    <label for="place">Choose a destination</label>
                    <div class="select-row">
                    <div class="select-wrapper">
                        <select name="place" id="place" required>
                        <option value="" disabled selected>Select a place</option>
                        <option value="musala">Musala</option>
                        <option value="vitosha">Vitosha</option>
                        <option value="botev">Botev</option>
                        <option value="malyovitsa">Malyovitsa</option>
                        <option value="sozopol">Sozopol</option>
                        <option value="sunny-beach">Sunny beach</option>
                        <option value="sinemorec">Sinemorec</option>
                        <option value="seven-rila">Seven Rila Lakes</option>
                        </select>
                    </div>
                    <?php if (!empty($bookingUrl)): ?>
                        <script>
                            window.open('<?= htmlspecialchars($bookingUrl) ?>', '_blank');
                        </script>
                    <?php endif; ?>


                    <button type="submit" class="go-btn" name="go">Go</button>
                    </div>
                </form>
                <div class="preview">
                <?php
                $hiddenClass = (empty($_POST['place']) || !isset($images[$_POST['place']]))
                    ? 'is-hidden'
                    : '';
                ?>
                <img id="preview-img"
                    class="<?= $hiddenClass ?>"
                    src="<?= !empty($_POST['place']) && isset($images[$_POST['place']]) ? htmlspecialchars($images[$_POST['place']]) : '' ?>"
                    alt="<?= !empty($_POST['place']) ? htmlspecialchars($_POST['place']) : '' ?>">
                </div>

                </div>
                </section>
                </main>
                <?php include 'components/footer.html'?>
                <script>
                const imageMap = {
                    'musala':      'images/NATURE/Musala.jpg',
                    'vitosha':     'images/NATURE/Vitosha_peak.jpg',
                    'botev':       'images/NATURE/Botev_Peak.jpg',
                    'malyovitsa':  'images/NATURE/Malyovica_peak.png',
                    'sozopol':     'images/NATURE/Sozopol.jpg',
                    'sunny-beach': 'images/NATURE/sunnybeach.png',
                    'sinemorec':   'images/NATURE/sinemorec.jpg',
                    'seven-rila':  'images/NATURE/sedemte-rilski-ezera.jpg'
                };

                const select = document.getElementById('place');
                const img    = document.getElementById('preview-img');

                select.addEventListener('change', () => {
                    const val = select.value;
                    if (imageMap[val]) {
                    img.src = imageMap[val];
                    img.alt = val;
                    img.style.display = 'block';
                    } else {
                    img.style.display = 'none';
                    }
                });
                </script>

     
</body>
</html>