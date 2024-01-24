<?php
require("./header.php"); //appel de la page header.php
?>
    <?php if (key_exists("nomUser", $_SESSION)) : ?>
    <?php else : ?>
        <script>
            window.location.href = './login.php'
        </script>
    <?php endif ?>

    <!-- debut de la page -->
    <div class="row m-4 s-20"> <!-- plan de l'ecole -->
        <img src="./image/plan.png" alt="plan hexagone" class="w-100">
    </div>

    <?php
    require("./footer.php"); //appel de la page footer.php
    ?>

    </html>