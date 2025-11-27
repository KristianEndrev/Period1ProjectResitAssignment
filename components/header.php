<header>
    <div class="logo">
        <h3>VISIT BULGARIA</h3>
        <img src="images/HOME/BulgariaFlag.png" alt="Bulgarian Bulgaria Flag">
    </div>
    <nav>
        <ul>
            <?php 
            $navigation = array("CULTURE", "NATURE", "CUISINE", "HISTORY", "COUNTRIES");
            $navigationLink = array("#", "#", "#", "#", "#");

            for ($i = 0; $i < count($navigation); $i++) {
                echo "<li><a href=\"" . $navigationLink[$i] . "\">" . $navigation[$i] . "</a></li>";
            }
            ?> 
        </ul>
    </nav>
</header>
