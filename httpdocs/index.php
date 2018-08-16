<!DOCTYPE html>

<html>
    <head>
        <?php
            $_pagename = "accueil"; 
            include("./head.php");
        ?>
    </head>
    <body>
        <?php
            include("./header.php");
        ?>
        
        <div id="page" class="container">
            <div id="boxs">
                <div class="boxA">
                    <a href="./education.php" class="">
                        <div class="box">
                            <h2>Education Canine</h2>
                            <img src="./images/chien_assis_donne_patte.png" alt="" />
                            <p>Une vie harmonieuse avec mon compagnon</p>
                        </div>
                    </a>
                    <p>Spécialiste en éducation canine les ateliers <span class="edania">Edania</span> vous apprendront les bonnes pratiques pour une vie harmonieuse avec votre compagnon.</p>
                    <a href="./education.php" class="button">Visitez le site</a>
                </div>

                <div class="boxB">
                    <a href="./mediation.php" class="">
                        <div class="box">
                            <h2>Médiation Animale</h2>
                            <img src="./images/chien_caresse2.png" alt="" />
                            <p>Une aide pour les personnes en difficultés</p>
                        </div>
                    </a>
                    <p>La présence d'animaux de compagnie, éduqués spécifiquement par <span class="edania">Edania</span>, favorise le bien-être des personnes en difficultés</p>
                    <a href="./mediation.php" class="button">Visitez le site</a>
                </div>

                <div class="boxC">
                    <a href="./randonnee.php" class="">
                        <div class="box">
                            <h2>Randonnée en Lamas</h2>
                            <img src="./images/lama.png" alt="" />
                            <p>Des souvenirs inoubliables</p>
                        </div>
                    </a>
                    <p>Unique dans la région, <span class="edania">Edania</span> organise des randonnées en Lamas vous laissant des souvenirs inoubliables</p>
                    <a href="./randonnee.php" class="button">Visitez le site</a>
                </div>
            </div>
        </div>
        
        
        <div id="featured" class="container">
            <div class="align-left">
                <img src="images/pattes.png" alt="pattes" />
            </div>
            <div class="align-right">
                <p>Votre centre <span class="edania">Edania</span>, spécialiste dans les relations entre Humains et animaux, met à disposition sa structure au profit de 3 activités complémentaires axées sur le bien-être animalier:</p>
                <ul class="style1">
                    <li>Education canine</li>
                    <li>Médiation animale</li>
                    <li>Randonnée en Lamas</li>
                </ul>
                <p></p>
                <!--a href="#" class="button">Etiam posuere</a-->
            </div>
        </div>
        <?php
            include("./footer.php");
        ?>
        <script src="js/jquery-2.1.3.js"></script>
        <script>
            $( function() {
                $("#boxs").delay(200).slideDown(1000);
            });
        </script>
    </body>
</html>
