<!DOCTYPE html>
<html lang="en-US">
<?php
$title = 'Inicio';
$inicio = 'current-menu-item';
include('includes/head.php');
?>
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
<body class="home-one home-five">

    <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        include('includes/redes.php');
        include('includes/preloader.php');
        include('includes/scripts.php');
    ?>

</body>

</html>