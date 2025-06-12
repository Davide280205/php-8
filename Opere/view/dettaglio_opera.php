<!DOCTYPE html>
<html>
<head>
    <title>Dettaglio Opera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">


    <h1>Dettaglio Opera</h1>

    <?php if($opera): ?>

        <p><strong>Titolo:</strong> <?= htmlspecialchars($opera['Id']) ?></p>
        <p><strong>Anno di produzione:</strong> <?= htmlspecialchars($opera['anno']) ?></p>
        <p><strong>Stato di conservazione:</strong> <?= htmlspecialchars($opera['stato']) ?></p>
        <p><strong>Paese di destinazione:</strong> <?= htmlspecialchars($opera['paese']) ?></p>

    

    <?php else: ?>

        <p>Opera non trovata.</p>


    <?php endif; ?>

    
    <p><a href="index.php">Torna alla lista delle opere</a></p>

</main>
</body>
</html>
