<?php 
require("./header.php"); //appel de la page header.php
?>
    <div class="row mt-5 container-fluid mx-auto"> <!-- debut de la page -->
        <div class="col-lg-1"></div> <!-- margin left -->
        <div class="col-lg-4 s-20"> <!-- ajout des jauges -->
            <div class="d-flex justify-content-center">
                <div id="gauge_temp" class="gauge-container two w-75"></div>
                <!-- chaque jauges doient avoir son propore id pour s'afficher correctement -->
            </div>
            <br>
            <p class="text-center"><b>Moyenne de la température</b></p> <!-- jauge moyennne de la température -->
            <div class="d-flex justify-content-center">
                <div id="gauge_hum" class="gauge-container two w-75"></div>
            </div>
            <br>
            <p class="text-center"><b>Moyenne de l'humidité</b></p> <!-- jauge moyennne de l'humidité -->
            <div class="d-flex justify-content-center">
                <div id="gauge_air" class="gauge-container two w-75"></div>
            </div>
            <br>
            <p class="text-center"><b>Moyenne de la qualité d'air</b></p> <!-- jauge moyennne de la qualité d'air -->
        </div>
        <div class="col-lg d-flex align-items-center mb-3"> <!-- parti droite de la page -->
            <img src="./image/plan.png" alt="plan hexagone" class="w-100"> <!-- plan de l'école -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./svg-gauge-master/dist/gauge.min.js"></script> <!-- JavaScript pour les jauges globales -->
    <script src="./script/script_temperature.js"></script> <!-- script pour la température -->
    <script src="./script/script_humidite.js"></script> <!-- script pour l'humidité -->
    <script src="./script/script_air.js"></script> <!-- script pour la qualité d'air -->
    <?php 
    require ("./footer.php"); //appel de la page footer.php
    ?>

</html>