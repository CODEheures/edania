<!DOCTYPE html>

<html>
    <head>
        <?php
            $_pagename = "mediation"; 
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
                    <a href="#" class="">
                        <div class="box">
                            <h2>Education Canine</h2>
                            <img src="./images/chien_assis_donne_patte.png" alt="" />
                            <p>Une vie harmonieuse avec mon compagnon</p>
                        </div>
                    </a>
                    <p>Spécialiste en éducation canine les ateliers <span class="edania">Edania</span> vous apprendront les bonnes pratiques pour une vie harmonieuse avec votre compagnon.</p>
                    <a href="#" class="button">Visitez le site</a>
                </div>

                <div class="boxB">
                    <a href="#" class="">
                        <div class="box">
                            <h2>Médiation Animale</h2>
                            <img src="./images/chien_caresse2.png" alt="" />
                            <p>Une aide pour les personnes en difficultés</p>
                        </div>
                    </a>
                    <p>La présence d'animaux éduqués spécifiquement par <span class="edania">Edania</span> favorise le bien-être de personnes en difficultés</p>
                    <a href="#" class="button">Visitez le site</a>
                </div>

                <div class="boxC">
                    <a href="#" class="">
                        <div class="box">
                            <h2>Randonnée en Lamas</h2>
                            <img src="./images/lama.png" alt="" />
                            <p>Des souvenirs inoubliables</p>
                        </div>
                    </a>
                    <p>Unique dans la région, <span class="edania">Edania</span> organise des randonnées en Lamas vous laissant des souvenirs inoubliables</p>
                    <a href="#" class="button">Visitez le site</a>
                </div>
            </div>
        </div>
        
        
        <div id="featured" class="container">
            <div class="align-left">
                <img src="images/chien_caresse2.png" alt="pattes" />
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
                $("#boxs").css("display","block");
                $("#boxs").delay(200).slideUp(1000);
                (function(){
                    $("#banner ul li:first-child").animate({"marginLeft": -document.body.querySelector("#banner").clientWidth}, 800, function(){  
                        $(this).css("margin-left",0).appendTo("#banner ul");  
                    }); 
                })();
            });
        
        </script>
    </body>
</html>
