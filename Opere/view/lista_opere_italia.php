<!DOCTYPE html>
<html>
<head>
    <title>Museo dell'elettricità</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >

</head>
<body>

<main class="container">   

<h1>Opere in Italia</h1>


<p><a href="index.php?action=destItalia">Mostra le opere dell'Italia</a></p>


<table class="striped">
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Paese di destinazione</th>
            <th>Azioni</th>
        </tr>
    </thead>

    <?php  foreach ($opere as $opera):?>

    <tr>
        <td><?= htmlspecialchars($opera['titolo'])?></td>
        <td><?= htmlspecialchars($opera['paese'])?></td>
        <td><a href="index.php?action=dettaglio&id=<?= $opera['id'] ?>">Dettagli</a> | <a href="index.php?action=modifica&id=<?= $opera['id'] ?>">Modifica</a> | <a href="index.php?action=elimina&id=<?= $opera['id'] ?>" onclick="return confirm('Sei sicuro di voler eliminare questa opera?')">Elimina</a></td>
    </tr>


    <?php endforeach; ?>
    
</table>

</main>

</body>
</html>
