<header>
    <div class="logo">
        <h3><a href="homeBulgaria.php">VISIT BULGARIA</a></h3>
        <img src="images/HOME/BulgariaFlag.png" alt="Bulgarian Bulgaria Flag">
    </div>
    <nav>
        <ul>
            <?php 
            $navigation = array("CULTURE", "NATURE", "CUISINE", "HISTORY", "COUNTRIES");
            $navigationLink = array("cultureBulgaria.php", "natureBulgaria.php", "cuisineBulgaria.php", "historyBulgaria.php", "index.php");

            for ($i = 0; $i < count($navigation); $i++) {
                echo "<li><a href=\"" . $navigationLink[$i] . "\">" . $navigation[$i] . "</a></li>";
            }
            ?> 
        </ul>
    </nav>
</header>
