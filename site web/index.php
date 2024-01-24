<?php
require("./header.php"); //appel de la page header.php
?>
<div class="mt-5">    
        <?php if (key_exists("nomUser", $_SESSION)) :?>
            <p>Bienvenue <?php echo($_SESSION['nomUser'])?></p>
        <?php else : ?>
            <script>window.location.href='./login.php'</script>
        <?php endif ?>
</div>
<div class="row mt-1 container-fluid mx-auto"> <!-- debut de la page -->
    <div class="col-lg-1"></div> <!-- margin left -->
    <div class="col-lg-4 s-20"> <!-- ajout des jauges -->
        <div class="d-flex justify-content-center">
            <div id="gauge_temp" class="gauge-container two w-75"></div>
            <!--<div id="gauge_temp" style="margin-top: -200px;" class="gauge-container two w-75"></div>
        -->
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

<?php
require("./footer.php"); //appel de la page footer.php
?>

</html>