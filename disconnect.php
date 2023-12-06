<?php //permet de se déconnecter de la session en cours 

session_start();
session_destroy();

echo "<script>window.location.href='./login.php'</script>";