        <div id="header" class="container">
            <div id="logo">
                <h1><a href="./index.php">Edania</a></h1>
                <div id="mini-logo">
                <?php
                    if ($_pagename == "accueil") {
                        echo "<div id=\"logo1\"></div>\n";
                        echo "<div id=\"logo2\"></div>\n";
                        echo "<div id=\"logo3\"></div>\n";
                    } elseif ($_pagename == "education") {
                        echo "<div id=\"logo1\"></div>\n";
                        echo "<p>Education canine</p>";
                    } elseif ($_pagename == "mediation") {
                        echo "<div id=\"logo2\"></div>\n";
                        echo "<p>Médiation animale</p>";
                    } elseif ($_pagename == "randonnee") {
                        echo "<div id=\"logo3\"></div>\n";
                        echo "<p>Randonnée en lama</p>";
                    }
                ?>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li class="active"><a href="#" accesskey="1" title="">Accueil</a></li>
                    <li><a href="#" accesskey="3" title="">&Agrave; propos</a></li>
                    <li><a href="#" accesskey="5" title="">Nous contacter</a></li>
                </ul>
            </div>
        </div>
        <div id="banner">
            <ul>
                <li><img src="images/banner2.jpg" alt="banner2"/></li>
                <li><img src="images/banner3.jpg" alt="banner2"/></li>
            </ul>
        </div>