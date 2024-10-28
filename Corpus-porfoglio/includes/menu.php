<?php $paginaCorrente = basename($_SERVER['SCRIPT_FILENAME']); ?>

<nav>

    <a href="index.php" <?php if ($paginaCorrente == 'index.php') {echo 'id="here"';} ?>>Home</a>
    <a href="info.php" <?php if ($paginaCorrente == 'info.php') {echo 'id="here"';} ?>>Info</a>
    <a href="lavori.php" <?php if ($paginaCorrente == 'lavori.php') {echo 'id="here"';} ?>>Lavori</a>
    <a href="contatti.php" <?php if ($paginaCorrente == 'contatti.php') {echo 'id="here"';} ?>>Contatti</a>


</nav>