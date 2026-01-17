<?php session_start(); ?>
<!--
    CLERC Pierre-François
    Création 16/01/2026
    index.php
    Mini projet RPG du BTS SIO
-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Poképrof</title>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'function.inc.php'; ?>
    </head>
    <body>
        <?php
            $display = main();  
        ?>
        <div class="gameboy-screen">
            <!-- Zone Affichage -->
            <div class="form-box">
                <?php
                    // Enemy
                    echo displayEnemy();
                    // Player
                    echo displayPlayer();
                ?>
                <div class="zone zone5">
                    <!-- Message -->
                    <p><?php echo $display['message']; ?></p>
                </div>
            </div>
            <!-- Zone Boutons -->
            <div class="battle-menu">
                <?php echo $display['battleMenu']; ?>
            </div>
        </div>
    </body>
</html>
