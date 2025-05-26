<!DOCTYPE html>
<html>
<head>
    <title>Lista Libri</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>

<main class="container">   

<h1>Libri</h1>

<p><a href="index.php?action=loadForm">Aggiungi un nuovo libro</a></p>

<table class="striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Anno</th>
            <th>Stato</th>
        </tr>
    </thead>

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= htmlspecialchars($book['id']) ?></td>
        <td><?= htmlspecialchars($book['titolo']) ?></td>
        <td><?= htmlspecialchars($book['autore']) ?></td>
        <td><?= htmlspecialchars($book['anno']) ?></td>
        <td><?= htmlspecialchars($book['stato']) ?></td>
        <td><a href="index.php?action=dettaglio&id=<?= $book['id'] ?>">Dettagli dei libri</a> | <a href="index.php?action=elimina&id=<?= $book['id'] ?>" onclick="return confirm('Sei sicuro di voler eliminare questo libro?')">Elimina</a></td>
    </tr>
    <?php endforeach; ?>
    
</table>

</main>

</body>
</html>