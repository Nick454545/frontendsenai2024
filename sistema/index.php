<?php
include "conexao.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- header início -->
     <?php
     include "header.php";
     ?>
     <!-- header fim -->

     <!-- slider inicio -->
    <?php 
    include "slider.php";
    ?>
    <!-- slider fim -->

    <!-- cards início -->
    <?php
        include "cards.php";
    ?>
    <!-- cards fim -->

    <!-- footer início -->
    <?php
    include "cards.php";
    ?>
    <!-- cards fim -->
</body>
</html>