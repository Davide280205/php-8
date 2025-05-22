<!DOCTYPE html>
<html>
<head>
    <title>Dettaglio Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
<main class="container">
    
    <h1>Dettaglio Book</h1>
    <?php if ($book): ?>
        <p><strong>Id:</strong> <?= htmlspecialchars($book['id']) ?></p>
        <p><strong>Titolo:</strong> <?= htmlspecialchars($book['titolo']) ?></p>
        <p><strong>Autore:</strong> <?= htmlspecialchars($book['autore']) ?></p>
        <p><strong>Anno:</strong> <?= htmlspecialchars($book['anno']) ?></p>
        <p><strong>Stato:</strong> <?= htmlspecialchars($book['stato']) ?></p>
        <?php else: ?>
        <p>Libro non trovato.</p>
    <?php endif; ?>
    <p><a href="index.php">Torna alla lista dei libri</a></p>

</main>
</body>
</html>