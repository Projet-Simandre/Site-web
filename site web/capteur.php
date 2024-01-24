<?php 
require("./header.php"); //appel de la page header.php
?>
    <?php if (key_exists("nomUser", $_SESSION)) : ?>
    <?php else : ?>
        <script>
            window.location.href = './login.php'
        </script>
    <?php endif ?>
    
    <div class="row m-4 s-20"><!-- debut de la page -->
        <div class="col-lg"><!-- ajout des jauges -->
            <p>ESP-1</p> <!-- chaque ESP à trois jauges -->
            <div class="d-flex justify-content-around flex-wrap">
                <div>
                    <div id="gauge_temp" class="gauge-container two w100"></div> <!-- jauge 1 -->
                    <p class="text-center"><b>Température</b></p>
                </div>
                <div>
                    <div id="gauge_hum" class="gauge-container two w100"></div> <!-- jauge 2 -->
                    <p class="text-center"><b>Humidité</b></p>
                </div>
                <div>
                    <div id="gauge_air" class="gauge-container two w100"></div> <!-- jauge 3 -->
                    <p class="text-center"><b>Qualité d'air</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-4 s-20">
        <div class="col-lg">
            <hr>
            <p>ESP-2</p>
            <div class="d-flex justify-content-around flex-wrap">
                <div>
                    <div id="gauge_json1" class="gauge-container two w100"></div>
                    <p class="text-center"><b>1</b></p>
                </div>
                <div>
                    <div id="gauge_json2" class="gauge-container two w100"></div>
                    <p class="text-center"><b>2</b></p>
                </div>
                <div>
                    <div id="gauge_json3" class="gauge-container two w100"></div>
                    <p class="text-center"><b>3</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-4 s-20">
        <div class="col-lg">
            <hr>
            <p>ESP-3</p>
            <div class="d-flex justify-content-around flex-wrap">
                <div>
                    <div id="gauge_json4" class="gauge-container two w100"></div>
                    <p class="text-center"><b>4</b></p>
                </div>
                <div>
                    <div id="gauge_json5" class="gauge-container two w100"></div>
                    <p class="text-center"><b>5</b></p>
                </div>
                <div>
                    <div id="gauge_json6" class="gauge-container two w100"></div>
                    <p class="text-center"><b>6</b></p>
                </div>
            </div>
        </div>
    </div>

    <?php 
    require("./footer.php"); //appel de la page footer.php
    ?>

</html>